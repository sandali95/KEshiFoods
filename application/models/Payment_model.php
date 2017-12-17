<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Controller {

    public function get_payment()
    { //get the current quantity of item by id
        $result = $this->db->get('salary_payment');
        if($result->num_rows()>0)
        {
            return $result->result_array();
        }

    }
}