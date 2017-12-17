<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_login extends CI_Controller {

	public function login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('userpass',$password);
		$result=$this->db->get('users');
		if($result->num_rows()==1){
			$this->load->view('home');
		}
		else{
			 $this->load->view('login');
			 return False;
		}
	}
}