<?php

class Data_menu extends CI_Controller
{
  public function index()
  {
    $data['menu'] = $this->M_resto->get_data('menu')->result();
    $data['kategori'] = $this->M_resto->get_data('kategori')->result();
    $data['type'] = $this->M_resto->get_data('type')->result();
    $data['count_menu_not_available']     = $this->M_resto->count_menu_not_available();

    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar', $data);
    $this->load->view('pages/admin/menu/data_menu', $data);
    $this->load->view('templates/backend/footer');
  }
  public function tambah_menu()
  {
    $data['kategori'] = $this->M_resto->get_data('kategori')->result();
    $data['type'] = $this->M_resto->get_data('type')->result();
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/menu/form_tambah_menu', $data);
    $this->load->view('templates/backend/footer');
  }
  public function tambah_menu_aksi()
  {
    $nama_menu              = $this->input->post('nama_menu');
    $nama_kategori          = $this->input->post('nama_kategori');
    $nama_type              = $this->input->post('nama_type');
    $status                 = $this->input->post('status');
    $harga_dasar            = $this->input->post('harga_dasar');
    $harga_jual             = $this->input->post('harga_jual');
    $deskripsi              = $this->input->post('deskripsi');
    $discount               = $this->input->post('discount');
    $foto_menu                   = $_FILES['foto_menu'];
    if ($foto_menu = '') {
    } else {
      $config['upload_path']    = './assets/backend/img/upload_menu';
      $config['allowed_types']  = 'jpg|png|jpeg';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto_menu')) {
        $foto_menu = 'default.jpg';
      } else {
        $foto_menu = $this->upload->data('file_name');
      }
    }
    $data = array(
      'nama_menu'             => $nama_menu,
      'nama_kategori'         => $nama_kategori,
      'nama_type'             => $nama_type,
      'status'                => $status,
      'harga_dasar'           => $harga_dasar,
      'harga_jual'            => $harga_jual,
      'deskripsi'             => $deskripsi,
      'discount'              => $discount,
      'foto_menu'             => $foto_menu
    );

    $this->M_resto->insert_data($data, 'menu');
    $this->session->set_flashdata('flash', 'Add');
    redirect('admin/data_menu');
  }
  public function update_menu($id)
  {
    $where = array('id_menu' => $id);
    $data['menu'] = $this->db->query("SELECT * FROM menu mn, kategori kt WHERE mn.nama_kategori=kt.nama_kategori AND mn.id_menu='$id'")->result();
    $data['kategori'] = $this->M_resto->get_data('kategori')->result();
    $data['type'] = $this->M_resto->get_data('type')->result();

    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/menu/form_update_menu', $data);
    $this->load->view('templates/backend/footer');
  }
  public function update_menu_aksi($id)
  {
    $where['menu'] = $this->db->get_where('menu', ['id_menu' => $id])->row_array();
    $data['menu'] = $this->db->query("SELECT * FROM menu mn, kategori kt WHERE mn.nama_kategori=kt.nama_kategori AND mn.id_menu='$id'")->result();
    $data['kategori'] = $this->M_resto->get_data('kategori')->result();
    $data['type'] = $this->M_resto->get_data('type')->result();

    $this->form_validation->set_rules('nama_menu', 'Nama_menu', 'required', [
      'required'          => 'Please enter your name menu!'
    ]);
    $this->form_validation->set_rules('nama_kategori', 'Nama_kategori', 'required', [
      'required'          => 'Please enter your name category!'
    ]);
    $this->form_validation->set_rules('nama_type', 'Nama_type', 'required', [
      'required'          => 'Please enter your name type!'
    ]);
    $this->form_validation->set_rules('status', 'Status', 'required', [
      'required'          => 'Please enter your status for menu item!'
    ]);
    $this->form_validation->set_rules('harga_dasar', 'Harga_dasar', 'required|trim|numeric', [
      'required'          => 'Please check your price again!',
      'numeric'           => 'input must be a number!',
      'trim'              => 'input cannot be spaced'
    ]);
    $this->form_validation->set_rules('harga_jual', 'Harga_jual', 'required|trim|numeric', [
      'required'          => 'Please check your price again!',
      'numeric'           => 'input must be a number!',
      'trim'              => 'input cannot be spaced'
    ]);
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
      'required'          => 'Please enter your status for menu item!'
    ]);
    $this->form_validation->set_rules('discount', 'Discount', 'required', [
      'required'          => 'Please enter your status for menu item!'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar', $data);
      $this->load->view('pages/admin/menu/form_update_menu', $data);
      $this->load->view('templates/backend/footer');
    } else {
      $id_menu                = $this->input->post('id_menu');
      $nama_menu              = $this->input->post('nama_menu');
      $nama_kategori          = $this->input->post('nama_kategori');
      $nama_type              = $this->input->post('nama_type');
      $status                 = $this->input->post('status');
      $harga_dasar            = $this->input->post('harga_dasar');
      $harga_jual             = $this->input->post('harga_jual');
      $deskripsi              = $this->input->post('deskripsi');
      $discount               = $this->input->post('discount');

      $upload_img = $_FILES['foto_menu']['name'];
      if ($upload_img) {
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']     = '5120';
        $config['upload_path'] = './assets/backend/img/upload_menu';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_menu')) {

          $old_img = $where['menu']['foto_menu'];
          if ($old_img != 'default.jpg') {
            unlink(FCPATH . 'assets/backend/img/upload_menu/' . $old_img);
          }

          $new_img = $this->upload->data('file_name');
          $this->db->set('foto_menu', $new_img);
        } else {
          echo $this->upload->display_errors();
        }
      }

      $this->db->set('nama_menu', $nama_menu);
      $this->db->set('nama_kategori', $nama_kategori);
      $this->db->set('nama_type', $nama_type);
      $this->db->set('status', $status);
      $this->db->set('harga_dasar', $harga_dasar);
      $this->db->set('harga_jual', $harga_jual);
      $this->db->set('deskripsi', $deskripsi);
      $this->db->set('discount', $discount);
      $this->db->where('id_menu', $id_menu);
      $this->db->update('menu');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Menu has been updated.
            </div>');
      redirect('admin/data_menu');
    }
  }
  public function detail_menu($id)
  {
    $data['detail'] = $this->M_resto->take_id_menu($id);
    $this->load->view('templates/backend/header');
    $this->load->view('templates/backend/topbar');
    $this->load->view('templates/backend/sidebar');
    $this->load->view('pages/admin/menu/detail_menu', $data);
    $this->load->view('templates/backend/footer');
  }
  public function delete_menu($id)
  {
    $where = array('id_menu' => $id);
    $this->M_resto->delete_data($where, 'menu');
    $this->session->set_flashdata('flash', 'delete');
    redirect('admin/data_menu');
  }
  public function update_status($id)
  {
    $where = array('id_menu' => $id);

    $data = array(
      'status'                => '1'
    );

    $this->M_resto->update_data('menu', $data, $where);
    $this->session->set_flashdata('flash', 'available');
    redirect('admin/menu_not_available');
  }
}




// ==============================================================================
// <?php

// class Data_menu extends CI_Controller
// {
//   public function index()
//   {
//     $data['menu'] = $this->M_resto->get_data('menu')->result();
//     $data['kategori'] = $this->M_resto->get_data('kategori')->result();
//     $data['type'] = $this->M_resto->get_data('type')->result();
//     $data['count_menu_not_available']     = $this->M_resto->count_menu_not_available();

//     $this->load->view('templates/backend/header');
//     $this->load->view('templates/backend/topbar');
//     $this->load->view('templates/backend/sidebar', $data);
//     $this->load->view('pages/admin/menu/data_menu', $data);
//     $this->load->view('templates/backend/footer');
//   }
//   public function tambah_menu()
//   {
//     $data['kategori'] = $this->M_resto->get_data('kategori')->result();
//     $data['type'] = $this->M_resto->get_data('type')->result();
//     $this->load->view('templates/backend/header');
//     $this->load->view('templates/backend/topbar');
//     $this->load->view('templates/backend/sidebar');
//     $this->load->view('pages/admin/menu/form_tambah_menu', $data);
//     $this->load->view('templates/backend/footer');
//   }
//   public function tambah_menu_aksi()
//   {
//     $nama_menu              = $this->input->post('nama_menu');
//     $nama_kategori          = $this->input->post('nama_kategori');
//     $nama_type              = $this->input->post('nama_type');
//     $status                 = $this->input->post('status');
//     $harga_dasar            = $this->input->post('harga_dasar');
//     $harga_jual             = $this->input->post('harga_jual');
//     $deskripsi              = $this->input->post('deskripsi');
//     $discount               = $this->input->post('discount');
//     $foto_menu                   = $_FILES['foto_menu'];
//     if ($foto_menu = '') {
//     } else {
//       $config['upload_path']    = './assets/backend/img/upload_menu';
//       $config['allowed_types']  = 'jpg|png|jpeg';

//       $this->load->library('upload', $config);
//       if (!$this->upload->do_upload('foto_menu')) {
//         $foto_menu = 'default.jpg';
//       } else {
//         $foto_menu = $this->upload->data('file_name');
//       }
//     }
//     $data = array(
//       'nama_menu'             => $nama_menu,
//       'nama_kategori'         => $nama_kategori,
//       'nama_type'             => $nama_type,
//       'status'                => $status,
//       'harga_dasar'           => $harga_dasar,
//       'harga_jual'            => $harga_jual,
//       'deskripsi'             => $deskripsi,
//       'discount'              => $discount,
//       'foto_menu'             => $foto_menu
//     );

//     $this->M_resto->insert_data($data, 'menu');
//     $this->session->set_flashdata('flash', 'Add');
//     redirect('admin/data_menu');
//   }
//   public function update_menu($id)
//   {
//     $where = array('id_menu' => $id);
//     $data['menu'] = $this->db->query("SELECT * FROM menu mn, kategori kt WHERE mn.nama_kategori=kt.nama_kategori AND mn.id_menu='$id'")->result();
//     $data['kategori'] = $this->M_resto->get_data('kategori')->result();
//     $data['type'] = $this->M_resto->get_data('type')->result();

//     $this->load->view('templates/backend/header');
//     $this->load->view('templates/backend/topbar');
//     $this->load->view('templates/backend/sidebar');
//     $this->load->view('pages/admin/menu/form_update_menu', $data);
//     $this->load->view('templates/backend/footer');
//   }
//   public function update_menu_aksi($id)
//   {
//     $where['menu'] = $this->db->get_where('menu', ['id_menu' => $id])->row_array();
//     $id_menu                = $this->input->post('id_menu');
//     $nama_menu              = $this->input->post('nama_menu');
//     $nama_kategori          = $this->input->post('nama_kategori');
//     $nama_type              = $this->input->post('nama_type');
//     $status                 = $this->input->post('status');
//     $harga_dasar            = $this->input->post('harga_dasar');
//     $harga_jual             = $this->input->post('harga_jual');
//     $deskripsi              = $this->input->post('deskripsi');
//     $discount               = $this->input->post('discount');
//     $foto_menu              = $_FILES['foto_menu'];
//     if ($foto_menu) {
//       $config['allowed_types'] = 'jpg|jpeg|png';
//       $config['max_size']     = '5120';
//       $config['upload_path'] = './assets/backend/img/upload_menu';
//       $this->load->library('upload', $config);

//       if ($this->upload->do_upload('foto_menu')) {

//         $old_img = $where['menu']['foto_menu'];
//         if ($old_img != 'default.jpg') {
//           unlink(FCPATH . 'assets/backend/img/upload_menu/' . $old_img);
//         }

//         $new_img = $this->upload->data('file_name');
//         $this->db->set('foto_menu', $new_img);
//       } else {
//         echo $this->upload->display_errors();
//       }
//     }

//     $data = array(
//       'nama_menu'             => $nama_menu,
//       'nama_kategori'         => $nama_kategori,
//       'nama_type'             => $nama_type,
//       'status'                => $status,
//       'harga_dasar'           => $harga_dasar,
//       'harga_jual'            => $harga_jual,
//       'deskripsi'             => $deskripsi,
//       'discount'              => $discount
//     );

//     $where = array('id_menu' => $id_menu);
//     $this->M_resto->update_data('menu', $data, $where);
//     $this->session->set_flashdata('flash', 'Edit');
//     redirect('admin/data_menu');
//   }
//   public function detail_menu($id)
//   {
//     $data['detail'] = $this->M_resto->take_id_menu($id);
//     $this->load->view('templates/backend/header');
//     $this->load->view('templates/backend/sidebar');
//     $this->load->view('pages/admin/menu/detail_menu', $data);
//     $this->load->view('templates/backend/footer');
//   }
//   public function delete_menu($id)
//   {
//     $where = array('id_menu' => $id);
//     $this->M_resto->delete_data($where, 'menu');
//     $this->session->set_flashdata('flash', 'delete');
//     redirect('admin/data_menu');
//   }
//   public function update_status($id)
//   {
//     $where = array('id_menu' => $id);

//     $data = array(
//       'status'                => '1'
//     );

//     $this->M_resto->update_data('menu', $data, $where);
//     $this->session->set_flashdata('flash', 'available');
//     redirect('admin/menu_not_available');
//   }
// }
