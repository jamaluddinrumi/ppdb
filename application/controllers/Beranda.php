<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
			$this->load->model('Pengaturan_model');
			$data['whatsapp'] = $this->Pengaturan_model->get_whatsapp();

			$this->load->model('Persyaratan_model');
			$data['persyaratan'] = $this->Persyaratan_model->get_persyaratan();

		$this->load->view('header');

		$this->load->view('banner');

		$this->load->view('persyaratan', $data);

		$this->load->view('footer', $data);
	}
}
