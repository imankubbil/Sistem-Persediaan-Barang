<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Supplier extends CI_Model {

    public $table ="supplier";

    //data
    public function data(){
        $query = "SELECT * FROM supplier ORDER BY kode_supp asc";
        return $this->db->query($query)->result();
    }

    //pemasok
    function getSupplier($where = '') {
        return $this->db->query("SELECT * FROM supplier $where; ");
    }


    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(kode_supp, 4)) AS kd_max FROM supplier");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "S_".$kd;
            return $kodejadi;
    }

    
    function save() {
        $data = array(
            'kode_supp'      => $this->input->post('kode_supp'),
            'nama_supp'      => $this->input->post('nama_supp'),            
            'tlp_supp'       => $this->input->post('tlp_supp'),
            'keterangan'     => $this->input->post('keterangan')
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'nama_supp'     => $this->input->post('nama_supp'),            
            'tlp_supp'      => $this->input->post('tlp_supp'),
            'keterangan'    => $this->input->post('keterangan')
        );
        $kode_supp   = $this->input->post('kode_supp');
        $this->db->where('kode_supp',$kode_supp);
        $this->db->update($this->table,$data);
    }    
    
}