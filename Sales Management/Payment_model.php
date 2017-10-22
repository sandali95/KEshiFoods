<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Payment_model extends CI_Controller {

    public function Insert_data()
    {
        $data=  array(

        'emp_id'=> $this->input->post('eid',TRUE),
        'month'=> $this->input->post('month',TRUE),
        'date'=> $this->input->post('date',TRUE),
        'amount'=> $this->input->post('amount',TRUE)
        





         );

        return $this->db->insert( 'advanced_payments',$data);
            //$this->load->view('login1');

    }

    public function fetch_data()
    {
      $query= $this->db->get('advanced_payments');
      return $query->result_array();

    }

}

