<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_barangmasuk extends CI_Controller {

	//library, helper, model
	public function __construct() {
        parent::__construct();
        sesiAdmin();
        $this->load->model('m_barangmasuk', 'bin');
	}
	
	//index
	public function index() {
		
        $data = array(
			'title' => 'Laporan Barang Masuk | PT Agel Langgeng',
		);

		$this->load->view('admin/kepala', $data);
        $this->load->view('laporan/barangmasuk/view');
        $this->load->view('laporan/barangmasuk/jsform');
        $this->load->view('laporan/barangmasuk/jsekstra');
	}

    //lihat
    public function lihat($from, $to) {

        $data = array(
            
            'title' => 'Laporan Barang Masuk | PT Agel Langgeng',
            'psn'   => $this->bin->dateRange($from, $to),
            'from'  => date('Y-m-d', strtotime($from)),
            'to'    => date('Y-m-d', strtotime($to))
        );
        
        $this->load->view('laporan/barangmasuk/lihat', $data);
    }

    //cetak
    public function cetak() {
        if (isset($_POST['submit'])) {
            $from = $this->input->post('from');
            $to = $this->input->post('to');
            $data = array(
                'title' => 'Laporan Barang Masuk | PT Agel Langgeng',
                'psn'   => $this->bin->dateRange($from, $to),
                'from'  => date('Y-m-d', strtotime($from)),
                'to'    => date('Y-m-d', strtotime($to)),
                'pns'   => $this->db->count_all('barang_masuk')
            );
            $this->load->view('laporan/barangmasuk/cetak', $data);
        } else {
            $this->session->set_flashdata('salah', 'Terjadi Kesalahan ...');
            redirect('laporan_barangmasuk');
        }
    }

}
