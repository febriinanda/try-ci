<?php
class Employees extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('employees_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['title'] = "Employees Page";
        $data['employees'] = $this->employees_model->get_employees();

        $this->load->view('template/header', $data);
        $this->load->view('employees/index', $data);
        // $this->load->view('template/footer', $data);
    }

    public function view($id = NULL){
        $data['item'] = $this->employees_model->get_employees($id);
        if (empty($data['item']))
        {
                show_404();
        }

        $data['title'] = $data['item']['fullname'];

        $this->load->view('template/header', $data);
        $this->load->view('employees/view', $data);
        $this->load->view('template/footer');
    }
}
?>