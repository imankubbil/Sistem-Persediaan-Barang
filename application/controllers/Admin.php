<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {
		public function __construct() {		
			parent::__construct();
			sesiAdmin();		
			
			$this->load->model('M_Admin');
			$this->load->model('M_Kategori', 'kategori');
			$this->load->model('M_Barang','barang');
            $this->load->model('M_Supplier','supplier');
            $this->load->model('M_Customer','customer');
            $this->load->model('M_Barangmasuk','bin');
            $this->load->model('M_Barangkeluar','bout');
            
		}

		public function index() {
			redirect('admin/dashboard', 'refresh');
		}

		public function dashboard() {            

			$data = array(			
			 'ktg' => $this->db->query("SELECT * FROM kategori")->num_rows(),
             'brg' => $this->db->query("SELECT * FROM barang")->num_rows(),
             'sup' => $this->db->query("SELECT * FROM supplier")->num_rows(),
             'cus' => $this->db->query("SELECT * FROM customer")->num_rows()
			);
			$this->load->view('admin/kepala', $data);			
			$this->load->view('admin/dasbor');
			$this->load->view('admin/kaki');
		}


		public function kategori() {
			$data = array(			
            'kategori' => $this->kategori->data()
        	);
				$this->load->view('admin/kepala', $data);		
		        $this->load->view('admin/kategori_list');
		        
		}

		public function kategori_tambah() {
            

			if (isset($_POST['submit'])) {
            $kode_kategori = $this->input->post('kode_kategori');

            $query = $this->db->get_where('kategori', array('kode_kategori' => $kode_kategori));
            
            if($query->num_rows() == 0) {
                $this->kategori->save();
                $this->session->set_flashdata('simpan', 'kategori berhasil tersimpan ...');
                redirect('admin/kategori');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, kategori sudah ada ...');
                redirect('admin/kategori');                
            }

        } else {
            $data = array(
                'kodeunik'  => $this->kategori->kodeotomatis()
            );            
            $this->load->view('admin/kepala',$data);            
            $this->load->view('admin/kategori_tambah');
            $this->load->view('admin/kaki');
        	}
		}

		public function kategori_ubah() {
			if (isset($_POST['submit'])) {
                $this->kategori->update();
                $this->session->set_flashdata('update', 'Kategori berhasil diperbaharui ...');
                redirect('admin/kategori');        
        } else {
            if ($kode_kategori = $this->uri->segment(3)) {
                    $data = array(
                    'kategori' => $this->db->get_where('kategori', array('kode_kategori' => $kode_kategori))->row_array()
                );
                $this->load->view('admin/kepala', $data);
                $this->load->view('admin/kategori_ubah');
                $this->load->view('admin/kaki');
            } else {
                redirect('kesalahan');
            	}	
        	}
		}

		public function kategori_hapus(){
			if ($kode_kategori = $this->uri->segment(3)) {

            if(!empty($kode_kategori)) {
                $this->db->where('kode_kategori', $kode_kategori);
                $this->db->delete('kategori');
            }
            $this->session->set_flashdata('hapus', 'Kategori berhasil terhapus ...');
            redirect('admin/kategori');
        } else {
            redirect('kesalahan');
        	}
		}


		public function barang()
		{
			$data = array(			
            'barang' => $this->barang->data()
			);
			$this->load->view('admin/kepala', $data);		
	        $this->load->view('admin/barang_list');
		}

		public function barang_tambah() {
			if (isset($_POST['submit'])) {
            
            

            $kode_barang = $this->input->post('kode_barang');

            $query = $this->db->get_where('barang', array('kode_barang' => $kode_barang));
            
            if($query->num_rows() == 0) {
                $this->barang->save();
                $this->session->set_flashdata('simpan', 'barang berhasil tersimpan ...');
                redirect('admin/barang');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, barang sudah ada ...');
                redirect('admin/barang');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->barang->kodeotomatis(),
                'ktg'        => $this->kategori->data()
            );
            $this->load->view('admin/kepala', $data);           
            $this->load->view('admin/barang_tambah');
            $this->load->view('admin/kaki');
        }
		}

		public function barang_ubah() {
			if (isset($_POST['submit'])) {
                $this->barang->update();
                $this->session->set_flashdata('update', 'barang Barang berhasil diperbaharui ...');
                redirect('admin/barang');        
        } else {
            if ($kode_barang = $this->uri->segment(3)) {
                    $data = array(
                    'barang'    => $this->db->get_where('barang', array('kode_barang' => $kode_barang))->row_array(),
                    'ktg'       => $this->kategori->data()
                );
                $this->load->view('admin/kepala', $data);
                $this->load->view('admin/barang_ubah');
                $this->load->view('admin/kaki');
	            } else {
	                redirect('kesalahan');
	            }
        	}
		}

		public function barang_hapus() {
			if ($kode_barang = $this->uri->segment(3)) {

            if(!empty($kode_barang)) {
                $this->db->where('kode_barang', $kode_barang);
                $this->db->delete('barang');
            }
            $this->session->set_flashdata('hapus', 'barang Barang berhasil terhapus ...');
            redirect('admin/barang');
	        } else {
	            redirect('kesalahan');
	        }
		}


        public function supplier() {
            $data = array(          
            'supplier' => $this->supplier->data()
        );
        $this->load->view('admin/kepala', $data);        
        $this->load->view('admin/supplier_list');
        
        }


        public function supplier_tambah() {
            if (isset($_POST['submit'])) {
            $kode_supp = $this->input->post('kode_supp');

            $query = $this->db->get_where('supplier', array('kode_supp' => $kode_supp));
            
            if($query->num_rows() == 0) {
                $this->supplier->save();
                $this->session->set_flashdata('simpan', 'supplier Barang berhasil tersimpan ...');
                redirect('admin/supplier');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, supplier Barang sudah ada ...');
                redirect('admin/supplier');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->supplier->kodeotomatis()
            );
            $this->load->view('admin/kepala', $data);            
            $this->load->view('admin/supplier_tambah');
            $this->load->view('admin/kaki');
        }
        }

        public function supplier_ubah() {
            if (isset($_POST['submit'])) {
                $this->supplier->update();
                $this->session->set_flashdata('update', 'supplier Barang berhasil diperbaharui ...');
                redirect('admin/supplier');        
            } else {
                if ($kode_supp = $this->uri->segment(3)) {
                        $data = array(
                        'supplier' => $this->db->get_where('supplier', array('kode_supp' => $kode_supp))->row_array()
                    );
                    $this->load->view('admin/kepala', $data);
                    $this->load->view('admin/supplier_ubah');
                    $this->load->view('admin/kaki');
                } else {
                    redirect('kesalahan');
                }
            }
        }


        public function supplier_hapus() {
             if ($kode_supp = $this->uri->segment(3)) {

                if(!empty($kode_supp)) {
                    $this->db->where('kode_supp', $kode_supp);
                    $this->db->delete('supplier');
                }
            $this->session->set_flashdata('hapus', 'supplier Barang berhasil terhapus ...');
            redirect('admin/supplier');
            } else {
                redirect('kesalahan');
            }
        }


        public function customer() {
            $data = array(          
            'customer' => $this->customer->data()
            );
            $this->load->view('admin/kepala', $data);        
            $this->load->view('admin/cust_list');
            
        }

        public function customer_tambah() {
            if (isset($_POST['submit'])) {
            $kode_customer = $this->input->post('kode_customer');

            $query = $this->db->get_where('customer', array('kode_customer' => $kode_customer));
            
            if($query->num_rows() == 0) {
                $this->customer->save();
                $this->session->set_flashdata('simpan', 'Customer Barang berhasil tersimpan ...');
                redirect('admin/customer');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Customer Barang sudah ada ...');
                redirect('admin/customer');                
            }

            } else {
                $data = array(
                    'kodeunik'   => $this->customer->kodeotomatis()
                );
                $this->load->view('admin/kepala', $data);            
                $this->load->view('admin/cust_tambah');
                $this->load->view('admin/kaki');
            }
        }

        public function customer_ubah() {
            if (isset($_POST['submit'])) {
                $this->customer->update();
                $this->session->set_flashdata('update', 'Customer Barang berhasil diperbaharui ...');
                redirect('admin/customer');        
        } else {
            if ($kode_customer = $this->uri->segment(3)) {
                    $data = array(
                    'customer' => $this->db->get_where('customer', array('kode_customer' => $kode_customer))->row_array()
                );
                $this->load->view('admin/kepala', $data);
                $this->load->view('admin/cust_ubah');
                $this->load->view('admin/kaki');
                } else {
                    redirect('kesalahan');
                }
            }
        }


        public function customer_hapus() {
            if ($kode_customer = $this->uri->segment(3)) {

                if(!empty($kode_customer)) {
                    $this->db->where('kode_customer', $kode_customer);
                    $this->db->delete('customer');
                }
                    $this->session->set_flashdata('hapus', 'Customer Barang berhasil terhapus ...');
                    redirect('admin/customer');
                } else {
                    redirect('kesalahan');
                }
        }

        
        public function barang_masuk() {

            $data = array(          
                'bin'       => $this->bin->data(),
                'barang'    => $this->barang->data()
            );

            $this->load->view('admin/kepala',$data);
            $this->load->view('admin/barang_masuk');
            $this->load->view('admin/kaki');
        }

        public function barang_keluar() {
            $data = array(          
            'bout' => $this->bout->data(),
            'barang' => $this->barang->data()
            );

            $this->load->view('admin/kepala',$data);
            $this->load->view('admin/barang_keluar');
            $this->load->view('admin/kaki');
        }

        public function barang_masuk_tambah() {
            if (isset($_POST['submit'])) {
            
            $no_brgmasuk = $this->input->post('no_brgmasuk');

            $query = $this->db->get_where('barang_masuk', array('no_brgmasuk' => $no_brgmasuk));
            
            if($query->num_rows() == 0) {
                $this->bin->save();
                $this->session->set_flashdata('simpan', 'barang berhasil tersimpan ...');
                redirect('admin/barang_masuk');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, barang sudah ada ...');
                redirect('admin/barang_masuk');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->bin->kodeotomatis(),
                'spl'        => $this->supplier->data(),
                'barang'     => $this->barang->data()
            );
            $this->load->view('admin/kepala', $data);           
            $this->load->view('admin/barang_masuk_tambah');
            $this->load->view('admin/kaki');
        }
    }

    //cetak barang masuk
    public function barang_masuk_cetak(){
        $data = array (
            'title'         => 'Laporan Barang Masuk | PT Agel Langgeng',
            'bin'           => $this->bin->data("where no_brgmasuk"),
            'total'         => $this->db->query("SELECT * FROM barang_masuk")->num_rows()
        );

        $this->load->view('laporan/v_laporan_barang_masuk', $data);
        $this->load->view('admin/kaki');
        }

        // public function barang_masuk_hapus() {
        //         if ($no_brgmasuk = $this->uri->segment(3)) {

        //         if(!empty($no_brgmasuk)) {
        //             $this->db->where('no_brgmasuk', $no_brgmasuk);
        //             $this->db->delete('barang_masuk');
        //         }
        //         $this->session->set_flashdata('hapus', 'barang Barang berhasil terhapus ...');
        //         redirect('admin/barang_masuk');
        //         } else {
        //             redirect('kesalahan');
        //         }
        //     }

        public function barang_keluar_tambah() {
            if (isset($_POST['submit'])) {
            
            $no_brgkeluar = $this->input->post('no_brgkeluar');

            $query = $this->db->get_where('barang_keluar', array('no_brgkeluar' => $no_brgkeluar));
            
            if($query->num_rows() == 0) {
                $this->bout->save();
                $this->session->set_flashdata('simpan', 'barang berhasil tersimpan ...');
                redirect('admin/barang_keluar');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, barang sudah ada ...');
                redirect('admin/barang_keluar');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->bout->kodeotomatis(),
                'ctmr'        => $this->customer->data(),
                'barang'     => $this->barang->data()
            );
            $this->load->view('admin/kepala', $data);           
            $this->load->view('admin/barang_keluar_tambah');
            $this->load->view('admin/kaki');
        }
    }

    // //lap barang keluar
    // public function lapbarangkeluar(){
        
    //     $data = array (
    //         'title'         => 'Laporan Barang Keluar | PT Agel Langgeng',
    //      );
        
    //         $this->load->view('admin/kepala', $data);
    //         $this->load->view('laporan/lapbarangkeluar');
    //         $this->load->view('admin/kaki');
    //         $this->load->view('laporan/jsform');
    //         $this->load->view('laporan/jsextra');
    //     }

    // //lihat barang keluar
    // public function lapbarangkeluar_lihat($from, $to) {
    //     $data = array(
    //         'title' => 'Laporan Barang Keluar | PT Agel Langgeng',
    //         'psn'   => $this->bout->dateRange($from, $to),
    //         'from'  => date('Y-m-d', strtotime($from)),
    //         'to'    => date('Y-m-d', strtotime($to))
    //     );
    //     $this->load->view('laporan/v_lapbarangkeluar_lihat', $data);
    // }

    //lap barang
    public function lapbarang(){
        $data = array (
            'title'         => 'Laporan Stok Barang | PT Agel Langgeng',
            'brg'           => $this->barang->data("where kode_barang"),
            'total'         => $this->db->query("SELECT * FROM barang")->num_rows()
        );

        $this->load->view('admin/kepala', $data);
        $this->load->view('laporan/v_lapbarang');
        $this->load->view('admin/kaki');
        }

    //lap supplier
    public function lapsupplier(){
        $data = array (
            'title'         => 'Laporan Supplier | PT Agel Langgeng',
            'supp'          => $this->supplier->data("where kode_supp"),
            'total'         => $this->db->query("SELECT * FROM supplier")->num_rows()
        );

        $this->load->view('admin/kepala', $data);
        $this->load->view('laporan/v_lapsupplier');
        $this->load->view('admin/kaki');
        }

    //lap customer
    public function lapcustomer(){
        $data = array (
            'title'         => 'Laporan Supplier | PT Agel Langgeng',
            'cust'          => $this->customer->data("where kode_customer"),
            'total'         => $this->db->query("SELECT * FROM customer")->num_rows()
        );

        $this->load->view('admin/kepala', $data);
        $this->load->view('laporan/v_lapcustomer');
        $this->load->view('admin/kaki');
        }

	}