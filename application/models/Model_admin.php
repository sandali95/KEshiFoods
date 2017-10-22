<?php
class Model_admin extends CI_Model{
	function insertdata(){

		$data=array(
			'emp_id'=>$this->input->post('eid'),
			'emp_name'=>$this->input->post('name'),
			'emp_gender'=>$this->input->post('gender'),
			'emp_contact_num'=>$this->input->post('cnumber'),
			'emp_address'=>$this->input->post('address'),
			'emp_type'=>$this->input->post('etype')
		);

		$this->db->insert('employee',$data);
		//var_dump($data);
	}
	function fetch_data(){

		$result=$this->db->get('employee');
		//$data =$result->result();//Selec * from employers
		//$res=array();
		if($result->num_rows()>0){
			return $result->result_array();
		}

	}
}
