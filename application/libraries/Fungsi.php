<?php 

Class Fungsi{
	protected $ci;

	public function __construct(){
		$this->ci =& get_instance();
	}

	function user_login(){
		$this->ci->load->model('user_a');
		$user_id = $this->ci->session->userdata('user_id');
		$user_data = $this->ci->user_a->get($user_id)->row();
		return $user_data;
	}

}