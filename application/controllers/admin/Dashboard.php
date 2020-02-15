<?php

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['count_menu'] 					= $this->M_resto->count_menu();
		$data['count_user'] 					= $this->M_resto->count_user();
		$data['count_table'] 					= $this->M_resto->count_table();
		$data['count_slider'] 					= $this->M_resto->count_slider();
		$data['count_employee'] 					= $this->M_resto->count_employee();
		$data['count_menu_not_available'] 		= $this->M_resto->count_menu_not_available();

		$this->load->view('templates/backend/header');
		$this->load->view('templates/backend/topbar');
		$this->load->view('templates/backend/sidebar');
		$this->load->view('pages/admin/dashboard', $data);
		$this->load->view('templates/backend/footer');
	}

	public function get_tot()
	{
		$tot = $this->M_resto->total_rows();
		$result['tot'] = $tot;
		$result['msg'] = "Berhasil direfresh secara realtime";
		echo json_encode($result);
	}
}
