<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('getkod_model');
		date_default_timezone_set("Asia/Jakarta");
	}
	function getsecurity($value=''){
		$username = $this->session->userdata('username');
		if ($username) {
			redirect('backend/home');
			$this->session->sess_destroy();
			redirect('backend/login');
		}else{
			redirect('backend/login');
		}
	}
	function getUserIP()
    {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
        
    }
	public function index(){
		// $this->getsecurity();
		$data['ipaddres'] = $this->getUserIP();
		// die(print_r($data));
		$this->load->view('backend/login',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('backend/login'));
	}
	public function cekuser(){
    $username = strtolower($this->input->post('username'));
    $ambil = $this->db->query('select * from user where username_user = "'.$username.'"')->row_array();
    $password = $this->input->post('password');

    if (password_verify($password,$ambil['password_user'])) {
    	$this->db->where('username_user',$username);
        $query = $this->db->get('user');
            foreach ($query->result() as $row) {
                $sess = array(
                	'kd_user' => $row->kd_user,
                    'username_user' => $row->username_user,
                    'password_user' => $row->password_user,
                    'nama_user'     => $row->nama_user,
                    'img_user'	=> $row->img_user,
                    'email_user'   => $row->email_user,
                    'telpon_user'   => $row->telpon_user,
                    'alamat_user'	=> $row->alamat_user,
                    'level'	=> $row->level_user
                );
                // die(print_r($sess));
                $this->session->set_userdata($sess);
                redirect('backend/home');
            }
    }else{
    	$this->session->set_flashdata('message', 'swal("Gagal", "Email/Password Salah", "error");');
    	redirect('backend/login');
    	}
	}

}
