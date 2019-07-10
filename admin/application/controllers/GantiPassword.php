<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GantiPassword extends CI_Controller {

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

		$data['title'] = 'Ganti Password';

		$this->load->view('header', $data);

		$this->load->view('app-header');

		$this->load->view('sidebar', $data);

		$this->load->view('gantipassword', $data);

		$this->load->view('footer');

	}
}