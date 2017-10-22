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

    public function get_empid($item_name)
    { //get the item no when item name is given
        $result = $this->db->get_where('bill',array('stock_name'=>$item_name));
        if($result->num_rows()>0)
        {
            $no=$result->result_array();
            return $no[0]['emp_id'];
        }
    }



    public function get_billRecords()
    {
        $query =$this->db->get('stock');
        return $query->result_array();
    }


    public function get_purchaseRecords($id)
    {
        $query =$this->db->get_where('purchase',array('stock_id'=>$id));
        return $query->result_array();
    }


}