<?php

class Data_type extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('toastr');
  }
  public function index()
  {
    $data['type'] = $this->M_resto->get_data('type')->result();
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/type/data_type', $data);
    $this->load->view('templates/backend/footer');
  }
  public function tambah_type()
  {
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/type/form_tambah_type');
    $this->load->view('templates/backend/footer');
  }
  public function tambah_type_aksi()
  {
    $nama_type              = $this->input->post('nama_type');

    $data = array(
      'nama_type'         => $nama_type
    );
    $this->M_resto->insert_data($data, 'type');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Menu</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_type');
  }
  public function update_type($id)
  {
    $where = array('id_type' => $id);
    $data['type'] = $this->db->query("SELECT * FROM type WHERE id_type='$id'")->result();

    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/type/form_update_type', $data);
    $this->load->view('templates/backend/footer');
  }
  public function update_type_aksi()
  {
    $id_type               = $this->input->post('id_type');
    $nama_type          = $this->input->post('nama_type');

    $data = array(
      'nama_type'           => $nama_type
    );

    $where = array('id_type' => $id_type);
    $this->M_resto->update_data('type', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Type</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_type');
  }
  public function delete_type($id)
  {
    $where = array('id_type' => $id);
    $this->M_resto->delete_data($where, 'type');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Type</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_type');
  }
}
