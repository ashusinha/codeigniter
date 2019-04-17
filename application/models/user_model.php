<?php
class User_Model extends CI_Model
{
    
    public function user_name()
    {        
        $query = $this->db->get_where('user', array('uid' => $this->session->userdata('id')));
        return $query->row();
    }
    public function CreateWedding($postdata)
    {
        $query = $this->db->insert('wedding_info',$postdata);
        if($query)
        {
            return 1;
        }
    }
    public function create_controller()
    {
       $query = $this->db->get_where('virtual',array('class_name'=>  $this->input->post('class_name')));
        return $query->row(); 
    }
}