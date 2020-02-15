<?php

class Data_position extends CI_Controller
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
      $data['position'] = $this->M_resto->get_data('position')->result();
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/position/data_position', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function tambah_position()
  {
    if ($this->session->userdata('role_id') === '1') {
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/position/form_tambah_position');
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function tambah_position_aksi()
  {
    $nama_position              = $this->input->post('nama_position');
    $salary                     = $this->input->post('salary');

    $data = array(
      'nama_position'         => $nama_position,
      'salary'                => $salary
    );

    $this->M_resto->insert_data($data, 'position');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Position</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_position');
  }
  public function update_position($id)
  {
    if ($this->session->userdata('role_id') === '1') {
      $where = array('id_position' => $id);
      $data['position'] = $this->db->query("SELECT * FROM position WHERE id_position='$id'")->result();

      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/position/form_update_position', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function update_position_aksi()
  {
    $id_position            = $this->input->post('id_position');
    $nama_position          = $this->input->post('nama_position');
    $salary                 = $this->input->post('salary');

    $data = array(
      'nama_position'           => $nama_position,
      'salary'                  => $salary
    );

    $where = array('id_position' => $id_position);
    $this->M_resto->update_data('position', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Position</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_position');
  }
  public function delete_position($id)
  {
    $where = array('id_position' => $id);
    $this->M_resto->delete_data($where, 'position');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Position</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_position');
  }
}
