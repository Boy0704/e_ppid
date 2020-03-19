<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	
	public function index()
	{
		$this->load->view('f_home');
	}

	public function simpan_permohonan_informasi()
	{
		$this->db->insert('permohonan_informasi', $_POST);
		$this->session->set_flashdata('message', alert_biasa('Permohonan Informasi Berhasil disimpan !','success'));
		redirect('web','refresh');
	}

	public function simpan_keberatan_informasi()
	{
		$this->db->insert('keberatan_informasi', $_POST);
		$this->session->set_flashdata('message', alert_biasa('Formulir Keberatan Informasi Berhasil Berhasil disimpan !','success'));
		redirect('web','refresh');
	}

	public function simpan_aduan_pelanggaran()
	{
		$ktp = upload_gambar_biasa('identitas_', 'image/file/', 'jpeg|jpg|pdf|png', 10000, 'userfile');
		$bukti1 = upload_gambar_biasa('bukti1_', 'image/file/', 'jpeg|jpg|pdf|png', 10000, 'upload_bukti1');
		$bukti2 = upload_gambar_biasa('bukti2_', 'image/file/', 'jpeg|jpg|pdf|png', 10000, 'upload_bukti2');

		$_POST['upload_identitas'] = $ktp;
		$_POST['upload_bukti1'] = $bukti1;
		$_POST['upload_bukti2'] = $bukti2;

		$this->db->insert('aduan_pelanggaran', $_POST);
		$this->session->set_flashdata('message', alert_biasa('Formulir Aduan Pelanggaran Berhasil Berhasil disimpan !','success'));
		redirect('web','refresh');
	}

}
