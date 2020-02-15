<?php

class Menu_not_available extends CI_Controller
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
        $data['menu'] = $this->M_resto->get_data_menu_not_available()->result();
        $this->load->view('templates/backend/header');
        $this->load->view('templates/backend/topbar');
        $this->load->view('templates/backend/sidebar');
        $this->load->view('pages/admin/menu/Menu_not_available', $data);
        $this->load->view('templates/backend/footer');
    }
}
