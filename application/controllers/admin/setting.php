<?php

class Setting extends CI_Controller
{
  public function index()
  {
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/settings/home_setting');
    $this->load->view('templates/backend/footer');
  }
}
