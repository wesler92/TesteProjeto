<?php
class Users_model extends CI_Model{
    public function Save($user){
        $this->db->insert("users",$user);
    }
    public function loginUsers($name,$password){
        $this->db->where("name", $name);
        $this->db->where("password", $password);
        $user = $this->db->get("users")->row_array();
        return $user;
    }
}