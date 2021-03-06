<?php
class Employees extends CI_Controller{
    private $department = [
        "Human Resource",
        "Information Technology",
        "Sales",
        "Finance",
        "Marketing",
        "Logistic"
    ];

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
        $data['result'] = 'failed';
        $data['department'] = $this->department;
        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');

        $data['title'] = "New Employee";

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('employees/create');
        }
        else
        {
            $this->employees_model->set_employee();
            $data['result'] = 'success';
            $this->load->view('template/header', $data);
            $this->load->view('employees/create', $data);
        }
        
    }

    public function edit($id = null){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['result'] = 'failed';

        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');

        $data['title'] = "Edit Employee";
        $data['employee'] = $this->employees_model->get_employees($id);
        $data['department'] = $this->department;

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('employees/edit', $data);
        }
        else
        {
            $this->employees_model->update_employee($data['employee']);
            $data['result'] = 'success';
            $data['employee'] = $this->employees_model->get_employees($id);
            $this->load->view('template/header',$data);
            $this->load->view('employees/edit');
        }
        
    }
}
?>