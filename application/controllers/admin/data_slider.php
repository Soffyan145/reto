<?php

class Data_slider extends CI_Controller
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
      $data['slider'] = $this->M_resto->get_data('slider')->result();
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/slider/Data_slider', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function tambah_slider()
  {
    if ($this->session->userdata('role_id') === '1') {
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/slider/form_tambah_slider');
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function tambah_slider_aksi()
  {
    $title_slider              = $this->input->post('title_slider');
    $deskripsi                 = $this->input->post('deskripsi');
    $foto_slider             = $_FILES['foto_slider'];
    if ($foto_slider = '') {
    } else {
      $config['upload_path']    = './assets/backend/img/upload_slider';
      $config['allowed_types']  = 'jpg|png|jpeg';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto_slider')) {
        $foto_slider = 'default.jpg';
      } else {
        $foto_slider = $this->upload->data('file_name');
      }
    }
    $data = array(
      'title_slider'            => $title_slider,
      'deskripsi'               => $deskripsi,
      'foto_slider'             => $foto_slider
    );

    $this->M_resto->insert_data($data, 'slider');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Slider</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_slider');
  }
  public function update_slider($id)
  {
    if ($this->session->userdata('role_id') === '1') {
      $where = array('id_slider' => $id);
      $data['slider'] = $this->db->query("SELECT * FROM slider WHERE id_slider='$id'")->result();

      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/slider/form_update_slider', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function update_slider_aksi()
  {
    $id_slider                 = $this->input->post('id_slider');
    $title_slider              = $this->input->post('title_slider');
    $deskripsi                 = $this->input->post('deskripsi');
    $foto_slider               = $_FILES['foto_slider'];
    if ($foto_slider) {
      $config['upload_path']    = './assets/backend/img/upload_slider';
      $config['allowed_types']  = 'jpg|png|jpeg';

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('foto_slider')) {
        $foto_slider = $this->upload->data('file_name');
        $this->db->set('foto_slider', $foto_slider);
      } else {
        echo $this->upload->display_errors();
      }
    }

    $data = array(
      'title_slider'            => $title_slider,
      'deskripsi'               => $deskripsi,
      'foto_slider'             => $foto_slider
    );

    $where = array('id_slider' => $id_slider);
    $this->M_resto->update_data('slider', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Slider</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_slider');
  }
  public function delete_slider($id)
  {
    $where = array('id_slider' => $id);
    $this->M_resto->delete_data($where, 'slider');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Slider</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_slider');
  }
}
