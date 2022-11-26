<?php

class User_model extends CI_Model {    
    public function register()
    {
        $data = [
            "nama_user" => $this->input->post('nama'),
            "email_user" => $this->input->post('email'),
            "password_user" => $this->input->post('password')
        ];

        $this->db->insert('tbl_user', $data);

        $this->db->where('email_user', $this->input->post('email'));
        $query = $this->db->get('tbl_user');
        if($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array('id' => $row->id_user,
                              'nama' => $row->nama_user,
                              'email' => $row->email_user,
                              'password' => $row->password_user);

            }
            $this->session->set_userdata($sess);
            redirect('home');
        }
    }

    public function login($email, $password)
    {
        $this->db->where('email_user', $email);
        $this->db->where('password_user', $password);
        $query = $this->db->get('tbl_user');
        if($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array('id' => $row->id_user,
                              'nama' => $row->nama_user,
                              'email' => $row->email_user,
                              'password' => $row->password_user);

            }
            $this->session->set_userdata($sess);
            redirect('home');
        } else {
            $this->session->set_flashdata('info', 'Maaf email dan password salah!');
            redirect('user/login');
        }
    }

    public function deleteProduct()
    {
        $idkeranjang = $this->input->get('idkeranjang');
        $this->db->where('id_keranjang', $idkeranjang);
        $this->db->delete('tbl_keranjang');

        redirect('user/keranjang');    
    }

    public function emptyCart()
    {        
        $iduser = $this->session->userdata('id');
        $this->db->where('id_user', $iduser);
        $this->db->delete('tbl_keranjang');

        redirect('user/keranjang');    
    }

    public function getKeranjang($id)
    {
        $query = $this->db->where('id_user', $id)->get('tbl_keranjang');
        return $query->result_array();
    }

    public function checkout()
    {
        $iduser = $this->session->userdata('id');
        $namauser = $this->session->userdata('nama');
        $totalorder = $this->input->get('total');
        $tgl = new \DateTime('now');
        $tanggalorder = $tgl->format('dd/mm/YYYY');

        $data = [
            "id_user" => $iduser,
            "nama_user" => $namauser,
            "total_order" => $totalorder,
            "tanggal_order" => $tanggalorder
        ];

        $this->db->insert('tbl_riwayat', $data);

        $this->db->where('id_user', $iduser);
        $this->db->delete('tbl_keranjang');
        
        
        $this->session->set_flashdata('acces', 1);
        redirect('user/checkout_done_view');    
    }
}