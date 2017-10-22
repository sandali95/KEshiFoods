<?php
class Admin extends CI_Controller{
	public function index(){
		$this->load->view('addEmployee');
	}

	public function emp_register(){

		$this->form_validation->set_rules('eid','Employee id','required');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('cnumber','contact','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('etype','Employee Type','required');

		if($this->form_validation->run()==True){
			$this->load->model('Model_admin');
			$this->Model_admin->insertdata();
			//$this->load->view('addEmployee');
		}
		else{

			echo "error";
		}
	}
	public function get_data(){
		$this->load->model('Model_admin');
		$fetch_data=$this->Model_admin->fetch_data();
		$data =array(
			'emp'=>$fetch_data
		);
		//$this->load->view('view_data',$data);
		$this->load->view('viewEmployee.php',$data);
		}
	
}
