<?php
class Admin extends CI_Controller{
	public function index(){
		//$res=$this->get_data();

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
			$this->load->model('Model_admin');
			$this->Model_admin->insertdata();
			$this->load->view('employee.php');
			//$this->load->model('Model_admin');
			//$data=$this->model_admin->fetch_data();
			//$this->load->view('view_data',array('data' => $data));

			
	
		}
		else{
		
			$this->load->view('employee.php');
		}
	}
	public function get_data(){
		$this->load->model('Model_admin');
		$fetch_data=$this->Model_admin->fetch_data();
		$data =array(
			'emp'=>$fetch_data
		);
		$this->load->view('view_data',$data);
		//return $fetch_data;
	}
	public function search_data(){
		$this->form_validation->set_rules('name','Name','required');
		if($this->form_validation->run()==True){
			$this->load->model('Model_admin');
			$this->Model_admin->search_data();
		}
	}
}
