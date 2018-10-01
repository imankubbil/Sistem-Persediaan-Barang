<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Barang extends CI_Model {

    public $table ="barang";

    //data
    public function data(){
        $query = "SELECT * FROM barang ORDER BY kode_barang asc";
        return $this->db->query($query)->result();
    }

    //barang
    function getBarang($where = '') {
        return $this->db->query("SELECT * FROM barang $where; ");
    }

    

    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(kode_barang, 4)) AS kd_max FROM barang");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "B_".$kd;
            return $kodejadi;
    }

    
    function save() {
        $data = array(
            'kode_barang'       => $this->input->post('kode_barang'),
            'nama_barang'       => $this->input->post('nama_barang'),
            'kode_kategori'     => $this->input->post('kode_kategori'),
            'qty'               => $this->input->post('qty'),
            'satuan'            => $this->input->post('satuan'),
            'detail_brg'        => $this->input->post('detail_brg')
            
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'nama_barang'=> $this->input->post('nama_barang'),
            'kode_kategori' => $this->input->post('kode_kategori'),
            'qty'   => $this->input->post('qty'),
            'satuan'   => $this->input->post('satuan'),
            'detail_brg' => $this->input->post('detail_brg')
        );
        $kode_barang   = $this->input->post('kode_barang');
        $this->db->where('kode_barang',$kode_barang);
        $this->db->update($this->table,$data);
    }    
    
}