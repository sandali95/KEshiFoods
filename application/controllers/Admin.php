<?php
class Admin extends CI_Controller{
	public function index(){
		$this->load->view('addEmployee');
	}

	public function emp_register()
	{
		$this->form_validation->set_rules('eid','Employee id','required');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('cnumber','contact','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('etype','Employee Type','required');

		if($this->form_validation->run()==True){
			$this->load->model('Model_admin');

			$data=array(
				'emp_id'=>$this->input->post('eid'),
				'emp_name'=>$this->input->post('name'),
				'emp_gender'=>$this->input->post('gender'),
				'emp_contact_num'=>$this->input->post('cnumber'),
				'emp_address'=>$this->input->post('address'),
				'emp_type'=>$this->input->post('etype')
			);


			$this->Model_admin->insertdata();
			//$this->load->view('addEmployee');
		}
	}

	public function update_employee()
	{
		$this->form_validation->set_rules('eid','Employee id','required');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('cnumber','contact','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('etype','Employee Type','required');

		if($this->form_validation->run()==True){
			$this->load->model('Model_admin');

			$data=array(
				'emp_id'=>$this->input->post('eid'),
				'emp_name'=>$this->input->post('name'),
				'emp_gender'=>$this->input->post('gender'),
				'emp_contact_num'=>$this->input->post('cnumber'),
				'emp_address'=>$this->input->post('address'),
				'emp_type'=>$this->input->post('etype')
			);

			$this->Model_admin->updateData($data);
			//$this->load->view('addEmployee');
		}
	}

	public function delete_employee()
	{
		$id = $this->input->post('eid');
		$this->load->model('Model_admin');
		$this->Model_admin->deleteData($id);

	}

	public function get_data(){
			$this->load->model('Model_admin');
			$fetch_data=$this->Model_admin->fetch_data();
			$data =array(
				'emp'=>$fetch_data
			);

			$this->load->view('viewEmployee.php',$data);
		}


//suggest data
		public function autocomplete_name()
    {
      $this->load->model('Model_admin');

      $id = $this->input->post('name');
      $result = $this->Model_admin->get_nameSuggestions($id);

      if(count($result)>0){
        $data =array(
            'emp'=>$result
        );
        $string = $this->load->view('Pages/emp_search',($data),'TRUE');

        echo json_encode($string);
      }
    }

}
