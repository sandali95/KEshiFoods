<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Bill_model extends CI_Controller {

    public function Insert_data()
    {
        $data=  array(

        'bill_no'=> $this->input->post('bill_no',TRUE),
        'date'=> $this->input->post('date'),
        'customer_name'=> $this->input->post('cname',TRUE),
        'total_val'=> $this->input->post('tvalue',TRUE)
        





         );

        return $this->db->insert( 'bill',$data);
            //$this->load->view('login1');

    }

    public function fetch_data()
    {
      $query= $this->db->get('bill');
      return $query->result_array();

    }

}

