<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pickup extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('getkod_model');
	}

    public function index(){
        if ($this->session->userdata('username')){
        $this->load->view('frontend/pickup');
        }else{ 
			redirect('login');
		}
    }

	function getsecurity($value=''){
		$username = $this->session->userdata('username');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('login');
		}
	}

    function addpickup($id=''){
        $kode = $this->getkod_model->get_kodkir();
        $nama = $this->input->post('nama');
        $status = '1';
        $simpan = array(
					'kd_kirim' => $kode,
					'nama_pengirim' => $nama,
					'nama_penerima' => $this->input->post('nama_penerima'),
					'alamat_penerima' => $this->input->post('alamat_penerima'),
                    'alamat_pickup' => $this->input->post('alamat_pickup'),
					'jenis_barang' => $this->input->post('jenis_barang'),
					'telepon' => $this->input->post('telepon'),
					'keterangan' =>  $this->input->post('keterangan'),
					'status' => $status
					 );

			$this->db->insert('kirim', $simpan);
			$this->session->set_flashdata('message', 'swal("Berhasil", "Paket Anda akan segera dijemput", "success");');
			redirect('pickup');
    }
		

	}
