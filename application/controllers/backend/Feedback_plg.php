<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_plg extends CI_Controller {
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
	$data['title'] = "Feedback";
 	$data['feedback'] = $this->db->query("SELECT * FROM feedback")->result_array();
		// die(print_r($data));
	$this->load->view('backend/feedback', $data);	
	}

}