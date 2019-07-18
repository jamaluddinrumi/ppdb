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
				$crud->columns(['id', 'nisn', 'nama', 'asal_sekolah', 'tempat_lahir', 'tanggal_lahir', 'alamat_di_yogyakarta', 'alamat_asal', 'jenis_kelamin', 'agama', 'nama_orangtua', 'alamat_orangtua', 'agama_orangtua', 'pekerjaan_orangtua', 'nama_wali', 'alamat_di_yogyakarta_orangtua', 'nama_sekolah', 'nilai_bahasa_indonesia', 'nilai_bahasa_inggris', 'nilai_matematika', 'nilai_ipa', 'nilai_total_ujian', 'prestasi_non_akademis_1', 'prestasi_non_akademis_2', 'peminatan', 'diterima']);
				$crud->set_subject('Peserta');
				$crud->display_as('id','ID');
				$crud->display_as('nisn','NISN');
				$crud->display_as('asal_sekolah','Asal Sekolah');
				$crud->display_as('tempat_lahir', 'Tempat Lahir');
				$crud->display_as('tanggal_lahir', 'Tanggal Lahir');
				$crud->display_as('alamat_di_yogyakarta', 'Alamat di Yogyakarta');
				$crud->display_as('alamat_asal', 'Alamat Asal');
				$crud->display_as('jenis_kelamin', 'Jenis Kelamin');
				$crud->display_as('agama', 'Agama');
				$crud->display_as('nama_orangtua', 'Nama Orang Tua');
				$crud->display_as('alamat_orangtua', 'Alamat Orang Tua');
				$crud->display_as('agama_orangtua', 'Agama Orang Tua');
				$crud->display_as('pekerjaan_orangtua', 'Pekerjaan Orang Tua');
				$crud->display_as('nama_wali', 'Nama Wali');
				$crud->display_as('alamat_di_yogyakarta_orangtua', 'Alamat Orang Tua di Yogyakarta');
				$crud->display_as('nama_sekolah', 'Nama Sekolah');
				$crud->display_as('alamat_sekolah', 'Alamat Sekolah');
				$crud->display_as('nilai_bahasa_indonesia', 'Nilai Bahasa Indonesia');
				$crud->display_as('nilai_bahasa_inggris', 'Nilai Bahasa Inggris');
				$crud->display_as('nilai_matematika', 'Nilai Matematika');
				$crud->display_as('nilai_ipa', 'Nilai IPA');
				$crud->display_as('nilai_total_ujian', 'Nilai Total Ujian');
				$crud->display_as('prestasi_non_akademis_1', 'Prestasi Non Akademis 1');
				$crud->display_as('prestasi_non_akademis_2', 'Prestasi Non Akademis 2');
				$crud->display_as('peminatan', 'Peminatan');
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
