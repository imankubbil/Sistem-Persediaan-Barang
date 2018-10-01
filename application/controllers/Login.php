<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();        
        if ($this->session->userdata('login') == 'yes' && $this->session->userdata('status') == 'active') {
            redirect('dashboard');
        }
    }

    public function index(){ 
         if ($this->session->userdata('login') == 'yes' && $this->session->userdata('status') == 'active') {
            redirect('dashboard');
        }
        $this->load->view('login');        
    }

    public function cekmasuk(){
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            redirect('login');          
        } else {
            $username = addslashes(trim($this->input->post('username')));
            $password = addslashes(trim($this->input->post('password')));
            $cek = $this->query->login($username, $password);            
            if ($cek->num_rows() > 0) {
                foreach ($cek->result() as $table) {
                    $sess_data['id'] = $table->id;
                    $sess_data['nama'] = $table->nama;              
                    $sess_data['username'] = $table->username;
                    $sess_data['password'] = $table->password;
                    $sess_data['status'] = $table->status;
                    $sess_data['login'] = 'yes';
                    $this->session->set_userdata($sess_data);
                    if ($table->status == 'active'){
                        redirect('dashboard');                        
                    }
                }
            } else {            
                $this->session->set_flashdata('result', 'Username atau password salah!..');
                redirect('login');
            }
        }
    }
}