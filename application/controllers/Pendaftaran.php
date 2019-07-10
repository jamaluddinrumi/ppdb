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

		$this->load->view('header');

		$this->load->view('pendaftaran');

		$this->load->view('footer');
	}

	public function kirim()
	{
		$nisn = $this->input->post('nisn');
		$nama = $this->input->post('nama');
		$asal_sekolah = $this->input->post('asal_sekolah');

		$data = array('nisn' => $nisn, 'nama' => $nama, 'asal_sekolah' => $asal_sekolah );

		$this->load->model('Siswa_model');
		$this->Siswa_model->insert($data);

		$this->load->view('header');

		$this->load->view('thank_you');

		$this->load->view('footer');
	}
}
