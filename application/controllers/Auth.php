<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function login()
	{
		check_already_login();
		$this->load->view('login'); // nama views
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['login'])){
			$this->load->model('user_a');
			$query = $this->user_a->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				// echo $row->username;
				$params = array(
					'user_id' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script> 
				alert('Selamat Login Berhasil');
					window.location='".site_url('dashboard')."'; 
				</script>";

			}
			else{
				echo "<script> 
				alert('Login Gagal');
					window.location='".site_url('auth/login')."'; 
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('user_id','level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}




}
