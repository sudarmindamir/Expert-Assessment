<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/sidebar');
		$this->load->view('user/dashboard');
	}

	public function assessment()
	{
		$this->load->view('template/sidebar');
		$this->load->view('asesment/index');
	}
}
