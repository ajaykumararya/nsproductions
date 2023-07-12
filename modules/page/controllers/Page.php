<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        
        $this->load->library('common/main_lib');
        $this->load->database();
        $this->load->model('exam_model');
    }

    function not_found(){
        echo '<h1>This page is not found..</h1>';
    }
    function test(){
        $this->db->where('DATE(admit_card_time) <',date('Y-m-d'))->get('exam');
        // echo $this->db->last_query();
        // exit;
        $admit = $this->exam_model->get_admit_card(16836393968672);
        if($admit->num_rows()){
                
                // $this->load->library('tcpdf');
                $this->load->library('pdf');
                $data = $admit->row_array();
                
                // echo '<pre>'; print_r($data); exit;
                $image_data = file_get_contents('admit-card-img/a.png');
                $base64_image = base64_encode($image_data);
                $data['back_img'] = '<img  src="data:image/jpeg;base64,' . $base64_image . '" alt="Image">';
                $image_data = file_get_contents('upload/'.$data['img']);
                $base64_image = base64_encode($image_data);
                $data['user_img'] = '<img class="user-img p-a" src="data:image/jpeg;base64,' . $base64_image . '" alt="Image">';
                
                $dateTime = strtotime($data['exam_time']);
                $data['date'] = date('d-m-Y',$dateTime);
                $data['time'] = date('H:i A',$dateTime);
                if(!empty($data['dob'])){
                    $data['dob'] = date('d-m-Y',strtotime($data['dob']));
                }
                
                // echo '<pre>'; print_r($data); exit;
                
                $html = $this->parser->parse('frontend/admit-card.tpl', $data, true);
                echo $html;
                // $this->pdf->createPDF($html,'admit-card.pdf');
                // $this->pdf->createPDF($html, 'mypdf', false);
        }
        else
            echo 'no';
    }
    function admit_card(){
        $rid = $this->uri->segment(2,0);
        if($this->session->has_userdata('user_login') || $this->session->has_userdata('admin_login')){
            if( $this->session->has_userdata('user_login') ){
                $admit = $this->exam_model->get_admit_card($rid,$this->session->user_id);   
                if($admit->num_rows()){
                    if(!$admit->row()->status){
                        show_error('Your account is inactive, So You can not be access your <b>Admit Card</b>.',500,'Warning');
                    }
                }
            }
            
            if($this->session->has_userdata('admin_login')){
                $admit = $this->exam_model->get_admit_card($rid);
            }
            
            if($admit->num_rows()){
                
                // $this->load->library('tcpdf');
                $this->load->library('pdf');
                $data = $admit->row_array();
                // echo '<pre>'; print_r($data); exit;
                $image_data = file_get_contents('admit-card-img/a.png');
                $base64_image = base64_encode($image_data);
                $data['back_img'] = '<img  src="data:image/jpeg;base64,' . $base64_image . '" alt="Image">';
                $data['user_img'] = '';
                if(file_exists('upload/'.$data['img'])){
                    $image_data = file_get_contents('upload/'.$data['img']);
                    $base64_image = base64_encode($image_data);
                    $data['user_img'] = '<img class="user-img p-a" src="data:image/jpeg;base64,' . $base64_image . '" alt="Image">';
                }
                
                $dateTime = strtotime($data['exam_time']);
                $data['date'] = date('d-m-Y',$dateTime);
                $data['time'] = date('H:i A',$dateTime);
                
                $random = str_pad($data['roll_id'],4,'0',STR_PAD_LEFT);
                $rollNo = date('Y').date('m').date('d').$random;
                if(empty($data['roll_no'])){
                    $data['roll_no'] = $rollNo;   
                }
                if(!empty($data['dob'])){
                    $data['dob'] = date('d-m-Y',strtotime($data['dob']));
                }
                $html = $this->parser->parse('frontend/admit-card.tpl', $data, true);
                
                
                
                
                $this->pdf->createPDF($html, 'mypdf', false);
                // echo $html;
                
                /*
                
                
                        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

                        // Set document information
                        $pdf->SetCreator(PDF_CREATOR);
                        $pdf->SetAuthor($data['name']);
                        $pdf->SetTitle($data['title']);
                        $pdf->SetSubject($data['title'].' Admit Card');
                        $pdf->SetKeywords('admit card');
                
                        // Set default header and footer data (optional)
                        $pdf->setPrintHeader(false);
                        $pdf->setPrintFooter(false);
                
                        // Set margins
                        // $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
                        $pdf->SetHeaderMargin(0);
                        $pdf->SetFooterMargin(0);
                
                        // Set auto page breaks
                        // $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
                
                        // Add a page
                        $pdf->AddPage();
                
                        // HTML content for the PDF
                        // $html = '<h1>Hello, World!</h1>';
                        // $html .= '<p>This is an example PDF generated from HTML in CodeIgniter.</p>';
                        // $pdf->AddHtml($html);

                        // Write HTML content to the PDF
                        $pdf->writeHTML($html, true, false, true, false, '');
                        // $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 0, $fill = 0, $reseth = true, $align = '', $autopadding = true);

                
                        // Output the PDF as a file or inline in the browser (optional)
                        $pdf->Output($data['title'].'.pdf', 'I');
    // echo $html;
    */
                
                
                
                
                
                
                
                
                
            }
            else
                show_error('Registration NO. is Wrong.','Error');
        }
        else{
            show_error('Something went wrong..');
        }
        
        
    }
    function get_exam_table(){
        $exam_id = $this->uri->segment(3,0);
        $exam = $this->exam_model->getExamWithCategory($exam_id);
        if($exam->num_rows()){
            $row = $exam->row();
            echo '<table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th>Exam</th>
                        <td>'.$row->exam.'</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>'.$row->category.'</td>
                    </tr>
                    <tr>
                        <th>Main Category</th>
                        <td>'.config_item('default_category')[$row->type].'</td>
                    </tr>
                    <tr>
                        <th>Exam Time</th>
                        <td>'.$row->exam_time.'</td>
                    </tr>
                    
                    <tr>
                        <th>Admit Card Time</th>
                        <td>'.$row->admit_card_time.'</td>
                    </tr>
                    
            
                </table>';
        }
        else{
            echo alert('Exam Details not found..','danger');
        }
    }
    function exam_details($id = 1){
        $data = $this->db->where('id',$id)->get('exam');
        $return = ['title' => 'Error','status' => false,'content' => '<h3 class="text-danger">Exam details are not found.</h3>'];
        if($data->num_rows()){
            $row = $data->row_array();
            // echo '<pre>';
            // print_r($row);
            // exit;
            $return['status'] = true;
            $return['title'] = $row['title'];
            $return['price'] = $row['fees'];
            $return['content'] = $this->load->view('exam-details',$row,true);
        }
        echo json_encode($return);
    }
    
    function admin_login(){
        $this->form_validation->set_rules('username','Username','required|xss_clean|trim');
        $this->form_validation->set_rules('password','Password','required|xss_clean|trim');
        $return = ['status' => false];
        if($this->form_validation->run()){
            $post  = $this->input->post();
            // $return['post'] = $post;
            $get = $this->db
                        ->where('username',$post['username'])
                        ->where('password',sha1($post['password']))
                        ->get('admin');
            if($get->num_rows()){
                $row = $get->row();
                $this->session->set_userdata([
                    'admin_login'   => true,
                    'admin_id'      => $row->id,
                    'admin_name'    => $row->name
                ]);
                $return['status'] = true;
                $return['message'] = '<div class="alert  alert-success">Login Successfully..</div>';
            }
            else{
                $return['message'] = '<div class="alert  alert-danger">Wrong Username or Password..</div>';
            }
            
        }
        else{
            $return['message'] = validation_errors('<div class="alert alert-danger">','</div>');
        }
        echo json_encode($return);
    }
    
    public function index()
	{
        $this->load->view('front-page');
	}
    
    
    function render($page,$data = []){
        $this->load->view('frontend/include/header');
        $this->load->view($page,$data);
        $this->load->view('frontend/include/footer');
    }
    
    function page(){
        // $content = 0;
        $page = $this->uri->segment(2,0);
        $data = ['content' => ''];
        $get = $this->db->where("keywords",$page)->get('pages');
        if($get->num_rows()){
            $data = $get->row_array();
            if($data['type_page'] == 'page'){
                $data['content'] = $this->load->view($data['keywords'],$data,true);
            }
        }
        $this->render('page',$data);
    }
    
    

    
    public function hmvc()
    {
        $data = array(
            'title' => 'Первая страница из шаблона',
            'name' => 'Александр Мороз',
            'compani' => 'RAMStudio',
            'url' => 'http://moroz.rv.ua',
            'heading' => 'Страница из модуля welcome - Welcome to CodeIgniter HMVC!'
        );
        $this->load->view('welcome_message', $data);
    }
    
    public function parse()
    {
        $this->load->library('parser');
        $data = array(
            'title' => 'Первая страница из шаблона',
            'name' => 'Александр Мороз',
            'compani' => 'RAMStudio',
            'url' => 'http://moroz.rv.ua',
            'heading' => 'Страница из шаблона тем (шаблон acme)- Welcome to CodeIgniter HMVC!'
        );
        
        $this->parser->parse(DIR_THEMS.'/welcome_message_header.tpl', $data);
        $this->parser->parse(DIR_THEMS.'/welcome_message_tpl.tpl', $data);
    }
    
}
