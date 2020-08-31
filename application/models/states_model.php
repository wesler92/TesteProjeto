<?php 
class States_model extends CI_Model{
    public function searchStates(){
        return $this->db->get("states")->result_array();
    }
}