<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model {

    public $table ="kategori";

    //data
    public function data(){
        $query = "SELECT * FROM kategori ORDER BY kode_kategori asc";
        return $this->db->query($query)->result();
    }

      
    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(kode_kategori, 4)) AS kd_max FROM kategori");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "K_".$kd;
            return $kodejadi;
    }

    function save() {
        $data = array(
            'kode_kategori'      => $this->input->post('kode_kategori'),
            'nama_kategori'      => $this->input->post('nama_kategori'),            
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'nama_kategori'     => $this->input->post('nama_kategori'),            
        );

        $kode_kategori          = $this->input->post('kode_kategori');
        $this->db->where('kode_kategori',$kode_kategori);
        $this->db->update($this->table,$data);
    }    
    
}