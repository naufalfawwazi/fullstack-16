<?php

class Produk_model extends CI_Model {
    public function getAmplifier()
    {
        $query = $this->db->where('jenis_produk', 'amplifier')->get('tbl_produk');
        return $query->result_array();
    }

    public function getDrum()
    {
        $query = $this->db->where('jenis_produk', 'drum')->get('tbl_produk');
        return $query->result_array();
    }
    
    public function getBass()
    {
        $query = $this->db->where('jenis_produk', 'bass')->get('tbl_produk');
        return $query->result_array();
    }
    
    public function getGitar()
    {
        $query = $this->db->where('jenis_produk', 'gitar')->get('tbl_produk');
        return $query->result_array();
    }

    public function addCart()
    {
        $iduser = $this->session->userdata('id');
        $namauser = $this->session->userdata('nama');
        $idproduk = $this->input->get('id_produk');
        $namaproduk = $this->input->get('nama_produk');
        $hargaproduk = $this->input->get('harga_produk');
        $jumlah = 1;

        $this->db->where('id_user', $iduser);
        $this->db->where('id_produk', $idproduk);
        $query = $this->db->get('tbl_keranjang');

        $on_cart = FALSE;
        if($query->num_rows() > 0) {
            $on_cart = TRUE;
            foreach ($query->result() as $row) {
                $jumlah = $row->jumlah_produk+1;
            }
        }

        $data = [
            "id_user" => $iduser,
            "id_produk" => $idproduk,
            "jumlah_produk" => $jumlah,
            "total_harga" => ($jumlah*$hargaproduk),
            "nama_produk" => $namaproduk,
            "nama_user" => $namauser
        ];

        if($on_cart) {
            $this->db->where('id_user', $iduser);
            $this->db->where('id_produk', $idproduk);
            $this->db->update('tbl_keranjang', $data);
        } else
            $this->db->insert('tbl_keranjang', $data);
        redirect('user/keranjang');
    }
}