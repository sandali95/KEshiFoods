<?php
class Admin extends CI_Controller{
	public function index(){
		//$res=$this->get_data();


		//$this->load->view('em');

		$this->load->view('employee');
		//echo "$result";
	}

	public function emp_register(){

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('cnumber','contact','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('etype','Employee Type','required');

		if($this->form_validation->run()==True){
			$this->load->model('model_admin');
			$this->model_admin->insertdata();
			//$this->get_data();
			$this->load->view('viewEmployee');
		}
		else{

			$data['error_msg']='error';

			$this->load->view('emp_reg.php');
		}
	}
	public function get_data(){
		$this->load->model('model_admin');
		$fetch_data=$this->model_admin->fetch_data();
		$data =array(
			'emp'=>$fetch_data
		);
		$this->load->view('view_data',$data);

		
			$this->load->view('employee.php',$data);
		}
	}
	public function get_data(){
		$this->load->model('Model_admin');
		$fetch_data=$this->Model_admin->fetch_data();
		$data =array(
			'emp'=>$fetch_data
		);
		$this->load->view('viewEmployee',$data);

		//return $fetch_data;
	}
}
