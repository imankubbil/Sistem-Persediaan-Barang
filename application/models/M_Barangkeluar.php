<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class M_Barangkeluar extends CI_Model {
    /**
     * summary
     */
    public $table ="barang_keluar";

    //data
    public function data(){
        $query = "SELECT * FROM barang_keluar ORDER BY no_brgkeluar asc";
        return $this->db->query($query)->result();
    }

    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(no_brgkeluar, 4)) AS kd_max FROM $this->table");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "O_".$kd;
            return $kodejadi;
    }

    function save() {
        $data = array(
            'no_brgkeluar'       => $this->input->post('no_brgkeluar'),
            'tgl_keluar'         => $this->input->post('tgl_keluar'),
            'kode_customer'      => $this->input->post('kode_customer'),
            'username'          => $this->session->userdata('username'),
            'kode_barang'       => $this->input->post('kode_barang'),
            'qty'               => $this->input->post('qty')
            
        );
        $this->db->insert($this->table,$data);
    }

    //date range
    public function dateRange($from, $to) {
        $sql = "SELECT * FROM $this->table WHERE tgl_keluar >= '".$from."' AND tgl_keluar <= '".$to."' ORDER BY tgl_keluar ASC";
        return $this->db->query($sql);
    }
    
}