<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('pages_model');
        $this->load->library('common/main_lib');
        $this->load->model('exam_model');
    }

	public function index()
	{
        $this->render('index');
    }
    function tools(){
        $this->crud->set_table('tools')
            ->set_subject('Sarkari Tool(S)')
            ->columns('title','color','link')
            ->set_rules('link', 'URL', 'required|valid_url')
            ->display_as('link','Url')
            ->callback_field('color',function($value = ''){
                return '<input id="field-color" class="form-control" name="color" type="color" value="'.$value.'" maxlength="200">';
            })
            ->callback_field('text_color',function($value = ''){
                return '<input id="field-text_color" class="form-control" name="text_color" type="color" value="'.$value.'" maxlength="200">';
            })
            ->display_as('color','Color Code')
            ->required_fields('title','color','text_color','link')
            ->unset_texteditor('link','full_text')
            ->unset_clone()
            ->unset_read();
        $this->render();
    }
    function logoff()
    {
        $data = array(
            'title' => 'Logout',
            'error' => ''
        );
        $this->session->sess_destroy();  // обнуляем сессию
        redirect(base_url().'admin');
    }
    function audio_category(){
        $this->crud->set_table('audio_category')
            ->set_subject('Audio category','Audio Category(s)')
            ->columns('category_name')
            ->required_fields('category_name','status')
            ->unset_clone()
            ->unset_read()
            ->field_type('status','dropdown',$this->option)
            ->callback_column('status',function($value){
                $option = $this->option[$value];
                return $value ? label($option) : label($option,'danger');
            });
        $this->render();
    }
    function audio(){
        $this->crud->set_table('audio')
            ->set_subject('Audio','Audio(s)')
            ->columns('cat_id','title','status')
            ->set_relation('cat_id','audio_category','category_name')
            ->required_fields('title','cat_id','status')
            ->unset_clone()
            ->display_as('cat_id','Category')
            ->unset_read()
            ->field_type('status','dropdown',$this->option)
            ->callback_column('status',function($value){
                $option = $this->option[$value];
                return $value ? label($option) : label($option,'danger');
            });
        $this->render();
    }

    function video_category(){
        $this->crud->set_table('video_category')
            ->set_subject('Video category','Video Category(s)')
            ->columns('category_name')
            ->required_fields('category_name','status')
            ->unset_clone()
            ->unset_read()
            ->field_type('status','dropdown',$this->option)
            ->callback_column('status',function($value){
                $option = $this->option[$value];
                return $value ? label($option) : label($option,'danger');
            });
        $this->render();
    }
    function video(){
        $this->crud->set_table('videos')
            ->set_subject('Video','Video(s)')
            ->columns('cat_id','title','status')
            ->set_relation('cat_id','video_category','category_name')
            ->required_fields('title','cat_id','status')
            ->unset_clone()
            ->display_as('cat_id','Category')
            ->unset_read()
            ->field_type('status','dropdown',$this->option)
            ->callback_column('status',function($value){
                $option = $this->option[$value];
                return $value ? label($option) : label($option,'danger');
            });
        $this->render();
    }
    function users(){
        $this->crud->set_table('users')
            ->set_subject('User','Users')
            ->set_field_upload('img','upload')
            ->columns('img','name','email','mobile','status')
            ->display_as('img','Image')
            ->unset_texteditor('local_area','full_text')
            ->required_fields('name','email','mobile')
            ->unset_clone()
            ->unset_read()
            ->field_type('status','dropdown',$this->option)
            ->callback_column('status',function($value){
                $option = $this->option[$value];
                return $value ? label($option) : label($option,'danger');
            })
            ->callback_column('mobile',function($t,$v){
                return '<a href="tel:'.$t.'" target="_black"><i class="fa fa-phone"></i> '.$t.'</a>';
            })
            
            ->callback_column('email',function($t,$v){
                return '<a href="mailto:'.$t.'" target="_black"><i class="fa fa-envelope"></i> '.$t.'</a>';
            })
            ->callback_column('total_exam(s)',function($d,$rw){
                return $this->exam_model->getUserExam($rw->id)->num_rows();
            });
        $this->render();
        // print_r($this->crud->render());
    }
    function exam_category(){
        $this->crud->set_table('exam_category')
            ->set_subject('Category','Category(s)')
            ->columns('type','title')
            ->field_type('type','dropdown',config_item('default_category'))
            ->required_fields('type','title')
            ->unset_clone()
            ->unset_read();
        $this->render();
    }
    
    function center(){
        $this->crud->set_table('centers')
                ->unset_texteditor('address')
                ->required_fields('title','address','status')
                ->unset_read()
                ->unset_clone();
        $this->render();
    }
    function exam(){
        
        $this->crud->set_table('exam')
            ->set_subject('Exam','Exam(s)')
            // ->set_relation('category','exam_category',' title')

            ->required_fields('fees','title','category','fee','start_time','end_time','exam_time','admit_card_time','result_time','short_description')
            // ->add_action('Schedule','','admin/exam_schedule','clock-o')
            ->unset_clone()
            ->unset_read()

            ->callback_column('fees',function($value = ''){
                return $value.' <i class="fa fa-rupee"></i>';
            })
            ->callback_column('category',function($value,$row){
                return $this->exam_model->listCategory($value,'id')->row('title');
            })

            ->callback_column('centers',function($value,$key){
                // return $value;
                $count =  ($value != 'null' AND $value) ? sizeof(json_decode($value,true)) : 0;
                return label($count.' Centers',$count > 0 ? 'success' : 'danger');
            })
            
            ->callback_before_insert([$this,'json_encode_input'])
            
            ->callback_before_update([$this,'json_encode_input'])

            ->field_type('category','dropdown',$this->exam_model->exam_category_array())
            
            ->order_by('exam.id','DESC')
            
            ->unset_clone()
            ->set_rules('fees','Fees','numeric')
            ->callback_field('centers',function($value,$primary_key = null){
                $input = $attr = $json_decode = [];
                $data = $this->exam_model->listCenters();
                if($data->num_rows()){
                    $json_decode = ( ($value != 'null' AND $value) ? json_decode($value,true) : []);
                   
                    $attr = ['class' =>  'ace'];
                    foreach($data->result() as $row){
                        $input[] = ['input' => form_checkbox('centers[]',$row->id,in_array($row->id,$json_decode),$attr),
                                    'title' => $row->title .' '. label($row->address,'inverse arrowed-in-right arrowed pull-right','span')  ,];
                    }
                }
                return $this->parser->parse('extra/center-select.tpl',['data' => $input],true);
            });
            
        $this->render();
    }
    function test(){
        $this->crud->set_table('user_exams');
        $this->render();
    }
    function user_exams(){
        $this->crud->set_table('user_exams')
                ->columns('registration_no','timestamp','user_id','exam_id','center_id','payment','payment_details','change_status','Result','admit_card')
                ->order_by('user_exams.id','DESC')
               
                
                ->set_relation('user_id','users','name')
                // ->set_relation('exam_id','exam','title')
                ->set_relation('center_id','centers',"{title} <b>{address}</b>")


                ->callback_column('exam_id',function($exam_id,$row){
                    $exam = $this->exam_model->getExam($exam_id,'title');
                    return "<a href='javascript:;' class='exam-details' data-id='$exam_id'>{$exam}</a>";
                })
                
                ->callback_column('payment_details',function($v,$row){
                    $html = '';
                    if($row->utr)
                        $html .= label('UTR : '.$row->utr,'success arrowed-in-right arrowed');
                    if($row->transaction)
                        $html .= label('Transaction: '.$row->transaction,'success arrowed-in-right arrowed');
                        
                    if(!$row->utr AND !$row->transaction)
                        $html .= label('Detail not found..','inverse label-white middle');
                    
                    return $html;
                })
                
                ->callback_column('timestamp',function($v,$r){
                    return '<i class="fa fa-clock-o"></i> '.date('d-m-Y',strtotime($v));
                })

                ->display_as('exam_id','Exam')
                ->display_as('center_id','Center')
                ->display_as('user_id' ,'User')
                ->display_as('payment','Payment Status')
                ->display_as('timestamp','Date')
                
                ->callback_column('admit_card',function($v,$r){
                    return '<a target="_blank" href="'.base_url('admit-card/'.$r->registration_no).'" class="btn btn-primary btn-xs get-admit-card">Admit Card</button>';
                })
                ->callback_column('change_status',function($value,$row){
                    
                    return '<select class="form-control-sm change-payment-status" data-id="'.$row->registration_no.'">
                                <option value="1" '.($row->payment_status ? 'selected' : '').'>Success</option>
                                <option value="0" '.(!$row->payment_status ? 'selected' : '').'>Not Deduct</option>
                            </select>';
                })
                
                ->callback_column('payment',[$this,'getpaymentsattus'])
                ->callback_column('Result',function($value,$row){
                    
                    $html = '<button class="upload-marksheet btn btn-white btn-sm btn-info btn-bold" data-id="'.$row->registration_no.'"><i class="fa fa-upload"></i></button>'."&nbsp;";
                    if($row->result){
                        $html .= '<button class="btn btn-white btn-sm btn-primary show-marksheet btn-bold" data-href="'.base_url('upload/marksheets/'.$row->result).'"><i class="fa fa-eye"></i></button>';
                    }
                    return $html;
                    
                })

                ->unset_delete()
                ->unset_add()
                ->unset_edit()
                ->unset_clone()
                ->unset_read();

        $this->render();
    }
    public function upload_marksheet() {
      $status = '';
      $msg = '';
      $file_path = '';
      $regi = $this->input->post('registration_no');
      if (isset($_FILES['file'])) {
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $new_file_name = $regi.'.'.$file_ext;
        
        $extensions = array('pdf', 'jpeg', 'jpg', 'png', 'gif');
        
        if (in_array($file_ext, $extensions) === false) {
          $status = 'error';
          $msg = 'File type not allowed';
        } elseif ($file_size > (1048576 * config_item('upload_size')) ) {
          $status = 'error';
          $msg = 'File size must be less than 2 MB';
        } else {
          $file_path = 'upload/marksheets/' . $new_file_name;
          move_uploaded_file($file_tmp, $file_path);
          $status = 'success';
          $msg = 'File uploaded successfully';
          $this->db->update('user_exams',['result' => $new_file_name],['registration_no' => $this->input->post('registration_no')]);
        }
      } else {
        $status = 'error';
        $msg = 'No file selected';
      }
      
      echo json_encode(array('status' => $status, 'msg' => $msg, 'file_path' => base_url($file_path)));
    }

    function change_user_exam_status(){
        $this->db->update('user_exams',['payment_status' => $this->input->post('status')],['registration_no'=>$this->input->post('registration_no')]);
        echo $this->getpaymentsattus($this->input->post('status'));
    }
    function getpaymentsattus($value,$row = null){
        $value = ($row) ? $row->payment_status : $value;
        return $value ? label('Success','success label-white middle') : label('Not Deduct.','danger label-white middle');
    }
    function json_encode_input($post_array){
        $post_array['centers'] = json_encode($post_array['centers']);
        return $post_array;
    }
    
    function exam_schedule($id = 0){
        $this->config->set_item('id',$id);
        $this->crud->set_table('exam_schedule')
            ->set_subject('Exam Schedule','Exam Schedule(s)')
            // ->set_relation('exam_id','exam','title')
            ->required_fields('title','start_time','end_time','exam_time','admit_card_time','result_time','short_description')
            ->order_by('id','DESC')
            ->where('exam_id',$id)
            ->unset_clone()
            ->add_fields('exam_id','title','apply_time','exam_time','end_time','admit_card_time','result_time','short_description')
            ->edit_fields('title','apply_time','exam_time','end_time','admit_card_time','result_time','short_description')
            ->field_type('exam_id','hidden',$id)
            ->callback_field('title',function($value ,$primary_key = null){
                $value = $this->crud->getState() == 'add' ? $this->exam_model->getExamTitleViaSchedule(config_item('id')) : $value;
                return '<input id="field-title" class="form-control" name="title" type="text" value="'.$value.'" maxlength="255">';
            })
            ->unset_read();
        $this->render();
    }
    
}
