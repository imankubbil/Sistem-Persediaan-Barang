<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Barangmasuk extends CI_Model {

    public $table ="barang_masuk";

    //data
    public function data(){
        $query = "SELECT * FROM $this->table ORDER BY kode_barang asc";
        return $this->db->query($query)->result();
    }

    //barang
    function getBarangmasuk($where = '') {
        return $this->db->query("SELECT * FROM $this->table $where; ");
    } 

    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(no_brgmasuk, 4)) AS kd_max FROM $this->table");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "I_".$kd;
            return $kodejadi;
    }

    
    function save() {
        $data = array(
            'no_brgmasuk'       => $this->input->post('no_brgmasuk'),
            'tgl_masuk'         => $this->input->post('tgl_masuk'),
            'kode_supp'         => $this->input->post('kode_supp'),
            'username'          => $this->session->userdata('username'),
            'kode_barang'       => $this->input->post('kode_barang'),
            'qty'               => $this->input->post('qty')
            
        );
        $this->db->insert($this->table,$data);
    }

    //date range
    public function dateRange($from, $to) {
        $sql = "SELECT * FROM barang_masuk WHERE tgl_masuk >= '".$from."' AND tgl_masuk <= '".$to."' ORDER BY tgl_masuk ASC";
        return $this->db->query($sql);
    }

}