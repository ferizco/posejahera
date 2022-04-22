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


    public function admin($id=''){
		$data['admin'] = $this->db->query("SELECT * FROM user WHERE kd_user LIKE '".$id."'")->row_array();
		// die(print_r($data));
		$this->load->view('backend/admin',$data);
	}

	public function changepassword($id=''){
		$this->load->library('form_validation');
		$pelanggan = $this->db->query("SELECT password_user FROM user where kd_user ='".$id."'")->row_array();
		// die(print_r($pelanggan));
		$this->form_validation->set_rules('currentpassword', 'currentpassword', 'trim|required|min_length[4]',array(
			'required' => 'Masukan Password',
			 ));
		$this->form_validation->set_rules('new_password1', 'new_password1', 'trim|required|min_length[4]|matches[new_password2]',array(
			'required' => 'Masukan Password.',
			'matches' => 'Password Tidak Sama.',
			'min_length' => 'Password Minimal 8 Karakter.'
			 ));
		$this->form_validation->set_rules('new_password2', 'new_password2', 'trim|required|min_length[4]|matches[new_password1]',array(
			'required' => 'Masukan Password.',
			'matches' => 'Password Tidak Sama.',
			'min_length' => 'Password Minimal 8 Karakter.'
			 ));
		if ($this->form_validation->run() == false) {
			$this->load->view('backend/changepassword');
		} else {
			$currentpassword = $this->input->post('currentpassword');
			$newpassword 	 = $this->input->post('new_password1');
			if (!password_verify($currentpassword, $pelanggan['password_user'])) {
				$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
					  Password Sebelumnya Salah
					</div>');
				redirect('admin_po/changepassword');
			}elseif ($currentpassword == $newpassword) {
				$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
					  Password Tidak Boleh Sama Sebelumnya
					</div>');
				redirect('admin_po/changepassword');
			}else{
				$password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
				$where = array('kd_user' => $id );
				$update = array(
				'password_user'			=> $password_hash,
				 );
				$this->db->update('user', $update,$where);
				$this->session->set_flashdata('message', 'swal("Berhasil", "Data Di Edit", "success");');
				redirect('backend/home/');
			}
		}

	}

}
