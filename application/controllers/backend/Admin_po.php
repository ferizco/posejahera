<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_po extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
				$this->load->library('form_validation');
		$this->getsecurity();
		date_default_timezone_set("Asia/Jakarta");
	}
	function getsecurity($value=''){
		$username = $this->session->userdata('level');
		if ($username == '2') {
			$this->session->sess_destroy();
			redirect('backend/login');
		}
	}
	public function index(){
		$data['title'] = "List Admin";
		$data['admin'] = $this->db->query("SELECT * FROM user")->result_array();
		
		$this->load->view('backend/admin', $data);
	}
}