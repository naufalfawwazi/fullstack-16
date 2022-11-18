<?php
    
class Produk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }
    
    public function amplifier()
    {
        $data['judul'] = 'Daftar Produk Amplifier';
        $data['css'] = 'produk_style.css';
        $data['heading'] = 'Amplifier';
        $data['produk'] = $this->Produk_model->getAmplifier();
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            $data['is_login'] = FALSE;
        } else {
            $data['is_login'] = TRUE;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function drum()
    {
        $data['judul'] = 'Daftar Produk Drum';
        $data['css'] = 'produk_style.css';
        $data['heading'] = 'Drum';
        $data['produk'] = $this->Produk_model->getDrum();
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            $data['is_login'] = FALSE;
        } else {
            $data['is_login'] = TRUE;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function bass()
    {
        $data['judul'] = 'Daftar Produk Bass';
        $data['css'] = 'produk_style.css';
        $data['heading'] = 'Bass';
        $data['produk'] = $this->Produk_model->getBass();
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            $data['is_login'] = FALSE;
        } else {
            $data['is_login'] = TRUE;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function gitar()
    {
        $data['judul'] = 'Daftar Produk Gitar';
        $data['css'] = 'produk_style.css';
        $data['heading'] = 'Gitar';
        $data['produk'] = $this->Produk_model->getGitar();
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            $data['is_login'] = FALSE;
        } else {
            $data['is_login'] = TRUE;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }

    public function addToCart()
    {
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            redirect('home');
        } else {
            $idproduk = $this->input->get('id_produk');
            $namaproduk = $this->input->get('nama_produk');
            $hargaproduk = $this->input->get('harga_produk');
            $this->Produk_model->addCart();
        }
    }
}