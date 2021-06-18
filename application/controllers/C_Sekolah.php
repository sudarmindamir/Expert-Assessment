<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Sekolah extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_sekolah');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function terimaData()
	{

		$database['nama_sekolah'] = $this->input->post('nama_sekolah');
		$database['alamat'] = $this->input->post('alamat_sekolah');
		// pada variabel $database alamat harus sama yg ada di phpmyadmin sedangkan method post harus sesuai dengan "name" yang ada di View
		$database['kabupaten'] = $this->input->post('kabupaten');
		$database['luas_bangunan'] = $this->input->post('luas_bangunan');



		$this->m_sekolah->simpan_data_sekolah($database);
		redirect(base_url('C_Sekolah/sekolah'));
		//redirecr fungsi untuk mengarahkan ke step selanjutnya setelah disimpan ke databasae
	}


	public function terimaDataPondasi()
	{

		$database['id_sekolah'] = $this->input->post('id_sekolah');

		$database['klasifikasi_kerusakan'] = $this->input->post('pondasi');
		$database['tingkat_kerusakan_pondasi'] = $database['klasifikasi_kerusakan'] * 0.12;

		$this->m_sekolah->simpan_data_pondasi($database);
		// // redirect(base_url('C_Tampil/tampil_pondasi'));
		// redirect(base_url('C_sekolah/detailSekolah/'));
	}

	public function terimaDataKolom()
	{

		$database['id_sekolah'] = $this->input->post('id_sekolah');

		$database['jumlah_unit'] = $this->input->post('jumlah_unit');
		$database['tidak_rusak'] = $this->input->post('tidak_rusak') * 0;
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') * 0.2;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') * 0.35;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') * 0.50;
		$database['rusak_berat'] = $this->input->post('rusak_berat') * 0.70;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat') * 0.85;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai') * 1;
		$database['total_kerusakan_kolom'] = (($database['tidak_rusak'] + $database['rusak_sangat_ringan'] + $database['rusak_ringan'] + $database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']) / $database['jumlah_unit']) * 1;
		$database['tingkat_kerusakan_kolom'] = $database['total_kerusakan_kolom'] * 0.12;

		$this->m_sekolah->simpan_data_kolom($database);
		// redirect(base_url('C_Tampil/tampil_kolom'));
	}

	public function terimaDataBalok()
	{

		$database['id_sekolah'] = $this->input->post('id_sekolah');

		$database['jumlah_unit'] = $this->input->post('jumlah_unit');
		$database['tidak_rusak'] = $this->input->post('tidak_rusak') * 0;
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') * 0.2;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') * 0.35;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') * 0.50;
		$database['rusak_berat'] = $this->input->post('rusak_berat') * 0.70;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat') * 0.85;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai') * 1;
		$database['total_kerusakan_balok'] = (($database['tidak_rusak'] + $database['rusak_sangat_ringan'] + $database['rusak_ringan'] + $database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']) / $database['jumlah_unit']) * 1;
		$database['tingkat_kerusakan_balok'] = $database['total_kerusakan_balok'] * 0.08;

		$this->m_sekolah->simpan_data_balok($database);
		// redirect(base_url('C_Tampil/tampil_balok'));
	}

	public function terimaDataAtap()
	{

		$database['id_sekolah'] = $this->input->post('id_sekolah');

		$database['luas_A'] = $this->input->post('luas_A');
		$database['luas_B'] = $this->input->post('luas_B');
		// pada variabel $database alamat harus sama yg ada di phpmyadmin sedangkan method post harus sesuai dengan "name" yang ada di View
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / (($database['luas_A'] + $database['luas_B']) * 1);
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / (($database['luas_A'] + $database['luas_B']) * 1);
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / (($database['luas_A'] + $database['luas_B']) * 1);
		$database['rusak_berat'] = $this->input->post('rusak_berat') / (($database['luas_A'] + $database['luas_B']) * 1);
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat')  / (($database['luas_A'] + $database['luas_B']) * 1);
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai')  / (($database['luas_A'] + $database['luas_B']) * 1);

		$database['tidak_rusak'] = (1 - ($database['rusak_sangat_ringan'] + $database['rusak_ringan'] +	$database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']));
		$database['total_kerusakan_atap'] = (($database['tidak_rusak'] * 0) + ($database['rusak_sangat_ringan'] * 0.2) + ($database['rusak_ringan'] * 0.35) + ($database['rusak_sedang'] * 0.50) + ($database['rusak_berat'] * 0.70) + ($database['rusak_sangat_berat'] * 0.85) + ($database['komponen_tidak_sesuai'] * 1));
		$database['tingkat_kerusakan_atap'] = $database['total_kerusakan_atap'] * 0.07;

		$this->m_sekolah->simpan_data_atap($database);
		// redirect(base_url('C_Tampil/tampil_atap'));
		// redirect(base_url('C_sekolah/detailSekolah'));
	}

	public function terimaDataDinding()
	{

		$database['id_sekolah'] = $this->input->post('id_sekolah');
		$database['luas_total'] = $this->input->post('luas_total');
		// pada variabel $database alamat harus sama yg ada di phpmyadmin sedangkan method post harus sesuai dengan "name" yang ada di View
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / $database['luas_total']  * 1;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / $database['luas_total']  * 1;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / $database['luas_total']  * 1;
		$database['rusak_berat'] = $this->input->post('rusak_berat') /  $database['luas_total']  * 1;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat')  / $database['luas_total']  * 1;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai')  / $database['luas_total']  * 1;

		$database['tidak_rusak'] = (1 - ($database['rusak_sangat_ringan'] + $database['rusak_ringan'] +	$database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']));
		$database['total_kerusakan_dinding'] = (($database['tidak_rusak'] * 0) + ($database['rusak_sangat_ringan'] * 0.2) + ($database['rusak_ringan'] * 0.35) + ($database['rusak_sedang'] * 0.50) + ($database['rusak_berat'] * 0.70) + ($database['rusak_sangat_berat'] * 0.85) + ($database['komponen_tidak_sesuai'] * 1));
		$database['tingkat_kerusakan_dinding'] = $database['total_kerusakan_dinding'] * 0.215;

		$this->m_sekolah->simpan_data_dinding($database);
		// redirect(base_url('C_Tampil/tampil_dinding'));
	}

	public function terimaDataPlafond()
	{
		$database['id_sekolah'] = $this->input->post('id_sekolah');
		$database['panjang_a'] = $this->input->post('panjang_a');
		$database['panjang_b'] = $this->input->post('panjang_b');
		$database['panjang_c'] = $this->input->post('panjang_c');
		$database['luas_total'] = ($database['panjang_a'] + $database['panjang_b']) * 	$database['panjang_c'];
		// pada variabel $database alamat harus sama yg ada di phpmyadmin sedangkan method post harus sesuai dengan "name" yang ada di View
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / $database['luas_total']  * 1;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / $database['luas_total']  * 1;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / $database['luas_total']  * 1;
		$database['rusak_berat'] = $this->input->post('rusak_berat') /  $database['luas_total']  * 1;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat')  / $database['luas_total']  * 1;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai')  / $database['luas_total']  * 1;

		$database['tidak_rusak'] = (1 - ($database['rusak_sangat_ringan'] + $database['rusak_ringan'] +	$database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']));
		$database['total_kerusakan_plafond'] = (($database['tidak_rusak'] * 0) + ($database['rusak_sangat_ringan'] * 0.2) + ($database['rusak_ringan'] * 0.35) + ($database['rusak_sedang'] * 0.50) + ($database['rusak_berat'] * 0.70) + ($database['rusak_sangat_berat'] * 0.85) + ($database['komponen_tidak_sesuai'] * 1));
		$database['tingkat_kerusakan_plafond'] = $database['total_kerusakan_plafond'] * 0.1;

		$this->m_sekolah->simpan_data_plafond($database);
	}

	public function terimaDataLantai()
	{
		$database['id_sekolah'] = $this->input->post('id_sekolah');
		$database['luas_total'] = $this->input->post('luas_total');
		// pada variabel $database alamat harus sama yg ada di phpmyadmin sedangkan method post harus sesuai dengan "name" yang ada di View
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / $database['luas_total']  * 1;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / $database['luas_total']  * 1;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / $database['luas_total']  * 1;
		$database['rusak_berat'] = $this->input->post('rusak_berat') /  $database['luas_total']  * 1;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat')  / $database['luas_total']  * 1;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai')  / $database['luas_total']  * 1;

		$database['tidak_rusak'] = (1 - ($database['rusak_sangat_ringan'] + $database['rusak_ringan'] +	$database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']));
		$database['total_kerusakan_lantai'] = (($database['tidak_rusak'] * 0) + ($database['rusak_sangat_ringan'] * 0.2) + ($database['rusak_ringan'] * 0.35) + ($database['rusak_sedang'] * 0.50) + ($database['rusak_berat'] * 0.70) + ($database['rusak_sangat_berat'] * 0.85) + ($database['komponen_tidak_sesuai'] * 1));
		$database['tingkat_kerusakan_lantai'] = $database['total_kerusakan_lantai'] * 0.145;

		$this->m_sekolah->simpan_data_lantai($database);
	}

	public function terimaDataKusen()
	{
		$database['id_sekolah'] = $this->input->post('id_sekolah');
		$database['jumlah_unit'] = $this->input->post('jumlah_unit');
		$database['tidak_rusak'] = $this->input->post('tidak_rusak') / $database['jumlah_unit'] * 0;
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / $database['jumlah_unit'] * 0.2;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / $database['jumlah_unit'] * 0.35;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / $database['jumlah_unit'] * 0.50;
		$database['rusak_berat'] = $this->input->post('rusak_berat') / $database['jumlah_unit'] * 0.70;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat') / $database['jumlah_unit'] * 0.85;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai') / $database['jumlah_unit'] * 1;
		$database['total_kerusakan_kusen'] = (($database['tidak_rusak'] + $database['rusak_sangat_ringan'] + $database['rusak_ringan'] + $database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']) / $database['jumlah_unit']) * 1;
		$database['tingkat_kerusakan_kusen'] = $database['total_kerusakan_kusen'] * 0.01;

		$this->m_sekolah->simpan_data_kusen($database);
	}

	public function terimaDataPintu()
	{

		$database['id_sekolah'] = $this->input->post('id_sekolah');

		$database['jumlah_unit'] = $this->input->post('jumlah_unit');
		$database['tidak_rusak'] = $this->input->post('tidak_rusak') / $database['jumlah_unit'] * 0;
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / $database['jumlah_unit'] * 0.2;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / $database['jumlah_unit'] * 0.35;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / $database['jumlah_unit'] * 0.50;
		$database['rusak_berat'] = $this->input->post('rusak_berat') / $database['jumlah_unit'] * 0.70;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat') / $database['jumlah_unit'] * 0.85;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai') / $database['jumlah_unit'] * 1;
		$database['total_kerusakan_pintu'] = (($database['tidak_rusak'] + $database['rusak_sangat_ringan'] + $database['rusak_ringan'] + $database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']) / $database['jumlah_unit']) * 1;
		$database['tingkat_kerusakan_pintu'] = $database['total_kerusakan_pintu'] * 0.015;

		$this->m_sekolah->simpan_data_pintu($database);
	}

	public function terimaDataJendela()
	{
		$database['id_sekolah'] = $this->input->post('id_sekolah');

		$database['jumlah_unit'] = $this->input->post('jumlah_unit');
		$database['tidak_rusak'] = $this->input->post('tidak_rusak') / $database['jumlah_unit'] * 0;
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / $database['jumlah_unit'] * 0.2;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / $database['jumlah_unit'] * 0.35;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / $database['jumlah_unit'] * 0.50;
		$database['rusak_berat'] = $this->input->post('rusak_berat') / $database['jumlah_unit'] * 0.70;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat') / $database['jumlah_unit'] * 0.85;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai') / $database['jumlah_unit'] * 1;
		$database['total_kerusakan_jendela'] = (($database['tidak_rusak'] + $database['rusak_sangat_ringan'] + $database['rusak_ringan'] + $database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']) / $database['jumlah_unit']) * 1;
		$database['tingkat_kerusakan_jendela'] = $database['total_kerusakan_jendela'] * 0.02;

		$this->m_sekolah->simpan_data_jendela($database);
	}

	public function terimaDataFinishingPlafond()
	{
		$database['id_sekolah'] = $this->input->post('id_sekolah');
		$database['luas_total'] = $this->input->post('luas_total');
		// pada variabel $database alamat harus sama yg ada di phpmyadmin sedangkan method post harus sesuai dengan "name" yang ada di View
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / $database['luas_total'] * 1;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / $database['luas_total'] * 1;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / $database['luas_total'] * 1;
		$database['rusak_berat'] = $this->input->post('rusak_berat') / $database['luas_total'] * 1;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat')  / $database['luas_total'] * 1;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai')  / $database['luas_total'] * 1;

		$database['tidak_rusak'] = (1 - ($database['rusak_sangat_ringan'] + $database['rusak_ringan'] +	$database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']));
		$database['total_kerusakan_finishing_plafond'] = (($database['tidak_rusak'] * 0) + ($database['rusak_sangat_ringan'] * 0.2) + ($database['rusak_ringan'] * 0.35) + ($database['rusak_sedang'] * 0.50) + ($database['rusak_berat'] * 0.70) + ($database['rusak_sangat_berat'] * 0.85) + ($database['komponen_tidak_sesuai'] * 1));
		$database['tingkat_kerusakan_finishing_plafond'] = $database['total_kerusakan_finishing_plafond'] * 0.03;

		$this->m_sekolah->simpan_data_finishing_plafond($database);
	}

	public function terimaDataFinishingDinding()
	{
		$database['id_sekolah'] = $this->input->post('id_sekolah');
		$database['luas_total'] = $this->input->post('luas_total');
		// pada variabel $database alamat harus sama yg ada di phpmyadmin sedangkan method post harus sesuai dengan "name" yang ada di View
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / $database['luas_total'] * 1;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / $database['luas_total'] * 1;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / $database['luas_total'] * 1;
		$database['rusak_berat'] = $this->input->post('rusak_berat') / $database['luas_total'] * 1;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat')  / $database['luas_total'] * 1;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai')  / $database['luas_total'] * 1;

		$database['tidak_rusak'] = (1 - ($database['rusak_sangat_ringan'] + $database['rusak_ringan'] +	$database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']));
		$database['total_kerusakan_finishing_dinding'] = (($database['tidak_rusak'] * 0) + ($database['rusak_sangat_ringan'] * 0.2) + ($database['rusak_ringan'] * 0.35) + ($database['rusak_sedang'] * 0.50) + ($database['rusak_berat'] * 0.70) + ($database['rusak_sangat_berat'] * 0.85) + ($database['komponen_tidak_sesuai'] * 1));
		$database['tingkat_kerusakan_finishing_dinding'] = $database['total_kerusakan_finishing_dinding'] * 0.04;

		$this->m_sekolah->simpan_data_finishing_dinding($database);
	}

	public function terimaDataFinishingKusen()
	{
		$database['id_sekolah'] = $this->input->post('id_sekolah');
		$database['luas_total'] = $this->input->post('luas_total');
		// pada variabel $database alamat harus sama yg ada di phpmyadmin sedangkan method post harus sesuai dengan "name" yang ada di View
		$database['rusak_sangat_ringan'] = $this->input->post('rusak_sangat_ringan') / $database['luas_total'] * 1;
		$database['rusak_ringan'] = $this->input->post('rusak_ringan') / $database['luas_total'] * 1;
		// $rusaksedang = $this->input->post('rusak_sedang');
		$database['rusak_sedang'] = $this->input->post('rusak_sedang') / $database['luas_total'] * 1;
		$database['rusak_berat'] = $this->input->post('rusak_berat') / $database['luas_total'] * 1;
		$database['rusak_sangat_berat'] = $this->input->post('rusak_sangat_berat')  / $database['luas_total'] * 1;
		$database['komponen_tidak_sesuai'] = $this->input->post('komponen_tidak-sesuai')  / $database['luas_total'] * 1;

		$database['tidak_rusak'] = (1 - ($database['rusak_sangat_ringan'] + $database['rusak_ringan'] +	$database['rusak_sedang'] + $database['rusak_berat'] + $database['rusak_sangat_berat'] + $database['komponen_tidak_sesuai']));
		$database['total_kerusakan_finishing_kusen'] = (($database['tidak_rusak'] * 0) + ($database['rusak_sangat_ringan'] * 0.2) + ($database['rusak_ringan'] * 0.35) + ($database['rusak_sedang'] * 0.50) + ($database['rusak_berat'] * 0.70) + ($database['rusak_sangat_berat'] * 0.85) + ($database['komponen_tidak_sesuai'] * 1));
		$database['tingkat_kerusakan_finishing_kusen'] = $database['total_kerusakan_finishing_kusen'] * 0.02;

		$this->m_sekolah->simpan_data_finishing_kusen($database);
	}


	public function terimaDataInstalasiListrik()
	{
		$database['id_sekolah'] = $this->input->post('id_sekolah');
		$database['klasifikasi_kerusakan'] = $this->input->post('listrik');
		$database['tingkat_kerusakan_instalasi_listrik'] = $database['klasifikasi_kerusakan'] * 0.01;

		$this->m_sekolah->simpan_data_instalasi_listrik($database);
	}


	public function terimaDataInstalasiAir()
	{
		$database['id_sekolah'] = $this->input->post('id_sekolah');

		$database['klasifikasi_kerusakan'] = $this->input->post('air');
		$database['tingkat_kerusakan_instalasi_air'] = $database['klasifikasi_kerusakan'] * 0.01;

		$this->m_sekolah->simpan_data_instalasi_air($database);
	}

	public function sekolah()
	{
		$data['sekolah'] = $this->m_sekolah->getSekolah();

		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_daftar-sekolah', $data);
		$this->load->view('template/footer');
	}

	public function detailSekolah()
	{
		$id = $this->uri->segment(3);
		$data['sekolah'] = $this->m_sekolah->getDetailSekolah($id);
		$where = array('id_sekolah' => $id);
		$this->load->model('m_tampil');

		$data['pondasi'] = $this->m_tampil->tampil_detail_pondasi($where);
		$data['kolom'] = $this->m_tampil->tampil_detail_kolom($where);
		$data['balok'] = $this->m_tampil->tampil_detail_balok($where);
		$data['atap'] = $this->m_tampil->tampil_detail_atap($where);
		$data['dinding'] = $this->m_tampil->tampil_detail_dinding($where);
		$data['plafond'] = $this->m_tampil->tampil_detail_plafond($where);
		$data['lantai'] = $this->m_tampil->tampil_detail_lantai($where);
		$data['kusen'] = $this->m_tampil->tampil_detail_kusen($where);
		$data['pintu'] = $this->m_tampil->tampil_detail_pintu($where);
		$data['jendela'] = $this->m_tampil->tampil_detail_jendela($where);
		$data['finishingplafond'] = $this->m_tampil->tampil_detail_finishingplafond($where);
		$data['finishingdinding'] = $this->m_tampil->tampil_detail_finishingdinding($where);
		$data['finishingkusen'] = $this->m_tampil->tampil_detail_finishingkusen($where);
		$data['instalasilistrik'] = $this->m_tampil->tampil_detail_instalasilistrik($where);
		$data['instalasiair'] = $this->m_tampil->tampil_detail_instalasiair($where);

		$this->load->model('M_Sekolah');
		$id_sekolah = array('a.id_sekolah' => $id);
		$data['luas_bangunan'] = $this->M_Sekolah->get_luas_bangunan($id_sekolah);

		$data['s'] = $this->m_sekolah->hasilAkumulasi($id_sekolah);
		if (!empty($data['s'])) {
			$data['totalAkumulasi'] =  $data['s']->tingkat_kerusakan_kolom + $data['s']->tingkat_kerusakan_pondasi + $data['s']->tingkat_kerusakan_balok + $data['s']->tingkat_kerusakan_atap
				+ $data['s']->tingkat_kerusakan_dinding + $data['s']->tingkat_kerusakan_plafond + $data['s']->tingkat_kerusakan_lantai + $data['s']->tingkat_kerusakan_kusen + $data['s']->tingkat_kerusakan_pintu
				+ $data['s']->tingkat_kerusakan_jendela + $data['s']->tingkat_kerusakan_finishing_plafond + $data['s']->tingkat_kerusakan_finishing_dinding
				+ $data['s']->tingkat_kerusakan_finishing_kusen + $data['s']->tingkat_kerusakan_instalasi_listrik + $data['s']->tingkat_kerusakan_instalasi_air;
		} else {
			$data['totalAkumulasi'] = 0;
		}

		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_sekolah', $data);
		$this->load->view('template/footer');
	}
}
