<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Tampil extends CI_Controller
{ //menerangakan Crud adalah sebuah controller

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Tampil');
		//disamakan saaja uppercase sama lowercase dengan model
		// pakai construct supaya tidak harus menulis ulang $this->load->model('M_Tampil'); di setiap function.
	}

	public function index()
	{
		$data['sekolah'] = $this->M_Tampil->tampil_semua_sekolah();
		$this->load->view('v_tampil', $data);
		// variabel sekolah harus sama yang ada di view di foreach nya
	}

	public function tampil_satu_sekolah()
	{
		$id_sekolah =  $this->uri->segment(3);
		$where =   array('id_sekolah' => $id_sekolah);
		//$id_dinding ----> harus sama yang di database?
		$data['sekolah'] = $this->M_Tampil->tampil_satu_sekolah($where);
		// data array "sekolah" harus yang dijadikan variabel di tampil detailnya....
		$this->load->view('v_tampil_satu_sekolah', $data);
	}


	public function tampil_pondasi()
	{
		$data['pondasi'] = $this->M_Tampil->tampil_pondasi();
		$this->load->view('Tampil/v_tampil_pondasi', $data);
		// variabel pondasi harus sama yang ada di view di foreach nya
	}

	public function tampil_detail_pondasi()
	{
		$id_pondasikuh =  $this->uri->segment(3);
		$where = array('id_sekolah' => $id_pondasikuh);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where);

		// tambah css ke detailnya
		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_pondasi', $data);
		$this->load->view('template/footer');
	}

	// Experiment================================================================================================================================
	public function tampil_detail_pondasikuh()
	{
		$id_pondasikuh =  $this->uri->segment(3);
		$where = array('id_sekolah' => $id_pondasikuh);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['pondasiini'] = $this->M_Tampil->tampil_detail_pondasi($where);
		$this->load->view('Tampil/v_tampil_detail_pondasi_copy', $data);
	}
	// ================================================================================================================================

	public function tampil_kolom()
	{
		$data['kolom'] = $this->M_Tampil->tampil_kolom();
		$this->load->view('Tampil/v_tampil_kolom', $data);
		// variabel pondasi harus sama yang ada di view di foreach nya
	}

	public function tampil_detail_kolom()
	{
		$kolomqw =  $this->uri->segment(3);
		$where = array('id_sekolah' => $kolomqw);
		// cra liat error dengan print hasilnya
		// print_r($where = array('id_kolom' => $kolomqw));

		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['kolom'] = $this->M_Tampil->tampil_detail_kolom($where);


		// tambah css ke detailnya
		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_kolom', $data);
		$this->load->view('template/footer');
	}

	public function tampil_balok()
	{
		$data['balok'] = $this->M_Tampil->tampil_balok();
		$this->load->view('Tampil/v_tampil_balok', $data);
		// variabel pondasi harus sama yang ada di view di foreach nya
	}

	public function tampil_detail_balok()
	{
		$balokgue =  $this->uri->segment(3);
		$where = array('id_sekolah' => $balokgue);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['balok'] = $this->M_Tampil->tampil_detail_balok($where);


		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_balok', $data);
		$this->load->view('template/footer');
	}

	public function tampil_atap()
	{
		$data['atap'] = $this->M_Tampil->tampil_atap();
		$this->load->view('Tampil/v_tampil_atap', $data);
		// variabel pondasi harus sama yang ada di view di foreach nya
	}


	public function tampil_detail_atap()
	{
		$atapkuh =  $this->uri->segment(3);
		$where = array('id_sekolah' => $atapkuh);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['atap'] = $this->M_Tampil->tampil_detail_atap($where);



		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_atap', $data);
		$this->load->view('template/footer');
	}


	public function tampil_dinding()
	{
		$data['dinding'] = $this->M_Tampil->tampil_dinding();
		$this->load->view('Tampil/v_tampil_dinding', $data);
		// variabel pondasi harus sama yang ada di view di foreach nya
	}

	public function tampil_detail_dinding()
	{
		$dindin =  $this->uri->segment(3);
		$where = array('id_sekolah' => $dindin);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['dinding'] = $this->M_Tampil->tampil_detail_dinding($where);



		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_dinding', $data);
		$this->load->view('template/footer');
	}

	public function tampil_detail_plafond()
	{
		$plafond =  $this->uri->segment(3);
		$where = array('id_sekolah' => $plafond);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['plafond'] = $this->M_Tampil->tampil_detail_plafond($where);



		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_plafond', $data);
		$this->load->view('template/footer');
	}


	public function tampil_detail_lantai()
	{
		$lantai =  $this->uri->segment(3);
		$where = array('id_sekolah' => $lantai);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['lantai'] = $this->M_Tampil->tampil_detail_lantai($where);



		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_lantai', $data);
		$this->load->view('template/footer');
	}


	public function tampil_detail_kusen()
	{
		$kusen =  $this->uri->segment(3);
		$where = array('id_sekolah' => $kusen);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['kusen'] = $this->M_Tampil->tampil_detail_kusen($where);



		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_kusen', $data);
		$this->load->view('template/footer');
	}

	public function tampil_detail_pintu()
	{
		$pintu =  $this->uri->segment(3);
		$where = array('id_sekolah' => $pintu);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['pintu'] = $this->M_Tampil->tampil_detail_pintu($where);


		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_pintu', $data);
		$this->load->view('template/footer');
	}

	public function tampil_detail_jendela()
	{
		$jendela =  $this->uri->segment(3);
		$where = array('id_sekolah' => $jendela);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['jendela'] = $this->M_Tampil->tampil_detail_jendela($where);


		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_jendela', $data);
		$this->load->view('template/footer');
	}

	public function tampil_detail_fplafond()
	{
		$fplafond =  $this->uri->segment(3);
		$where = array('id_sekolah' => $fplafond);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['fplafond'] = $this->M_Tampil->tampil_detail_finishingplafond($where);


		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_fplafond', $data);
		$this->load->view('template/footer');
	}

	public function tampil_detail_fdinding()
	{
		$fdinding =  $this->uri->segment(3);
		$where = array('id_sekolah' => $fdinding);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['fdinding'] = $this->M_Tampil->tampil_detail_finishingdinding($where);


		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_fdinding', $data);
		$this->load->view('template/footer');
	}

	public function tampil_detail_fkusen()
	{
		$fkusen =  $this->uri->segment(3);
		$where = array('id_sekolah' => $fkusen);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['fkusen'] = $this->M_Tampil->tampil_detail_finishingkusen($where);



		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_fkusen', $data);
		$this->load->view('template/footer');
	}

	public function tampil_detail_instalasi_listrik()
	{
		$listrik =  $this->uri->segment(3);
		$where = array('id_sekolah' => $listrik);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['listrik'] = $this->M_Tampil->tampil_detail_instalasilistrik($where);


		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_instalasi_listrik', $data);
		$this->load->view('template/footer');
	}

	public function tampil_detail_instalasi_air()
	{
		$air =  $this->uri->segment(3);
		$where = array('id_sekolah' => $air);
		//$id_pondasi ---->tidak harus sama yang di database? tapi yang di array harus sama?
		$data['air'] = $this->M_Tampil->tampil_detail_instalasiair($where);


		$this->load->view('template/sidebar');
		$this->load->view('Tampil/v_tampil_detail_instalasi_air', $data);
		$this->load->view('template/footer');
	}


	public function tampil_relasi()
	{
		$data['relasi'] = $this->M_Tampil->tampil_relasih();
		$this->load->view('Tampil/v_tampil_relasi', $data);
		// variabel relasi harus sama yang ada di view di foreach nya
	}
}
