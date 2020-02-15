<?php

class Data_account extends CI_Controller
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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/backend/header');
        $this->load->view('templates/backend/topbar');
        $this->load->view('templates/backend/sidebar', $data);
        $this->load->view('pages/admin/account/Data_account', $data);
        $this->load->view('templates/backend/footer');
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/backend/header');
        $this->load->view('templates/backend/topbar');
        $this->load->view('templates/backend/sidebar', $data);
        $this->load->view('pages/admin/account/edit_account', $data);
        $this->load->view('templates/backend/footer');
    }
    public function edit_action()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Name', 'required', [
            'required'          => 'Please enter your name!'
        ]);
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric', [
            'required'          => 'Please check your Phone number again!',
            'numeric'           => 'input must be a number!',
            'trim'              => 'input cannot be spaced'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/backend/header');
            $this->load->view('templates/backend/topbar');
            $this->load->view('templates/backend/sidebar', $data);
            $this->load->view('pages/admin/account/edit_account', $data);
            $this->load->view('templates/backend/footer');
        } else {
            $nama           = $this->input->post('nama');
            $phone           = $this->input->post('phone');
            $email          = $this->input->post('email');

            $upload_img = $_FILES['img']['name'];

            if ($upload_img) {
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size']     = '5120';
                $config['upload_path'] = './assets/backend/img/upload_profile';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('img')) {

                    $old_img = $data['user']['img'];
                    if ($old_img != 'default.jpg') {
                        unlink(FCPATH . 'assets/backend/img/upload_profile/' . $old_img);
                    }

                    $new_img = $this->upload->data('file_name');
                    $this->db->set('img', $new_img);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->set('phone', $phone);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile has been updated.
            </div>');
            redirect('admin/data_account');
        }
    }
}
