<?php

class Menu extends CI_Controller
{
    public function index()
    {
        $this->load->view('tamplates/frontend/header');
        $this->load->view('tamplates/frontend/navbar');
        $this->load->view('pages/customer/menu');
        $this->load->view('templates/frontend/footer');
    }
}
