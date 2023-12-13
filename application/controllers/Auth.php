<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_auth');
	}
	public function index() {
		$this->load->view('auth/dashboard');
	}
	public function login() {
		$username = $this->input->post('loginUsername', true);
		$password = $this->input->post('loginPassword', true);
		$data = array('username' => $username, 'password' => $password);
		$check = $this->m_auth->read($data);
		if($check) {
			$this->session->set_userdata('id', $check['id_user']);
			$this->session->set_userdata('nama_user', $check['nama']);
			$this->session->set_userdata('is_login', true);
			redirect(base_url('user'));
			exit;
		} else {
			$this->session->set_flashdata('failed', 'Username atau Password salah');
			redirect(base_url('auth'));
			exit;
		}
	}
	public function register() {
		$name = $this->input->post('registerNama');
		$username = $this->input->post('registerUsername');
		$password = $this->input->post('registerPassword');
		$email = $this->input->post('registerEmail');
		$no_tlp = $this->input->post('registerNotlp');
		$id_combine = $name.$username;
		$id = md5($id_combine);
		$data = array('id_user' => $id, 'nama' => $name, 'username' => $username, 'password' => $password, 'gmail' => $email, 'no_tlp' => $no_tlp);
		$this->m_auth->insert($data);
		redirect(base_url('auth'));
	}
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}
?>
