<?php

class Data_salary extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        if ($this->session->userdata('role_id') === '1') {
            $data['salaryes'] = $this->db->query("SELECT * FROM salary INNER JOIN employee ON salary.id_employee=employee.id_employee INNER JOIN position ON employee.id_position=position.id_position")->result();
            $this->load->view('templates/backend/header');
            $this->load->view('templates/backend/topbar');
            $this->load->view('templates/backend/sidebar');
            $this->load->view('pages/admin/salary/Data_salary', $data);
            $this->load->view('templates/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }

    public function add_salary()
    {
        if ($this->session->userdata('role_id') === '1') {
            $data['employees'] = $this->M_employee->get_data('employee')->result();
            $data['positions'] = $this->M_employee->get_data('position')->result();
            $this->load->view('templates/backend/header');
            $this->load->view('templates/backend/topbar');
            $this->load->view('templates/backend/sidebar');
            $this->load->view('pages/admin/salary/add', $data);
            $this->load->view('templates/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
}
