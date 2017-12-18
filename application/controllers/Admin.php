<?php
class Admin extends CI_Controller{
	public function index(){
		$this->load->view('home');
	}

	public function load_employee(){
		$this->load->view('addEmployee');
	}

	public function emp_register(){

		$this->form_validation->set_rules('eid','Employee id','required|numeric|is_unique[users.username]');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('cnumber','contact','required|numeric|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('etype','Employee Type','required');

		if($this->form_validation->run()==True){
			$this->load->model('Model_admin');
			$this->Model_admin->insertdata();
			$this->session->set_flashdata('suc','Successfully added');
			redirect('Admin/load_employee');		}
		else{
			//$this->session->set_flashdata('err','');
			$this->load->view('addEmployee');
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
