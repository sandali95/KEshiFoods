<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
  function __construct()
  {
      parent::__construct();

  }

  function get_stocks(){
    $result = $this->db->get('stock');
    return $result->result_array();

  }

  function get_products(){
    $result = $this->db->get('product');
    return $result->result_array();
  }

  function get_sales(){

    $this->db->select('product.item_name,bill.date,bill_item.qty');
    $this->db->from('bill_item');
    $this->db->join('product', ' bill_item.product_id  = product.item_id');
    $this->db->join('bill', 'bill.bill_no = bill_item.bill_no');
    //$this->db->where('MONTH(bill.date) = MONTH(CURRENT_DATE())');
    $this->db->group_by('bill_item.product_id');
    $query = $this->db->get();

    return $query->result_array();
  }
}
