<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Customer extends CI_Model {

    public $table ="customer";

    //data
    public function data(){
        $query = "SELECT * FROM customer ORDER BY kode_customer asc";
        return $this->db->query($query)->result();
    }

    //customer
    function getCustomer($where = '') {
        return $this->db->query("SELECT * FROM customer $where; ");
    }


    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(kode_customer, 4)) AS kd_max FROM customer");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "C_".$kd;
            return $kodejadi;
    }

    
    function save() {
        $data = array(
            'kode_customer'      => $this->input->post('kode_customer'),
            'nama_customer'  => $this->input->post('nama_customer'),            
            'tlp_customer'   => $this->input->post('tlp_customer'),
            'keterangan'   => $this->input->post('keterangan')
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'nama_customer'  => $this->input->post('nama_customer'),
            'tlp_customer'     => $this->input->post('tlp_customer'),            
            'keterangan'   => $this->input->post('keterangan')
        );
        $kode_customer   = $this->input->post('kode_customer');
        $this->db->where('kode_customer',$kode_customer);
        $this->db->update($this->table,$data);
    }    
    
}