<?php

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            redirect('home');
        } else {
            $data['judul'] = 'Halaman Akun';
            $data['css'] = 'produk_style.css';
            $data['is_login'] = TRUE;
            $this->load->view('templates/header', $data);
            $this->load->view('akun/index');
            $this->load->view('templates/footer');
        }
    }

    public function keranjang()
    {
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            redirect('home');
        } else {
            $data['judul'] = 'Halaman Keranjang';
            $data['css'] = 'produk_style.css';
            $data['is_login'] = TRUE;
            $data['keranjang'] = $this->User_model->getKeranjang($id);
            $this->load->view('templates/header', $data);
            $this->load->view('keranjang/index');
            $this->load->view('templates/footer');
        }
    }

    public function login_view(){
        $id = $this->session->userdata('id');
        if(!empty($id)) {
            redirect('home');
        } 
        else{
            $this->load->view('login/index');
        }
    }

    public function register_view(){
        $id = $this->session->userdata('id');
        if(!empty($id)) {
            redirect('home');
        }
        else{
            $this->load->view('register/index');
        }
    }

    public function login()
    {
       
        $id = $this->session->userdata('id');
        if(!empty($id)) {
            redirect('home');
        } else {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
           
            if($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error', 'Email atau Password salah');
                redirect('user/login_view');
            } else {
                $this->session->unset_userdata('error');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $this->User_model->login($email, $password);
            }
        }
    }


    public function register()
    {
        $id = $this->session->userdata('id');
        if(!empty($id)) {
            redirect('home');
        } else {
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[tbl_user.email_user]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $password = $this->input->post('password');
            $password2 = $this->input->post('confirm_password');
            if($password != $password2) {
                $this->session->set_flashdata('error', 'Password tidak sama');
                redirect('user/register_view');
            } 
            else if($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error', 'Email sudah terdaftar');
                redirect('user/register_view');}
            else {
                $this->session->unset_userdata('error');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $nama = $this->input->post('nama');
                $this->User_model->register($email, $password, $nama);
            }
        }
    }
    
    public function checkout_done_view(){
        $id = $this->session->userdata('id');
        if(empty($id) or empty($this->session->flashdata('acces'))) {
            $this->session->sess_destroy();
            redirect('home');
        } else {
            $data['judul'] = 'Halaman Checkout';
            $data['css'] = 'produk_style.css';
            $data['is_login'] = TRUE;
            $this->load->view('templates/header', $data);
            $this->load->view('checkout_done/index');
            $this->load->view('templates/footer');
        }        
    
    }

    public function deleteProductCart()
    {
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            redirect('home');
        } else {
            $idkeranjang = $this->input->get('idkeranjang');
            $this->User_model->deleteProduct($idkeranjang);
        }      
    }

    public function emptyCartUser()
    {
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            redirect('home');
        } else {
            $this->User_model->emptyCart($id);
        }      
    }

    public function checkout()
    {
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            redirect('home');
        } else {
            $this->User_model->checkout();
        }
    }

    public function logout()
    {
        $this->session->set_userdata('email', FALSE);
        $this->session->sess_destroy();
        redirect('home');
    }

}