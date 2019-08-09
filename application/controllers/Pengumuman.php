<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function index()
	{
		$this->load->model('Pengaturan_model');
		$data['whatsapp'] = $this->Pengaturan_model->get_whatsapp();

		$this->load->model('Siswa_model');
		$data['semua_siswa'] = $this->Siswa_model->get_all();

		$this->load->view('header');

		$this->load->view('pengumuman', $data);

		$this->load->view('footer', $data);
	}
}
