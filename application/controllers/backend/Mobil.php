<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('getkod_model');
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index(){
	$data['title'] = "List mobil";
	$data['mobil'] = $this->db->query("SELECT * FROM mobil ORDER BY nama_mobil asc")->result_array();
	// die(print_r($data));
	$this->load->view('backend/mobil', $data);	
	}
	public function viewmobil($id=''){
		$data['title'] = "View Mobil";
		$data['mobil'] = $this->db->query("SELECT * FROM mobil WHERE kd_mobil = '".$id."'")->row_array();
		// die(print_r($data));
		$this->load->view('backend/view_mobil', $data);
	}
	public function tambahmobil(){
		$kode = $this->getkod_model->get_kodmobil();
		$data = array(
			'kd_mobil' => $kode,
			'nama_mobil' => $this->input->post('nama_mobil'),
			'plat_mobil'		 => $this->input->post('plat_mobil'),
			'sopir_mobil'		 => $this->input->post('sopir_mobil'),
			'kapasitas_mobil'		 => $this->input->post('seat'),
			'status_mobil'			=> '1'
			 );
		// die(print_r($data));
		$this->db->insert('mobil', $data);
		$this->session->set_flashdata('message', 'swal("Berhasil", "Data Mobil Di Simpan", "success");');
		redirect('backend/mobil');
	}

}