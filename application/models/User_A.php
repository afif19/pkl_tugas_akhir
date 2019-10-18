<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_A extends CI_Model {
	public function login($post)
	{
		$this->db->SELECT('*');
		$this->db->FROM('users');
		$this->db->WHERE('username',$post['username']);
		$this->db->WHERE('password',md5($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null)
	{
		$this->db->SELECT('*');
		$this->db->FROM('users');
		if($id != null){
			$this->db->WHERE('user_id',$id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['username'] = $post['username'];
		$params['password'] = md5($post['password']);
		$params['nama'] = $post['fullname'];
		$params['alamat'] = $post['alamat'];
		$params['level'] = $post['level'];
		$this->db->INSERT('users',$params);
	}

}