<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

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

		$data['title'] = 'Pengaturan';

		if ($this->input->post()) {
			// print_r($this->input->post());

			$no_whatsapp = $this->input->post('whatsapp');

			$new_whatsapp = array(
					'id' => 1,
					'nama' => 'whatsapp',
	        'isi' => $no_whatsapp
			);

			$this->load->model('Pengaturan_model');
			$this->Pengaturan_model->update($new_whatsapp);
		}

		$this->load->model('Pengaturan_model');
		$data['whatsapp'] = $this->Pengaturan_model->get_whatsapp();

		$this->load->view('header', $data);

		$this->load->view('app-header');

		$this->load->view('sidebar', $data);

		$this->load->view('pengaturan', $data);

		$this->load->view('footer');

	}
}
