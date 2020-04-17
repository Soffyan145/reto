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
  public function add()
  {
    if ($this->session->userdata('role_id') === '1') {
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/slider/add');
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function add_action()
  {
    $title_slider              = $this->input->post('title_slider');
    $deskripsi                 = $this->input->post('deskripsi');
    $img                       = $_FILES['img'];
    if ($img = '') {
    } else {
      $config['upload_path']    = './assets/backend/img/upload_slider';
      $config['allowed_types']  = 'jpg|png|jpeg';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('img')) {
        $img = 'default.jpg';
      } else {
        $img = $this->upload->data('file_name');
      }
    }
    $data = array(
      'title_slider'            => $title_slider,
      'deskripsi'               => $deskripsi,
      'img'                     => $img
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
  public function edit($id)
  {
    if ($this->session->userdata('role_id') === '1') {
      $where = array('id_slider' => $id);
      $data['slider'] = $this->db->query("SELECT * FROM slider WHERE id_slider='$id'")->result();

      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/slider/edit', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function edit_action()
  {
    $data['slider'] = $this->db->query("SELECT * FROM slider ")->result();

    $this->form_validation->set_rules('title_slider', 'Title_slider', 'required', [
      'required'          => 'Please Insert for title!'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar', $data);
      $this->load->view('pages/admin/slider/edit', $data);
      $this->load->view('templates/backend/footer');
    } else {
      $id_slider                = $this->input->post('id_slider');
      $title_slider              = $this->input->post('title_slider');
      $deskripsi                 = $this->input->post('deskripsi');
      $img                       = $_FILES['img'];
      if ($img = '') {
      } else {
        $config['upload_path']    = './assets/backend/img/upload_slider';
        $config['allowed_types']  = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img')) {
          $img = 'default.jpg';
        } else {
          $img = $this->upload->data('file_name');
        }
      }
      $data = array(
        'title_slider'            => $title_slider,
        'deskripsi'               => $deskripsi,
        'img'                     => $img
      );

      $where = array('id_slider' => $id_slider);
      $this->M_slider->update_data('slider', $data, $where);
      $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Slider</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
      redirect('a/slider');
    }
  }
  public function delete($id)
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
