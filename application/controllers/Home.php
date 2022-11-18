<?php
    
class Home extends CI_Controller {
    public function index($nama='')
    {
        $data['judul'] = 'Halaman Home';
        $data['css'] = 'style.css';
        $data['nama'] = $nama;
        $id = $this->session->userdata('id');
        if(empty($id)) {
            $this->session->sess_destroy();
            $data['is_login'] = FALSE;
        } else {
            $data['is_login'] = TRUE;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}