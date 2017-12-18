<?php
class Model_admin extends CI_Model{

	function insertdata($data){

		$this->db->insert('employee',$data);
		//var_dump($data);
	}

	public function updateData($data)
	{
		$this->db->update('employee', $data, array('emp_id' =>$data['emp_id']));
	}

	public function deleteData($id)
	{
		$this->db->delete('employee', array('emp_id' => $id));

	}
	function fetch_data(){

		$result=$this->db->get('employee');

		if($result->num_rows()>0){
			return $result->result_array();
		}

	}

	public function get_nameSuggestions($id)
	{
			$this->db->like('emp_name', $id,'after');
			$res = $this->db->get('employee');
			$result = $res->result_array();
			return $result;
	}
}
