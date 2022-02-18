<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation'));
    }

    function getsecurity($value=''){
        $username = $this->session->userdata('username');
        if (empty($username)) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }

	public function index(){
        $data['post'] = $this->db->query("SELECT * FROM informasi")->result_array();
		$this->load->view('frontend/home', $data);		
	}

	public function profile($value=''){
		$this->load->view('frontend/profile');
	}

	public function editprofile($id=''){
		$this->load->view('frontend/profile');
	}

    public function showinfo($id=''){
		$data['title'] = "Informasi";
		$data['post'] = $this->db->query("SELECT * FROM informasi WHERE kd_info = '".$id."'")->row_array();
		$this->load->view('frontend/show_info', $data);
	}
    
}