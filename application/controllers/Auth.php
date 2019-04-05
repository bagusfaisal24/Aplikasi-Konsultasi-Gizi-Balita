<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
		var $auth_admin;
		var $auth_pakar;

public function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');

		$this->auth_admin = $this->session->userdata('auth_admin');
		$this->auth_pakar = $this->session->userdata('auth_pakar');

	}

	public function index(){
		$this->login();

	}

	function login(){

		if ($this->auth_admin==TRUE) {
		  redirect('administrator/Index/pengguna');
		}elseif($this->auth_pakar==TRUE){
			redirect('pakar/Antropometri/v_anthropometri');
		}else{
			if($this->input->post('submit')){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			if ($this->m_pengguna->auth($username, $password ) == true) {
				  $row = $this->m_pengguna->set($username, $password)->row();
				if($row->level == '0'){
						$data = array(
						// 'id_pengguna'=>$row->$pengguna,
						'user' => $username,
						'nama' => $row->nama,
						'level' => $row->level,
						'auth_admin' => true);
						// var_dump($data);
						$this->session->set_userdata($data);

						  redirect('administrator/Index/pengguna');
			}elseif($row->level == '1'){
				  $data = array(
						'user' => $username,
						'nama' => $row->nama,
						'level' => $row->level,
						'auth_pakar' => true);
						$this->session->set_userdata($data);
						  redirect('pakar/Antropometri/v_anthropometri');
			}

			}else{
				$notif = 'Username / Password tidak cocok';
				$this->session->set_flashdata('type','danger');
				$this->session->set_flashdata('notif', $notif);
				redirect('auth/login');
			}

		}
	$this->load->view('login');
	}
}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}

}
