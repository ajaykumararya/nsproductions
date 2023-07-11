<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Admin_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('common/main_lib');
    }
    
    
    function page(){
        $type = $this->uri->segment(3,0);
        $get = $this->db->where("keywords",$type)->get('pages');
        if($get->num_rows()){
            $data = $get->row_array();
            if($post = $this->input->post()){
                $this->db->where('id',$data['id'])->update('pages',['content' => $_POST['content']]);
                redirect(current_url());
            }
            else{
                $data['type'] = $type;
                $this->render('dynamic-page',$data);
            }
        }
        else
            $this->render('admin/not-found');
    }
    
    
    
    
    
    

    
     
    // ������ ������ ��� ���� ��������� ������� ��������
    function get_settings()
    {
        $settings = $this->db->get('settings')->result_array();
        $data = array();
        foreach ($settings as $key => $value)
        {
            $data[$value['name']] = $value['value'];
        }
        return $data;
    }
 
    // ����� ����� ��������� �����
    function get_one_setting($name)
    {
        $this->db->where("name", $name);
        $query = $this->db->get('settings');
        $data = $query->row_array();
        return $data['value'];
    }
    
    

}