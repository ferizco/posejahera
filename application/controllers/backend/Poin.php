<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poin extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper');
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
	public function index($id=''){
	$data['title'] = "Akumulasi Poin";
 	$data['poin'] = $this->db->query("SELECT kd_pelanggan, SUM(jumlah_poin) as total FROM poin_masuk GROUP BY kd_pelanggan order by total desc ")->result_array();
		// die(print_r($data));
	$this->load->view('backend/viewpoin', $data);	
	}

    public function riwayatpoin(){
        $data['title'] = "Riwayat Poin";
        $data['poin'] = $this->db->query("SELECT * FROM poin_masuk order by tanggal desc ")->result_array();

        $this->load->view('backend/riwayatpoin', $data);
    }
	

}