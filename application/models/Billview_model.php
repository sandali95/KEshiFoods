<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billview_model extends CI_Model {


    public function get_bill()
    { //get the current quantity of item by id
       $result = $this->db->get('bill');
        if($result->num_rows()>0)
        {
            return $result->result_array();
        }

    }
}
