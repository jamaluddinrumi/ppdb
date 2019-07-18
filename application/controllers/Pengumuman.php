<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

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

		$this->load->model('Siswa_model');
		$query = $this->Siswa_model->get_all();
		$data['semua_siswa'] = $query->result_array();

		// print_r($data['semua_siswa']);

		$this->load->view('header');

		$this->load->view('pengumuman', $data);

		$this->load->view('footer', $data);
	}
}
