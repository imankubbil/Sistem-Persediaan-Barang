<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
	class Auth extends CI_Controller {

		public function __construct() {
			
			parent::__construct();
			$this->load->model('M_Admin');
			
		}

		public function index() {
			
			if(isset($_SESSION['username'])) {
				redirect(site_url('admin'));
			}else{
			$this->load->view('login');
		}
	}

		public function cekMasuk() {
			if (isset($_POST['submit'])) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				$loginAdmin = $this->M_Admin->chekLogin($username, $password);				
				
					$this->session->set_userdata($loginAdmin);
						$this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
					redirect('admin');			
					
				} else {
					$this->session->set_flashdata('gagal', 'maaf, username / password kamu salah !');
					redirect();
				}			
		}
		
		public function keluar() {
			$this->session->sess_destroy();
		$this->session->set_flashdata('keluar', 'Kamu berhasil keluar ...');
		redirect();
		}
	}