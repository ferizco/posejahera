<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim_barang extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
		$this->getsecurity();
		date_default_timezone_set("Asia/Jakarta");
	}

    function getsecurity($value=''){
		if (empty($this->session->userdata('username_user'))) {
			$this->session->sess_destroy();
			redirect('backend/login');
		}
	}

    public function index(){
		$data['title'] = "List Kirim";
 		$data['kirim'] = $this->db->query("SELECT * FROM kirim group by kd_kirim")->result_array();
		$this->load->view('backend/kirim', $data);
	}

    public function viewkirim($id=''){
		$data['title'] = "View Pengiriman";
		$data['kirim'] = $this->db->query("SELECT * FROM kirim LEFT JOIN mobil on kirim.kd_mobil = mobil.kd_mobil WHERE kd_kirim ='".$id."'")->row_array();

		if ($data['kirim']) {
			$this->load->view('backend/view_kirim', $data);
		}else{
			$this->session->set_flashdata('message', 'swal("Kosong", "Tiket Tidak Ada", "error");');
    		redirect('backend/kirim');
		}	
		
	}

	public function tambahpengiriman($id=''){
		$kode = $this->getkod_model->get_kodkir();
			$simpan = array(
					'kd_kirim' => $kode,
					'nama_pengirim' => $this->input->post('nama_pengirim'),
					'nama_penerima' => $this->input->post('nama_penerima'),
					'alamat_penerima' => $this->input->post('alamat_penerima'),
					'jenis_barang' => $this->input->post('jenis_barang'),
					'tanggal' => $this->input->post('tanggal'),
					'telepon' => $this->input->post('telepon'),
					'kd_mobil' => $this->input->post('mobil'),
					'tanggal' => $this->input->post('tanggal'),
					'harga' =>  $this->input->post('harga'),
					 );

			$this->db->insert('kirim', $simpan);
			$this->session->set_flashdata('message', 'swal("Berhasil", "Data Pengiriman Di Simpan", "success");');
			redirect('backend/kirim_barang');

	}

	public function viewtambahpengiriman($value=''){
		$data['title'] = "Tambah Pengiriman";
		$data['mobil'] = $this->db->query("SELECT * FROM mobil ORDER BY nama_mobil asc")->result_array();
		$this->load->view('backend/tambahkirim', $data);
	}

	public function cetak($id=''){
		$data['kirim'] = $this->db->query("SELECT * FROM kirim WHERE kd_kirim ='".$id."'")->result_array();
		$this->load->view('frontend/cetakbuktikirim', $data);
	}

}

