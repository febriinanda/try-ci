<?php
class Employees_model extends CI_Model{
    var $table_name = "users";
    public function __construct(){
        $this->load->database();
    }

    public function get_employees($id = FALSE){
        if($id == FALSE){
            $query = $this->db->get($this->table_name);
            return $query->result_array();
        }

        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row_array();
    }
}
?>