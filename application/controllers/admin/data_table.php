<?php

class Data_table extends CI_Controller
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
    $data['table'] = $this->M_resto->get_data('meja')->result();
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/table/data_table', $data);
    $this->load->view('templates/backend/footer');
  }
  public function tambah_table()
  {
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/table/form_tambah_table');
    $this->load->view('templates/backend/footer');
  }
  public function tambah_table_aksi()
  {
    $nama_table               = $this->input->post('nama_table');
    $kapasitas                = $this->input->post('kapasitas');
    $deskripsi                = $this->input->post('deskripsi');
    $status                   = $this->input->post('status');

    $data = array(
      'nama_table'         => $nama_table,
      'kapasitas'          => $kapasitas,
      'deskripsi'          => $deskripsi,
      'status'             => $status
    );

    $this->M_resto->insert_data($data, 'meja');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Table</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_table');
  }
  public function update_table($id)
  {
    $where = array('id_table' => $id);
    $data['table'] = $this->db->query("SELECT * FROM meja WHERE id_table ='$id'")->result();

    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/table/form_update_table', $data);
    $this->load->view('templates/backend/footer');
  }
  public function update_table_aksi()
  {
    $id_table               = $this->input->post('id_table');
    $nama_table             = $this->input->post('nama_table');
    $kapasitas              = $this->input->post('kapasitas');
    $deskripsi              = $this->input->post('deskripsi');
    $status                 = $this->input->post('status');

    $data = array(
      'nama_table'             => $nama_table,
      'kapasitas'              => $kapasitas,
      'deskripsi'              => $deskripsi,
      'status'                 => $status
    );

    $where = array('id_table' => $id_table);
    $this->M_resto->update_data('meja', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Table</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_table');
  }
  public function delete_table($id)
  {
    $where = array('id_table' => $id);
    $this->M_resto->delete_data($where, 'meja');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Table</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_table');
  }
}
