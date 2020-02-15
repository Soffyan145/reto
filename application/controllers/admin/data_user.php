<?php

class Data_user extends CI_Controller
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
            $data['users'] = $this->db->query("SELECT * FROM user")->result();
            $this->load->view('templates/backend/header');
            $this->load->view('templates/backend/topbar');
            $this->load->view('templates/backend/sidebar');
            $this->load->view('pages/admin/user/Data_user', $data);
            $this->load->view('templates/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function update($id)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id' => $id);
            $data['users'] = $this->db->query("SELECT * FROM user WHERE id='$id'")->result();
            $data['user_rolls'] = $this->M_resto->get_data('user_role')->result();

            $this->load->view('templates/backend/header');
            $this->load->view('templates/backend/topbar');
            $this->load->view('templates/backend/sidebar');
            $this->load->view('pages/admin/user/edit', $data);
            $this->load->view('templates/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function update_action()
    {
        $id                  = $this->input->post('id');
        $role_id             = $this->input->post('role_id');
        $is_active           = $this->input->post('is_active');

        $data = array(
            'role_id'        => $role_id,
            'is_active'      => $is_active
        );

        $where = array('id' => $id);
        $this->M_resto->update_data('user', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data User</strong> Success To Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('admin/data_user');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->M_employee->delete_data($where, 'user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data User</strong> Success To Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
        redirect('admin/data_user');
    }
    public function detail($id)
    {
        if ($this->session->userdata('role_id') === '1') {
            $data['details'] = $this->db->query("SELECT * FROM user WHERE id=$id")->result();
            $this->load->view('templates/backend/header');
            $this->load->view('templates/backend/topbar');
            $this->load->view('templates/backend/sidebar');
            $this->load->view('pages/admin/user/detail', $data);
            $this->load->view('templates/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
}
