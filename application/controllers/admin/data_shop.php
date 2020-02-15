<?php

class Data_shop extends CI_Controller
{
    public function index()
    {
        $data['menu'] = $this->M_resto->get_data('menu')->result();
        $this->load->view('templates/backend/header');
        $this->load->view('templates/backend/topbar');
        $this->load->view('pages/admin/shop/shop', $data);
        $this->load->view('templates/backend/footer');
    }
    public function add_cart($id)
    {
        $menu = $this->M_resto->find($id);

        $data = array(
            'id'      => $menu->id_menu,
            'qty'     => 1,
            'price'   => $menu->harga_jual,
            'name'    => $menu->nama_menu
        );

        $this->cart->insert($data);
        redirect('admin/data_shop');
    }
    public function detail()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('templates/backend/topbar');
        $this->load->view('templates/backend/sidebar');
        $this->load->view('pages/admin/shop/detail');
        $this->load->view('templates/backend/footer');
    }
    public function checkout()
    {
        $data['menu'] = $this->M_resto->get_data('menu')->result();

        $this->cart->destroy();
        $this->load->view('templates/backend/header');
        $this->load->view('templates/backend/topbar');
        $this->load->view('templates/backend/sidebar');
        $this->load->view('pages/admin/shop/shop', $data);
        $this->load->view('templates/backend/footer');
    }
    public function cancel()
    {
        $this->cart->destroy();
        redirect('admin/data_shop');
    }
}
