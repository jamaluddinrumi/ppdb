<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persyaratan extends CI_Controller {

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

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		$data = array();
		$user = $this->ion_auth->user()->row_array();

		$user_id = $user['id'];

		$data['title'] = 'Persyaratan';

		$persyaratan = '';

		if ($this->input->post('persyaratan')) {
			$persyaratan = $this->input->post('persyaratan');

			// print_r($persyaratan);

			$data = array(
					'id' => 1,
	        'body' => $persyaratan
			);

			$this->load->model('Persyaratan_model');
			$this->Persyaratan_model->update($data);
		}

		$this->load->model('Persyaratan_model');
		$persyaratan = $this->Persyaratan_model->get_persyaratan();

		$data['persyaratan'] = $persyaratan;

		$this->load->view('header', $data);

		$this->load->view('app-header');

		$this->load->view('sidebar', $data);

		$this->load->view('persyaratan', $data);

		$this->load->view('footer');

	}

	public function ubah()
	{
		$persyaratan = $this->input->post('persyaratan');

		// print_r($persyaratan);

		$data = array(
				'id' => 1,
        'body' => $persyaratan
		);

		$this->load->model('Persyaratan_model');
		$this->Persyaratan_model->update($data);
	}

}
