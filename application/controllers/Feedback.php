<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

    public function index(){
        $this->load->view('frontend/feedback');
    }

	function getsecurity($value=''){
		$username = $this->session->userdata('username');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('login');
		}
	}

	

	// Fungsi Menambahkan Feedback
    public function addfeedback(){
		$kd_pelanggan = $this->session->userdata('kd_pelanggan');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
			$data = array(
			'nama'  => $nama,
			'kd_pelanggan'  => $kd_pelanggan,
			'email'	    	=> $email,
			'pesan'		=> $this->input->post('pesan')
			);
			$this->db->insert('feedback', $data);
			$this->session->set_flashdata('message', 'swal("Berhasil", "Feedback telah dikirim, Terima Kasih", "success");');
    		redirect('feedback');
		}

		

	}
