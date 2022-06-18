<?php 
class login_model extends CI_model{ 

    public function login_admin($email,$password){ 
        $this->db->select('*'); 
        $this->db->from('admin'); 
        $this->db->where('email',$email); 
        $this->db->where('password',$password);

        if($query=$this->db->get()) 
        { 
            return $query->row_array(); 
        } 
        else 
        { 
            return false; 
        } 
    }
} 
?>
