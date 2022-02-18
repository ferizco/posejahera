<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_tiket extends CI_Controller {
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
		$data['title'] = "List Order";
 		$data['order'] = $this->db->query("SELECT * FROM order_tiket group by kd_order")->result_array();
		$this->load->view('backend/order', $data);
	}

	public function vieworder($id=''){
		$cek = $this->input->get('order').$id;
	 	$sqlcek = $this->db->query("SELECT * FROM order_tiket LEFT JOIN jadwal on order_tiket.kd_jadwal = jadwal.kd_jadwal WHERE kd_order ='".$cek."'")->result_array();
	 	if ($sqlcek) {
	 		$data['tiket'] = $sqlcek;
			$data['title'] = "View Order";
			$this->load->view('backend/view_order',$data);
	 	}else{
	 		$this->session->set_flashdata('message', 'swal("Kosong", "Order Tidak Ada", "error");');
    		redirect('backend/tiket');
	 	}
	}

	public function inserttiket($value=''){
		$id = $this->input->post('kd_order');
		$asal = $this->input->post('asal_beli');
		$tiket = $this->input->post('kd_tiket');
		$nama = $this->input->post('nama');
		$kursi = $this->input->post('no_kursi');
		$umur = $this->input->post('umur_kursi');
		$harga = $this->input->post('harga');
		$tgl = $this->input->post('tgl_beli');
		$status = $this->input->post('status');
		$where = array('kd_order' => $id );
		$update = array('status_order' => $status );
		$this->db->update('order_tiket', $update, $where);
		$data['asal'] = $this->db->query("SELECT * FROM tujuan WHERE kd_tujuan ='".$asal."'")->row_array();
		$data['cetak'] = $this->db->query("SELECT * FROM order_tiket LEFT JOIN jadwal on order_tiket.kd_jadwal = jadwal.kd_jadwal LEFT JOIN tujuan on jadwal.kd_tujuan = tujuan.kd_tujuan WHERE kd_order ='".$id."'")->result_array();
		$pelanggan = $this->db->query("SELECT email_pelanggan FROM pelanggan WHERE kd_pelanggan ='".$data['cetak'][0]['kd_pelanggan']."'")->row_array();
		$pdfFilePath = "assets/backend/upload/etiket/".$id.".pdf";
		$html = $this->load->view('frontend/cetaktiket', $data, TRUE);
	    $this->load->library('m_pdf');
		$this->m_pdf->pdf->WriteHTML($html);
		$this->m_pdf->pdf->Output($pdfFilePath);
		for ($i=0; $i < count($nama) ; $i++) { 
			$simpan = array(
				'kd_tiket' => $tiket[$i],
				'kd_order' => $id,
				'nama_tiket' => $nama[$i],
				'kursi_tiket' => $kursi[$i],
				'umur_tiket' => $umur[$i],
				'asal_beli_tiket' => $asal,
				'harga_tiket' => $harga,
				'status_tiket' => $status,
				'etiket_tiket' => $pdfFilePath,
				'create_tgl_tiket' => date('Y-m-d'),
				'create_admin_tiket' => $this->session->userdata('username_user')
			);
		
		$this->db->insert('tiket', $simpan);
		}
	    $this->session->set_flashdata('message', 'swal("Berhasil", "Tiket Order Berhasil Di Proses", "success");');
		redirect('backend/order_tiket');
	}

}