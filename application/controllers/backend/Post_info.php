<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_info extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
        $this->load->model('informasi_model');
		$this->load->library('form_validation');
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
		$data['title'] = "Post Informasi";
		$data['post'] = $this->db->query("SELECT * FROM informasi LEFT JOIN user on informasi.kd_user = user.kd_user " )->result_array();
		
		$this->load->view('backend/post', $data);
	}

    public function addinfo(){
        $kode = $this->getkod_model->get_kodinf();
		$kd_user = $this->session->userdata('kd_user');
		$data = array(
			'kd_info' => $kode,
			'judul' => $this->input->post('judul'),
			'subjudul' => $this->input->post('subjudul'),
			'konten'		 => $this->input->post('konten'),
			'kd_user'=> $kd_user
			 );
             
		
		$this->db->insert('informasi', $data);
		$this->session->set_flashdata('message', 'swal("Berhasil", "Informasi Telah ditambahkan", "success");');
        
		redirect('backend/post_info');
    }

	public function editinfo($id=''){
		$id = $this->input->post('kode');
		$kd_user = $this->session->userdata('kd_user');
		$where = array('kd_info' => $id );
		$update = array(
			'judul'			=> $this->input->post('judul'),
			'subjudul'  => $this->input->post('subjudul'),
			'konten'	    	=> $this->input->post('konten'),
			'kd_user'		=> $kd_user
			 );
		$this->db->update('informasi', $update, $where);
		$this->session->set_flashdata('message', 'swal("Berhasil", "Informasi telah diedit", "success");');
		redirect('backend/post_info');
	}

    public function viewtambahinfo($value=''){
		$data['title'] = "Tambah Informasi";
		$data['post'] = $this->db->query("SELECT * FROM informasi ORDER BY kd_info asc")->result_array();
		$this->load->view('backend/tambahinfo', $data);
	}

	public function vieweditinfo($id=''){
		$data['title'] = "Edit Informasi";
		$data['post'] = $this->db->query("SELECT * FROM informasi WHERE kd_info LIKE '".$id."'")->row_array();
		$this->load->view('backend/editinfo', $data);
	}

	 public function showinfo($id=''){
		$data['title'] = "Informasi";
		$data['post'] = $this->db->query("SELECT * FROM informasi WHERE kd_info = '".$id."'")->row_array();
		
		$this->load->view('frontend/show_info', $data);
	}

	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->informasi_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'swal("Berhasil", "Informasi Telah dihapus", "success");');
			redirect('backend/post_info');
		}
	}

	
}