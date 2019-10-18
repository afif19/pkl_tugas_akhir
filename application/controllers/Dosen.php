<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		check_not_login();
		$this->load->model('user_a');

	}

	public function index()
	{
		$data['row'] = $this->user_a->get();
		$this->template->load('template', 'dosen/dosen', $data); // nama views
	}

	public function add()
	{
		//form validation
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fullname', 'Nama','required');
		$this->form_validation->set_rules('username', 'Username','required|min_length[5]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password','required|min_length[5]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password','required|matches[password]', array('matches' => '%s Password Tidak Sesuai'));
		$this->form_validation->set_rules('level', 'Level','required');

		$this->form_validation->set_message('required','%s Tidak Boleh Kosong');
		$this->form_validation->set_message('min_length','{field} Minimal 5 Karakter');
		$this->form_validation->set_message('is_unique','{field} Username Sudah Terpakai');

		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'dosen/form_add_dosen');
		}
		else{
			$post = $this->input->post(null, TRUE);
			$this->user_a->add($post);
			if($this->db->affected_rows() > 0){
				echo "<script>
					alert('Data berhasil disimpan');
				</script>";
			}
			echo "<script>
					window.location('".site_url('dosen')."');
				</script>";
		}


		
	}
}
