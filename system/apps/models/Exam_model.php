<?php
class Exam_model extends CI_Model{
    function getExamTitleViaSchedule($id = 0){
        $this->db->select('e.title');
        $this->db->from('exam as e');
        $this->db->join('exam_schedule as es','e.id = es.exam_id and es.id = '.$id);
        $get = $this->db->get();
        if($get->num_rows())
            return $this->response($get,'title');
        return;
    }
    
    function getExam($id = 0, $field = '_row'){
        $get = $this->db->get_where('exam',['id' => $id]);
        if($get->num_rows()){
            return $this->response($get,$field);
        }
        return;
    }
    
    function listExamCenter($exam_id){
        $get = $this->getExam($exam_id,'centers');
        $return = [];
        if($get != 'null' && $get){
            $list = json_decode($get,true);
            foreach($list as $row){
                $return[] = ['id' => $row,'title' => $this->getCenter($row)->row('title')];
            }
        }

        return $return;
    }
    
    function isExistsExam($exam_id,$user_id){
        return $this->db->get_where('user_exams',['exam_id' => $exam_id,'user_id' => $user_id]);
    }
    
    
    private function response($instance,$field = '_row'){
        if($field == '_result'){
            return $instance->result();
        }
        if($instance->num_rows()){
            return $field == '_row' ? $instance->row()  : $instance->row($field);
        }
        return '';
    }
    
    function listCategory($value = 1,$field = 'type'){
        if($value)
            $this->db->where($field,$value);
        return $this->db->get("exam_category");
    }

    function exam_category_array(){
        $list = $this->listCategory(0);
        $data = [];
        if($list->num_rows()){
            foreach($list->result() as $tow){
                $data[$tow->id] = $tow->title;
            }
        }
        return $data;
    }
    
    function listExamByCategory($superCategory = 1){
        
        if(isset(config_item('default_category')[$superCategory])){
            return $this->db->select('*')
                    ->from('exam as e')
                    ->join('exam_category ec','ec.id = e.category and ec.type = '.$superCategory )
                    ->get()->result_array();
            
        }
        return [];
        
        
    }
    
    
    function latestForms(){
        return $this->db->order_by('id','desc')->get('exam');
    }
    

    function listCenters(){
        return $this->db->where('status','Active')->get('centers');
    }

    function getCenter($id){
        return $this->db->where('id',$id)->get('centers');
    }

    function submitForm($data){
        return $this->db->insert('user_exams',$data);
    }

    function getUserExam($user_id){
        return $this->db->where('user_id',$user_id)->get('user_exams');
    }

    function getUserExams($user_id){
        return $this->db->select('e.admit_card_time,ue.utr,ue.transaction,ue.payment_status,ue.exam_id,ue.id as id,ue.user_id,ue.registration_no,e.title as exam,c.title as center')
                ->from('user_exams as ue')
                ->join('exam as e','e.id = ue.exam_id AND ue.user_id = '.$user_id)
                ->join('centers as c','c.id = ue.center_id AND ue.user_id = '.$user_id)
                ->order_by('id','DESC')
                ->get();
    }

    function getExamWithCategory($exam_id){
       return $this->db->select('e.*,e.title as exam,ec.title as category,ec.type')
                ->from('exam as e')
                ->join('exam_category as ec' , 'ec.id = e.category AND e.id = '.$exam_id)
                ->get();
    }
    
    function get_admit_card($rid,$user_id = 0){
        if($user_id){
            $response = $this->db->select('u.*,ue.id as roll_id,ue.*,e.exam_time,e.title,CONCAT(UCASE(LEFT(c.address, 1)), LCASE(SUBSTRING(c.address, 2))) as center_address, CONCAT(UCASE(LEFT(c.title, 1)), LCASE(SUBSTRING(c.title, 2))) as center_name')
                                ->from('users as u')
                                ->join('user_exams as ue','ue.registration_no = "'.$rid.'" AND u.id = '.$user_id)
                                ->join('exam as e','e.id = ue.exam_id AND u.id = '.$user_id)
                                ->join('centers as c','c.id = ue.center_id AND u.id = '.$user_id)
                                ->get();
        }
        else{
            $response = $this->db->select('ue.*,ue.id as roll_id,e.title,e.exam_time,u.*,CONCAT(UCASE(LEFT(c.address, 1)), LCASE(SUBSTRING(c.address, 2))) as center_address, CONCAT(UCASE(LEFT(c.title, 1)), LCASE(SUBSTRING(c.title, 2))) as center_name')
                                ->from('user_exams as ue')
                                ->join('exam as e','ue.exam_id = e.id AND ue.registration_no = '.$rid)
                                ->join('users as u','u.id = ue.user_id AND ue.registration_no = '.$rid)
                                ->join('centers as c','c.id = ue.center_id AND ue.registration_no = '.$rid)
                                ->limit(1)
                                ->get();
        }
        
        
        
        return $response;
    }
    
    function user_admit_card($id){
        $this->db->select('*')
                ->from('exam as e');
            if($id)
                $this->db->join('user_exams as ue','ue.exam_id = e.id AND e.id = '.$id.' AND ue.user_id = '.$this->session->user_id);
            else
                $this->db->join('user_exams as ue','ue.exam_id = e.id AND ue.user_id = '.$this->session->user_id);
                
                
        return $this->db
                    ->get();
    }
    
    function list_admit_card($id = 0){
       
        return $this->db->where('DATE(admit_card_time) <=',date('Y-m-d'))->order_by('admit_card_time','DESC')->get('exam');
    }
    
    function list_marksheet_for_front(){
        return $this->db->where('DATE(result_time) <=',date('Y-m-d'))->order_by('result_time','DESC')->get('exam');
    
    }
    
    
}
?>