<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login');
		} else {
			$this->_login();
		}
	}


	private function _login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$user = $this->db->get_where('admin', ['username' => $username])->row_array();

		if ($user) {
			if ($password == $user['password']) {
				$data = [
					'username' => $user['username']
				];
				$this->session->set_userdata($data);
				redirect('user');
			} else {
				$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Password Salah</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Username Salah</div>');
			redirect('auth');
		}
	}

	// public function logout()
	// {
	// 	$this->session->unset_userdata('username');
	// 	$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert"> </div>');
	// menampilkan pesan
	// 	redirect('auth');
	// }


	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('<div class="alert alert-success" role="alert"></div>');
		redirect('auth');
	}
}
