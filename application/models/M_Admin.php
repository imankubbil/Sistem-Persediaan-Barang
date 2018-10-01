<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    public $table ="pegawai";

    //login
  public function chekLogin($username, $password) {
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $admin = $this->db->get($this->table)->row_array();
      return $admin;
    }
   

    function getBarang($where = '') {
        return $this->db->query("select * from barang $where; ");
    }
    

    function getCustomer($where = '') {
        return $this->db->query("select * from customer $where; ");
    }
    

    function getSupplier($where = '') {
        return $this->db->query("select * from supplier $where; ");
    }

    //Insert Data
  	function insertdata($tabel, $data) {
  		return $this->db->insert($tabel, $data);
  	}


	//Update Data
  	function updatedata($tabel, $data, $where) {
  		return $this->db->update($tabel, $data, $where);
  	}

    //Delete Data
  	function deldata($tabel, $where) {
  		return $this->db->delete($tabel, $where);
  	}
}

?>
