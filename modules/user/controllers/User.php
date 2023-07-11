<?php
class User extends MY_Controller{
    public $data = array();
    function __construct(){
        parent :: __construct();
        $this->data = ['title' => 'User Dashboard','name' => $this->session->userdata('user_name'),'base_url' => base_url(),'main_category' => config_item('main_category'),
    'user_img' => $this->session->user_img];
        $this->load->model('exam_model');
    }
    function logout(){
        $this->session->unset_userdata('user_login');
        redirect('user');
    }
    function render($page= 'dashboard', $data = []){
        if($this->session->has_userdata('user_login')){
            $get = $this->db->where('id',$this->session->user_id)->get('users');
            
            $this->data = array_merge($this->data,[
                        'dashboard' =>  $this->activeMenu('index'),
                        'exam' => $this->activeMenu('exams') ,
                        'admit_card' => $this->activeMenu('admit_card')]);
            
            
            $data = array_merge($this->data,$data);
            if($get->num_rows()){
                $row = $get->row();
            
                $data['details_popup'] = (empty($row->dob) || empty($row->father_name) || empty($row->address));
                // $data['userDetails'] = $get->row_array();
            }
            $data['content'] = $this->parser->parse("$page.tpl",$data,true);
            // echo '<pre>';
            // print_r($data);
            // exit;
            
            
            
            $this->parser->parse('main.tpl',$data);
        }
        else{
            $data['type'] = 'login';
            $this->load->view('registration-login',$data);
        }
    }
    function updateForm(){
        $user_id = $this->session->user_id;
        if($post = $this->input->post()){
            $this->form_validation->set_rules('father_name','Father Name','required');
            $this->form_validation->set_rules('dob','Date of Birth','required');
            $this->form_validation->set_rules('address','Address','required');
            $return = ['status' => false];
            if($this->form_validation->run()){
                $return['status'] = $this->db->where('id',$user_id)->update('users',$post);
                $return['message'] = 'Details Update Successfully..';
            }
            else{
                $return['message'] = $this->form_validation->error_array();
            }
            echo json_encode($return);    
        }
        else{
            $get = $this->db->where('id',$user_id)->get('users');
            echo $this->parser->parse('update-form.tpl',$get->row_array(),true);
        }
    }
    function index(){
        $this->render();
    }
    function category($id = 1){
        
        $this->render('category',['id' => decode($id)]);
    }
    
    function getCenterDetails($center_id){
        if($center_id){
            $get = $this->exam_model->getCenter($center_id)->row();
            echo '<table class="table table-bordered table-primary table-striped table-hover">
                    <thead>
                        <tr>
                            <th colspan="2"><b>Center Details</b></th>
                        </tr>
                    </thead>     
                    <tr>
                        <th>Name : </th>
                        <td>'.$get->title.'</td>
                    </tr>     
                    <tr>
                        <th>Address : </th>
                        <td>'.$get->address.'</td>
                    </tr>
            </table>';
        }
    }
    function form_payment(){
        $id = decode($this->uri->segment(3,0));
        // echo $id;
        $data = [];
        $row = $this->db->where('id', @$this->session->user_id)->get('users');
        if($row->num_rows()){
            $row = $row->row();
            $exam = $this->exam_model->getExam($id);
            $examCenters = $this->exam_model->listExamCenter($exam->id);
            $isExistsExam = $this->exam_model->isExistsExam($exam->id,$row->id);
            $data = [
                'holder_name' => $row->name,
                'email' => $row->email,
                'mobile' => $row->mobile,
                'total'  => $exam->fees * 100,
                'amount' => $exam->fees,
                'img' => ($row->img == 'user.jpg' || $row->img == ''),
                'product_info' => $exam->title,
                'txnid' => time(),
                'back_url' => base_url('user/payment-response'),
                'id'  => $exam->id,
                'center' => $examCenters,
                'countCenter' => sizeof($examCenters),
                'not_found_message' => sizeof($examCenters) ? '' : alert('Centers are not available.','danger'),
                'submit_btn' => $isExistsExam->num_rows() ? alert('This is already added in your account.','danger') :'<button class="btn btn-primary save"><i clas=""></i> Submit</button>',
                'center_class' => sizeof($examCenters) ? 'has-success' : 'has-error'
            ];
        }
        $this->render('form_payment',$data);
    }
    function submit_form(){
        if($post = $this->input->post()){
            $price = $this->exam_model->getExam($post['exam_id'],'fees');
            $data = [
                'user_id' => $this->session->user_id,
                'exam_id' => $post['exam_id'],
                'center_id' => $post['center_id'],
                'fees' => $price,
                'registration_no' => time().rand(9999,1111),
                'payment_status' => 0
            ];
            $data['response'] = json_encode($data);
            $this->exam_model->submitForm($data);
            echo json_encode(['status' => true,'order_id' => $data['registration_no']]);
        }
    }

    function profile(){
        $user_id = $this->session->user_id;
        $message = ['status' => 'failed'];
        if($post = $this->input->post()){
            
            if($post['type'] == 'basic'){
                unset($post['type']);
                $this->db->where('id',$user_id)->update('users',$post);
                $message = (['message' => "Basic Details Update Successfully.",'status' => 'success']);
            }
            else if($post['type'] == 'password'){
                unset($post['type']);
                $this->db->where('id',$user_id)->update('users',$post);
                $message = (['message' => "Password Update Successfully.",'status' => 'success']);
            }
            else{
                if ($_FILES['img']['error'] === UPLOAD_ERR_OK) {
                    $tmpName = $_FILES['img']['tmp_name'];
                    $name = $_FILES['img']['name'];
                    $ext = pathinfo($name, PATHINFO_EXTENSION); // Get the file extension
                    $newName = uniqid() . '.' . $ext; // Generate a new unique name with the same extension
                    $path = 'upload/' . $newName;
                    move_uploaded_file($tmpName, $path);
                    $message['message'] = 'Profile uploaded successfully.';
                    $message['profile'] = base_url($path);
                    $message['status'] = 'success';
                    $this->session->set_userdata('user_img',base_url($path));    
                    $this->db->where('id',$user_id)->update('users',['img' => $newName]);
                } else {
                    $message['message'] = 'Error uploading file.';
                }
            }

            echo json_encode($message);

        }
        else{

                $data = $this->db->where('id',$user_id)->get('users')->row_array();
                $this->render('profile',$data);
        }
    }
    function update_payment(){
        if($post = $this->input->post()){
            $data = [
                'utr' => $post['utr'],
                'transaction' => $post['transaction']
            ];
            $this->db->where('registration_no',$post['registration_no'])->update('user_exams',$data);
            echo json_encode(['status' => true]);
        }
        else
            $this->render('update_payment');
    }
    function exam(){
        $id = $this->uri->segment(3,0);
        $this->render('exam-details',['id'=> $id]);
        // echo '<h2 style="color:red">Payment Option Disabled.</h2>';
        
    //     $this->load->library('encrypt');
    // echo $key = ($this->encrypt->encode(16));
    }
    
    
    function exams(){
        $this->render('exams');
    }
    
    function admit_card(){
        $id = $this->uri->segment(3,0);
        // $r = $this->exam_model->user_admit_card($id)->result_array();
        // echo '<pre>';
        // print_r($r);
        // exit;
        $this->render('admit-card-list',[
                // 'list' => $this->exam_model->user_admit_card($id)->result_array()
                'id' => $id
            ]);
    }
    

    function login(){
        if($post = $this->input->post()){

            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            $return = ['status'=> false];
            if($this->form_validation->run()){
                $get = $this->db->where('mobile',$post['username'])->where('password',$post['password'])->get('users');
                if($get->num_rows()){
                    $row = $get->row();
                    $this->session->set_userdata([
                        'user_login' => true,
                        'user_id' => $row->id,
                        'user_name' => $row->name,
                        'user_img' => base_url('upload/'.$row->img)
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
        else
            $this->load->view('registration-login',['type' => 'login']);
    }


    function register(){
        if($post = $this->input->post()){

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('mobile','Mobile','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('c_password','Confirm Password','required|matches[password]',[
                'matches' => 'Password  not matched.'
            ]);
            if($this->form_validation->run()){
                $data = [
                    'name' => $post['name'],
                    'email' => $post['email'],
                    'mobile' => $post['mobile'],
                    'password' => $post['password']
                ];
                $this->db->insert('users',$data);
                $this->session->set_flashdata('success','<div class="alert alert-success">Register Complete.</div>');
                redirect('user/login');

            }
            else{
                $this->session->set_flashdata('error',validation_errors('<div class="alert alert-danger">','</div>'));
            }
            redirect(base_url('user'));
        }
        else{
            $this->load->view('registration-login',['type' => 'register']);
        }
    }

}

?>