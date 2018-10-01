<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	//session admin
	function sesiAdmin() {
		if(isset($_SESSION['username'])) {
			return TRUE;
		} else {
			redirect(base_url(), 'refresh');
		}
	}


	function getKategori($kode_kategori) {
		$CI =& get_instance();
			$ambil = $CI->db->query("SELECT nama_kategori FROM kategori WHERE kode_kategori = '$kode_kategori'")->row();
		return $ambil->nama_kategori;
	}

	function getBarang($kode_barang) {
		$CI =& get_instance();
			$ambil = $CI->db->query("SELECT nama_barang FROM kategori WHERE kode_barang = '$kode_barang'")->row();
		return $ambil->nama_barang;
	}

	function getCustomer($kode_customer) {
		$CI =& get_instance();
			$ambil = $CI->db->query("SELECT nama_customer FROM customer WHERE kode_customer = '$kode_customer'")->row();
		return $ambil->nama_customer;
	}

	function getSupp($kode_supp) {
		$CI =& get_instance();
			$ambil = $CI->db->query("SELECT nama_supp FROM supplier WHERE kode_supp = '$kode_supp'")->row();
		return $ambil->nama_supp;
	}

	function getBarangmasuk($kode_barang) {
		$CI =& get_instance();
			$ambil = $CI->db->query("SELECT nama_barang FROM barang WHERE kode_barang = '$kode_barang'")->row();
		return $ambil->nama_barang;
	}

	function getBarangkeluar($kode_barang) {
		$CI =& get_instance();
			$ambil = $CI->db->query("SELECT nama_barang FROM barang WHERE kode_barang = '$kode_barang'")->row();
		return $ambil->nama_barang;
	}

	//tanggal
	function getTanggal($tgl_masuk) {
	    $ubah = gmdate($tgl_masuk, time()+60*60*8);
	    $pecah = explode("-", $ubah);
	    $tgl = $pecah[2];
	    $bln = $pecah[1];
	    $thn = $pecah[0];
	    $p_satu = explode(' ',$tgl_masuk);
	    $tgls   = explode('-',$p_satu[0]); 
	    $bulan  = array('Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
	    $bulans = $bulan[($tgls[1]-1)];
	    return $tgl.' '.$bulans.' '.$thn;
	}

	//hari
	function getHari($tgl_masuk) {
	    $ubah = gmdate($tgl_masuk, time()+60*60*8);
	    $pecah = explode("-", $ubah);
	    $tgl = $pecah[2];
	    $bln = $pecah[1];
	    $thn = $pecah[0];
	    $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
	    $nama_hari = "";
	    if($nama=="Sunday") {$nama_hari="Minggu";}
	    else if($nama=="Monday") {$nama_hari="Senin";}
	    else if($nama=="Tuesday") {$nama_hari="Selasa";}
	    else if($nama=="Wednesday") {$nama_hari="Rabu";}
	    else if($nama=="Thursday") {$nama_hari="Kamis";}
	    else if($nama=="Friday") {$nama_hari="Jum'at";}
	    else if($nama=="Saturday") {$nama_hari="Sabtu";}
	    return $nama_hari;
	}

	
