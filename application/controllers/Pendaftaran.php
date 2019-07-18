<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->model('Pengaturan_model');
		$data['whatsapp'] = $this->Pengaturan_model->get_whatsapp();

		$this->load->view('header');

		$this->load->view('pendaftaran');

		$this->load->view('footer', $data);
	}

	public function kirim()
	{
		$this->load->model('Pengaturan_model');
		$data['whatsapp'] = $this->Pengaturan_model->get_whatsapp();

		$data['nisn'] = $this->input->post('nisn');
		$data['nama'] = $this->input->post('nama');
		$data['asal_sekolah'] = $this->input->post('asal_sekolah');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$data['alamat_di_yogyakarta'] = $this->input->post('alamat_di_yogyakarta');
		$data['alamat_asal'] = $this->input->post('alamat_asal');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['agama'] = $this->input->post('agama');
		$data['nama_orangtua'] = $this->input->post('nama_orangtua');
		$data['alamat_orangtua'] = $this->input->post('alamat_orangtua');
		$data['agama_orangtua'] = $this->input->post('agama_orangtua');
		$data['pekerjaan_orangtua'] = $this->input->post('pekerjaan_orangtua');
		$data['nama_wali'] = $this->input->post('nama_wali');
		$data['alamat_di_yogyakarta_orangtua'] = $this->input->post('alamat_di_yogyakarta_orangtua');
		$data['nama_sekolah'] = $this->input->post('nama_sekolah');
		$data['alamat_sekolah'] = $this->input->post('alamat_sekolah');
		$data['nilai_bahasa_indonesia'] = $this->input->post('nilai_bahasa_indonesia');
		$data['nilai_bahasa_inggris'] = $this->input->post('nilai_bahasa_inggris');
		$data['nilai_matematika'] = $this->input->post('nilai_matematika');
		$data['nilai_ipa'] = $this->input->post('nilai_ipa');
		$data['nilai_total_ujian'] = $this->input->post('nilai_total_ujian');
		$data['prestasi_non_akademis_1'] = $this->input->post('prestasi_non_akademis_1');
		$data['prestasi_non_akademis_2'] = $this->input->post('prestasi_non_akademis_2');
		$data['peminatan'] = $this->input->post('peminatan');

		$this->load->model('Siswa_model');
		$this->Siswa_model->insert($data);

		$this->load->view('header');

		$this->load->view('thank_you');

		$this->load->view('footer', $data);
	}
}
