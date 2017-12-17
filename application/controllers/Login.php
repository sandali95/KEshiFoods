<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function login_check()
    {

        $username=$this->input->post('username');
		$password=$this->input->post('password');
		

		$this->load->model('Model_login');
        $data=$this->Model_login->login($username,$password);
        //var_dump($data);

		if ($data == false) {
			$this->session->set_flashdata('err','Invalid Credintial');
			redirect('Welcome/index');	

		}
		else{
			$user_data = array(
				'user_id' =>$result->user_id ,
				'user_name' =>$this->input->post('username') ,
				'loggedin' => TRUE
			);
			$this->session->set_userdata($user_data);
			$this->session->set_flashdata('suc','');
			redirect('Admin/index');

		}
    }
}