<?php

class Data_social_media extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('role_id') === '1') {
      $data['social'] = $this->M_social_media->get_data('social_media')->result();
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/social_media/Data_social_media', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function tambah_social_media()
  {
    if ($this->session->userdata('role_id') === '1') {
      $data['social'] = $this->M_social_media->get_data('social_media')->result();
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/social_media/form_tambah_social_media', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function add_action()
  {
    $nama_social_media      = $this->input->post('nama_social_media');
    $account                = $this->input->post('account');
    $link                   = $this->input->post('link');
    $logo_social_media       = $_FILES['logo_social_media'];
    if ($logo_social_media = '') {
    } else {
      $config['upload_path']    = './assets/img/upload_social_media';
      $config['allowed_types']  = 'png';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('logo_social_media')) {
        $logo_social_media = 'default.jpg';
      } else {
        $logo_social_media = $this->upload->data('file_name');
      }
    }
    $data = array(
      'nama_social_media'     => $nama_social_media,
      'account'               => $account,
      'link'                  => $link,
      'logo_social_media'     => $logo_social_media
    );

    $this->M_social_media->insert_data($data, 'social_media');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Social Media</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_social_media');
  }
  public function update($id)
  {
    if ($this->session->userdata('role_id') === '1') {
      $where = array('id_social_media' => $id);
      $data['social'] = $this->db->query("SELECT * FROM social_media WHERE id_social_media='$id'")->result();

      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/social_media/form_update_social_media', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function update_action()
  {
    $id_social_media            = $this->input->post('id_social_media');
    $nama_social_media          = $this->input->post('nama_social_media');
    $account                    = $this->input->post('account');
    $link                       = $this->input->post('link');
    $logo_social_media           = $_FILES['logo_social_media'];
    if ($logo_social_media) {
      $config['upload_path']    = './assets/img/upload_social_media';
      $config['allowed_types']  = 'png';

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('logo_social_media')) {
        $logo_social_media = $this->upload->data('file_name');
        $this->db->set('logo_social_media', $logo_social_media);
      } else {
        echo $this->upload->display_errors();
      }
    }
    $data = array(
      'nama_social_media'         => $nama_social_media,
      'account'                   => $account,
      'link'                      => $link

    );

    $where = array('id_social_media' => $id_social_media);
    $this->M_social_media->update_data('social_media', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Social Media</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_social_media');
  }
  public function delete($id)
  {
    $where = array('id_social_media' => $id);
    $this->M_social_media->delete_data($where, 'social_media');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Social Media</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_social_media');
  }
}
