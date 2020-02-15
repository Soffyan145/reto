<?php

class Setting extends CI_Controller
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
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/settings/home_setting');
    $this->load->view('templates/backend/footer');
  }
}
