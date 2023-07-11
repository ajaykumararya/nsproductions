<?php
class Admin_Controller extends MY_Controller{
    public $data,$method,$class,$activeURI;
    public $option = ['1' => 'Active' ,'0' =>'In-Active'];
    function __construct(){
        parent :: __construct();

        $thisMethod = strtolower($this->router->fetch_method());
        $thisController = strtolower($this->router->fetch_class());

        if(!$this->session->has_userdata('admin_login')){
            echo $this->parser->parse('admin/login.tpl',[],true);
            exit;
        }
      
        if(!isset($_SESSION["lang"])){
            $result['language'] = 'english';//$this->db->select('*')->where('default', '1')->get('language')->row_array(); // выборка ленгвиж из таблицы настройки сайта
        }else{ 
            $result['language'] = $_SESSION["lang"]; 
        }
        $directory = 'modules/admin/language/'.$result['language']; // вместо language/russian дефолт ленгвиж из базы
        //
        $this->load->library('common/language',$directory);
        $this->language->load('common/login');
        
        $this->lang->load($result['language'],$result['language']);
        
        $this->load_crud();

        $this->data = ['title' => 'Admin Dashboard','name' => $this->session->userdata('admin_name'),'base_url' => base_url(),'css_files' => '','js_files' => '',
                       'dashboard' =>  $this->activeMenu('index'),
                       'users' => $this->activeMenu('users') ,
                       'exam_category' => $this->activeMenu('exam_category'),
                       'exam' => $this->activeMenu('exam') ,
                       'user-exams' => $this->activeMenu('user_exams') ,
                       'center' => $this->activeMenu('center') ,
                       'pages' => $this->activeMenu('page','open') ,
                       'videos' => $this->activeMenu('video'),
                       'page_style' => $this->activeMenu('page','open') == 'open' ? 'display:block' : '' ,
                       'terms-condition' => $this->activeMenu('terms-condition','active',true) ,
                       'privacy-policy' => $this->activeMenu('privacy-policy','active',true) ,
                       'refund-and-cancelation' => $this->activeMenu('refund-and-cancelation','active',true) ,
                       'about-us' => $this->activeMenu('about-us','active',true) ,
                       'sarkari-tool' => $this->activeMenu('tools') ,
                       
                    ];
        // echo '<pre>'; print_r($this->data);
        // exit;
        
    }
    
    

    function load_crud($database = ''){
        $this->load->library('grocery_CRUD');
        $this->crud = new grocery_CRUD($database);
        return $this;
    }

    function render($page= 'crud', $data = []){
        if($page == 'crud'){
            $page = 'settings/crud';
            $output = (array) $this->crud->render();
            $this->data['output'] = $output['output'];
            // echo '<pre>';
            
            foreach($output['css_files'] as $file){
                $this->data['css_files']  .= '<link href="'.$file.'" rel="stylesheet">';
            }
            
            foreach($output['js_files'] as $file){
                $this->data['js_files']  .= '<script src="'.$file.'" ></script>';
            }
            $this->data['ouput'] = ($output['output']);
            // exit;
        }
        $data = array_merge($this->data,$data);

        
        $this->parser->parse('admin/header.tpl',$data);
        $this->parser->parse("$page.tpl",$data);
        $this->parser->parse('admin/footer.tpl',$data);
    }

    function testing1(){
        echo 'kk';
    }

    
}

?>