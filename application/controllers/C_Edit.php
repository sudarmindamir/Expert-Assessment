<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Edit extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_tampil');
	}

	public function editSekolah()
	{
		// $data['id_sekolah'] = $this->uri->segment(3);

		$this->load->view('template/sidebar');
		$this->load->view('form/input_sekolah');
		$this->load->view('template/footer');
	}

	public function editPondasi()
	{
		$data['id_pondasi'] = $this->uri->segment(3);

		$this->load->view('template/sidebar');
		$this->load->view('form/pondasi', $data);
		$this->load->view('template/footer');
	}
	public function updatePondasi()
	{
	}

	public function editkolom()
	{
		$data['id_sekolah'] = $this->uri->segment(3);

		$this->load->view('template/sidebar');
		$this->load->view('form/kolom', $data);
		$this->load->view('template/footer');
	}

	public function balok()
	{
		$data['id_sekolah'] = $this->uri->segment(3);

		$this->load->view('template/sidebar');
		$this->load->view('form/balok', $data);
		$this->load->view('template/footer');
	}

	public function atap()
	{
		$data['id_sekolah'] = $this->uri->segment(3);

		$this->load->view('template/sidebar');
		$this->load->view('form/atap', $data);
		$this->load->view('template/footer');
	}


	public function dinding()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/dinding', $data);
		$this->load->view('template/footer');
	}

	public function plafond()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/plafond', $data);
		$this->load->view('template/footer');
	}

	public function lantai()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/lantai', $data);
		$this->load->view('template/footer');
	}

	public function kusen()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/kusen', $data);
		$this->load->view('template/footer');
	}

	public function pintu()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/pintu', $data);
		$this->load->view('template/footer');
	}

	public function jendela()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/jendela', $data);
		$this->load->view('template/footer');
	}

	public function finishinplafond()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/finishinplafond', $data);
		$this->load->view('template/footer');
	}


	public function finishingdinding()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/finishingdinding', $data);
		$this->load->view('template/footer');
	}

	public function finishingkusen()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/finishingkusen', $data);
		$this->load->view('template/footer');
	}

	public function instalasilistrik()
	{
		$data['id_sekolah'] = $this->uri->segment(3);
		$this->load->view('template/sidebar');
		$this->load->view('form/instalasilistrik', $data);
		$this->load->view('template/footer');
	}

	public function instalasiair()
	{
		$data['id_sekolah'] = $this->uri->segment(3);

		$this->load->view('template/sidebar');
		$this->load->view('form/instalasiair', $data);
		$this->load->view('template/footer');
	}



	public function terimaData()
	{

		$database['nama_sekolah'] = $this->input->post('nama_sekolah');
		$database['alamat'] = $this->input->post('alamat_sekolah');
		// pada variabel $database alamat harus sama yg ada di phpmyadmin sedangkan method post harus sesuai dengan "name" yang ada di View
		$database['kabupaten'] = $this->input->post('kabupaten');
		$database['luas_bangunan'] = $this->input->post('luas_bangunan');



		$this->m_sekolah->simpan_data_sekolah($database);
		redirect(base_url('C_Tampil'));
		//redirecr fungsi untuk mengarahkan ke step selanjutnya setelah disimpan ke databasae

		// $this->m_sekolah->simpan_data_sekolah($database);
		// $this->m_sekolah->simpan_data_sekolah($database);
		// $this->m_sekolah->simpan_data_sekolah($database);
		// $this->m_sekolah->simpan_data_sekolah($database);
		// $this->m_sekolah->simpan_data_sekolah($database);
		// $this->m_sekolah->simpan_data_sekolah($database);
	}
}
