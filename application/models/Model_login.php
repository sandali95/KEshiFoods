<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_login extends CI_Model {

	public function login($username,$password){


		$this->db->where('username',$username);
		$this->db->where('userpass',$password);
		$result=$this->db->get('users');

		if ($result->num_rows() == 1) {
			//var_dump($result->row(0));
			return $result->row(0);
			
		}
		else{
			return false;
		}
	}
}