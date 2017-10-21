 <?php
class Model_admin extends CI_Model{
	function insertdata(){
		$data=array(
			'Name'=>$this->input->post('name'),
			'Gender'=>$this->input->post('gender'),
			'Contact_Number'=>$this->input->post('cnumber'),
			'Address'=>$this->input->post('address'),
			'etype'=>$this->input->post('etype')
		);
		$this->db->insert('employers',$data);//insert above data to db
		//echo "Successfully inserted!.";
		//$this->load->view('emp_reg.php');
	}
	function fetch_data(){

		$result=$this->db->get('employers');
		//$data =$result->result();//Selec * from employers
		//$res=array();
		if($result->num_rows()>0){
			return $result->result_array();

			/*foreach($data as $row){
				$data=array(
					'Eid'=>$row->Eid,
					'Name'=>$row->Name,
					'Gender'=>$row->Gender,
					'Contact_Number'=>$row->Contact_Number,
					'Address'=>$row->Address,
					'etype'=>$row->etype
			);
			array_push($res,$data);*/
			}

		}
		

	}
