<?php

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['resto'] = $this->M_resto->get_data('resto')->result();
		$data['sliders'] = $this->M_resto->get_data('slider')->result();
		$data['kategori'] = $this->M_resto->get_data('kategori')->result();
		$data['menu'] = $this->M_resto->get_data('menu')->result();
		$this->load->view('templates/frontend/header');
		$this->load->view('templates/frontend/navbar');
		$this->load->view('pages/customer/dashboard', $data);
		$this->load->view('templates/frontend/footer');
	}
}
