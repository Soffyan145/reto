<?php

class Data_employee extends CI_Controller
{

  public function index()
  {
    if ($this->session->userdata('role_id') === '1') {
      $data['employee'] = $this->db->query("SELECT * FROM employee INNER JOIN position ON employee.id_position=position.id_position")->result();
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/employee/Data_employee', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function tambah_employee()
  {
    if ($this->session->userdata('role_id') === '1') {
      $data['position'] = $this->M_employee->get_data('position')->result();
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/employee/form_tambah_employee', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function tambah_employee_aksi()
  {
    $nama_employee          = $this->input->post('nama_employee');
    $id_position            = $this->input->post('id_position');
    $phone                  = $this->input->post('phone');
    $email                  = $this->input->post('email');
    $address                = $this->input->post('address');
    $foto_employee           = $_FILES['foto_employee'];
    if ($foto_employee = '') {
    } else {
      $config['upload_path']    = './assets/backend/img/upload_employee';
      $config['allowed_types']  = 'jpg|png|jpeg';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto_employee')) {
        $foto_employee = 'default.jpg';
      } else {
        $foto_employee = $this->upload->data('file_name');
      }
    }
    $data = array(
      'nama_employee'             => $nama_employee,
      'id_position'               => $id_position,
      'phone'                     => $phone,
      'email'                     => $email,
      'address'                   => $address,
      'foto_employee'             => $foto_employee
    );

    $this->M_employee->insert_data($data, 'employee');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Employee</strong> Success To add.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_employee');
  }
  public function update_employee($id)
  {
    $where = array('id_employee' => $id);
    $data['employee'] = $this->db->query("SELECT * FROM employee pl, position pt WHERE pl.id_position=pt.id_position AND pl.id_employee='$id'")->result();
    $data['position'] = $this->M_employee->get_data('position')->result();

    if ($this->session->userdata('role_id') === '1') {
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/employee/form_update_employee', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function update_employee_aksi()
  {
    $id_employee                = $this->input->post('id_employee');
    $nama_employee              = $this->input->post('nama_employee');
    $id_position                = $this->input->post('id_position');
    $phone                      = $this->input->post('phone');
    $email                      = $this->input->post('email');
    $address                    = $this->input->post('address');
    $foto_employee               = $_FILES['foto_employee'];
    if ($foto_employee) {
      $config['upload_path']    = './assets/backend/img/upload_employee';
      $config['allowed_types']  = 'jpg|png|jpeg';

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('foto_employee')) {
        $foto_employee = $this->upload->data('file_name');
        $this->db->set('foto_employee', $foto_employee);
      } else {
        echo $this->upload->display_errors();
      }
    }
    $data = array(
      'nama_employee'             => $nama_employee,
      'id_position'               => $id_position,
      'phone'                     => $phone,
      'email'                     => $email,
      'address'                   => $address,
    );

    $where = array('id_employee' => $id_employee);
    $this->M_employee->update_data('employee', $data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Employee</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_employee');
  }
  public function detail_employee($id)
  {
    if ($this->session->userdata('role_id') === '1') {
      $data['detail'] = $this->db->query("SELECT * FROM employee INNER JOIN position ON employee.id_position=position.id_position WHERE id_employee=$id")->result();
      $this->load->view('templates/backend/header');
      $this->load->view('templates/backend/topbar');
      $this->load->view('templates/backend/sidebar');
      $this->load->view('pages/admin/employee/detail_employee', $data);
      $this->load->view('templates/backend/footer');
    } else {
      redirect('admin/block_access');
    }
  }
  public function delete_employee($id)
  {
    $where = array('id_employee' => $id);
    $this->M_employee->delete_data($where, 'employee');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Employee</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/data_employee');
  }
}
