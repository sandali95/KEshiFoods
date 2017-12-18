<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

    public function get_payment()
    { //get the current quantity of item by id
        $result = $this->db->get('salary_payment');
        if($result->num_rows()>0)
        {
            return $result->result_array();
        }

    }

    public function Insert_data(){
    	$data=array(
    		'emp_id'=>$this->input->post('eid'),
    		'month'=>$this->input->post('month'),
    		'date'=>$this->input->post('date'),
    		'amount'=>$this->input->post('amount')
    	);

    	$this->db->insert('salary_payment',$data);
    }
}