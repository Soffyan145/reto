<?php

class Data_kategori extends CI_Controller
{
  public function index()
  {
    $data['kategori'] = $this->M_resto->get_data('kategori')->result();
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/kategori/data_kategori', $data);
    $this->load->view('templates/backend/footer');
  }
  public function tambah_kategori()
  {
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/kategori/form_tambah_kategori');
    $this->load->view('templates/backend/footer');
  }
  public function tambah_kategori_aksi()
  {
    $nama_kategori          = $this->input->post('nama_kategori');
    $data = array(
      'nama_kategori'         => $nama_kategori
    );

    $this->M_resto->insert_data($data, 'kategori');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Kategori</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_kategori');
  }
  public function update_kategori($id)
  {
    $where = array('id_kategori' => $id);
    $data['kategori'] = $this->db->query("SELECT * FROM kategori WHERE id_kategori='$id'")->result();

    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/kategori/form_update_kategori', $data);
    $this->load->view('templates/backend/footer');
  }
  public function update_kategori_aksi()
  {
    $id_kategori                  = $this->input->post('id_kategori');
    $nama_kategori                = $this->input->post('nama_kategori');

    $data = array(
      'nama_kategori'           => $nama_kategori
    );

    $where = array('id_kategori' => $id_kategori);
    $this->M_resto->update_data('kategori', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Kategori</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_kategori');
  }
  public function delete_kategori($id)
  {
    $where = array('id_kategori' => $id);
    $this->M_resto->delete_data($where, 'kategori');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Kategori</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_kategori');
  }
}
