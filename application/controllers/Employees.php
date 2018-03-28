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
        
    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        $data['title'] = "New Employee";

        if ($this->form_validation->run() === FALSE)
        {
            
            $this->load->view('template/header', $data);
            $this->load->view('employees/create');

        }
        else
        {
            $this->news_model->set_employee();
            $this->load->view('employees/success');
        }
        
    }
}
?>