<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
		$this->getsecurity();
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index(){
		$data['title'] = "Home";
		$data['order'] = $this->db->query("SELECT count(kd_order) FROM order_tiket WHERE status_order ='1'")->result_array();
		$data['tiket'] = $this->db->query("SELECT count(kd_tiket) FROM tiket ")->result_array();
		$data['konfirmasi'] = $this->db->query("SELECT count(kd_konfirmasi) FROM konfirmasi ")->result_array();
		$data['kirim'] = $this->db->query("SELECT count(kd_kirim) FROM kirim ")->result_array();
		$data['pelanggan'] = $this->db->query("SELECT count(kd_pelanggan) FROM pelanggan ")->result_array();
		$data['feedback'] = $this->db->query("SELECT count(id) FROM feedback ")->result_array();
		// die(print_r($data));
		$this->load->view('backend/home', $data);
	}
	function getsecurity($value=''){
		$username = $this->session->userdata('username_user');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('backend/login');
		}
	}
}