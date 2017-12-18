<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billview_model extends CI_Controller {


    public function get_bill()
    { //get the current quantity of item by id
       $result = $this->db->get('bill');
        if($result->num_rows()>0)
        {
            return $result->result_array();
        }

    }

    public function get_billNo($item_name)
    { //get the item no when item name is given
        $result = $this->db->get_where('bill',array('stock_name'=>$item_name));
        if($result->num_rows()>0)
        {
            $no=$result->result_array();
            return $no[0]['bill_no'];
        }
    }

    public function current_stock()
    {//get the current stock items to show in the dropdown
        $accounts=array();
        $this->db->select('stock_name');
        $result = $this->db->get('stock');
        $items =$result->result();
        if ($result -> num_rows() >0)
        {
            foreach ($items as $row)
            {
                $acc = $row->stock_name;
                array_push($accounts, $acc);
            }
        }
        return $accounts;
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

    public function get_nameSuggestions($id)
    {
        $this->db->like('customer_name', $id,'after');
        $res = $this->db->get('bill');
        $result = $res->result_array();
        return $result;
    }

    public function get_dateSuggestions($id)
    {
      $this->db->like('date', $id,'after');
      $res = $this->db->get('bill');
      $result = $res->result_array();
      return $result;
    }


}
