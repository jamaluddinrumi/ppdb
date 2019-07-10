<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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

		$data['title'] = 'Peserta Tes';


				$crud = new grocery_CRUD();

				// $crud->set_theme('datatables');
				$crud->set_table('siswa');
				$crud->columns(['id', 'nisn', 'nama', 'asal_sekolah', 'diterima']);
				$crud->set_subject('Peserta');
				$crud->display_as('id','ID');
				$crud->display_as('nisn','NISN');
				$crud->display_as('asal_sekolah','Asal Sekolah');
				$crud->unset_print();
				$crud->unset_export();
				$crud->unset_read();
				$crud->unset_clone();

				$output = $crud->render();

				// print_r($output->output);

				$data['output'] = $output->output;
				$data['css_files'] = $output->css_files;
				$data['js_files'] = $output->js_files;

		$this->load->view('header', $data);

		$this->load->view('app-header');

		$this->load->view('sidebar', $data);

		$this->load->view('siswa', $data);

		$this->load->view('footer');


	}


}
