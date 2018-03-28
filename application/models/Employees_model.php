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

    public function set_employee()
    {
        $this->load->helper('url');
        $id = $this->uuid->v4();
        $username = strtolower($this->input->post('firstname')).".".strtolower($this->input->post('lastname'));
        $fullname = ucfirst($this->input->post('firstname'))." ".ucfirst($this->input->post('lastname'));
        $password = $this->randomString();
        
        $data = array(
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'fullname' => $fullname, 
            'department'=> $this->input->post('department'), 
            'status' => 1, 
            'avatar' => NULL 
        );

        return $this->db->insert($this->table_name, $data);
    }

    private function randomString($length = 6) {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
}
?>