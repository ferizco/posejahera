<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation'));
		date_default_timezone_set("Asia/Jakarta");
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
		$data['comment'] = $this->db->query("SELECT * FROM komentar  WHERE kd_info = '".$id."'")->result_array();
		$this->load->view('frontend/show_info', $data);
	}

	public function addkomen($id=''){
		$date = date('Y-m-d');
		$id = $this->input->post('kode');
		$data = array(
			'kd_info' => $id,
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'komentar' => $this->input->post('komentar'),
			'created_at'=> $date
			 );
             
		
		$this->db->insert('komentar', $data);
		$this->session->set_flashdata('message', 'swal("Berhasil", "Komentar Telah ditambahkan", "success");');
		redirect('home/showinfo/'.$id);
	}
    
}