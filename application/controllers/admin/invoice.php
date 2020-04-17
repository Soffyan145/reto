<?php

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoices'] = $this->M_invoice->get_data();

        $this->load->view('templates/backend/header');
        $this->load->view('templates/backend/topbar');
        $this->load->view('templates/backend/sidebar');
        $this->load->view('pages/admin/invoice/invoice', $data);
        $this->load->view('templates/backend/footer');
    }
    public function detail($id_invoice)
    {
        $data['invoices'] = $this->M_invoice->get_id_invoice($id_invoice);
        $data['orders'] = $this->M_invoice->get_id_order($id_invoice);

        $this->load->view('templates/backend/header');
        $this->load->view('templates/backend/topbar');
        $this->load->view('templates/backend/sidebar');
        $this->load->view('pages/admin/invoice/detail', $data);
        $this->load->view('templates/backend/footer');
    }
}
