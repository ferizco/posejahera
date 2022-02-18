<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
		// $this->load->model('model_laporan');
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
		$data['title'] = 'Laporan';
		$data['bulan'] = $this->db->query("SELECT DISTINCT DATE_FORMAT(create_tgl_tiket,'%M %Y') AS bulan FROM tiket")->result_array();
		$this->load->view('backend/laporan', $data);
	}

	public function laportanggal($value=''){
		$data['mulai'] = $this->input->post('mulai');
		$data['sampai'] = $this->input->post('sampai');
		$data['laporan'] = $this->db->query("SELECT * FROM tiket WHERE (create_tgl_tiket BETWEEN '".$data['mulai']."' AND '".$data['sampai']."')")->result_array();
		$this->load->view('backend/laporan/laporan_pertanggal', $data);		
	}

	public function laporbarang($value=''){
		$data['mulai'] = $this->input->post('mulai');
		$data['sampai'] = $this->input->post('sampai');
		$data['laporan'] = $this->db->query("SELECT * FROM kirim WHERE (tanggal BETWEEN '".$data['mulai']."' AND '".$data['sampai']."')")->result_array();
		$this->load->view('backend/laporan/laporan_barang', $data);		
	}
}