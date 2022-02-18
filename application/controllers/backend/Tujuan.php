<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
		$this->getsecurity();
		date_default_timezone_set("Asia/Jakarta");
	}
	function getsecurity($value=''){
		$username = $this->session->userdata('username_user');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('backend/login');
		}
	}
	public function index(){
		$data['title'] = "List Tujuan";
		$data['tujuan'] = $this->db->query("SELECT * FROM tujuan")->result_array();
		// die(print_r($data));
		$this->load->view('backend/tujuan', $data);
	}
	public function viewtujuan($id=''){
		$data['title'] = "List Tujuan";
		$data['rute'] = $this->db->query("SELECT * FROM tujuan WHERE kd_tujuan = '".$id."' ")->row_array();
		// die(print_r($data));
		$this->load->view('backend/view_tujuan', $data);
	}
	public function tambahtujuan(){
		$kode = $this->getkod_model->get_kodtuj();
		$data = array(
			'kota_tujuan' => $this->input->post('tujuan'),
			'kd_tujuan' => $kode,
			'terminal_tujuan' => $this->input->post('terminal'),
			 );
		// die(print_r($data));
		$this->db->insert('tujuan', $data);
		// $this->session->set_flashdata('message', 'swal("Data Berhasil Di Tambah");');
		redirect('backend/tujuan');
	}
}