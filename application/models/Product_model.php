<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function add_newProduct($data)
    {
        $this->db->insert('product',$data);



    }

    public function get_lastId()
    {

        $this->db->select_max('item_id');
        $result = $this->db->get('product');

        if($result->num_rows()>0)
        {
            return $result->result_array();
        }

    }
    public function update_product($data)
    {
        $this->db->update('product', $data, array('item_id' =>$data['item_id']));
    }

    public function remove_product($id)
    {
        $this->db->where('item_id', $id);
        $this->db->delete('product');

    }

    public function current_products()
    {//get the current product items to show in the dropdown

        $result = $this->db->get('product');
        $items =$result->result_array();
        return $items;
    }

    public function get_productbyid($item_name)
    {
        $this->db->where('item_name',$item_name);
        $result =$this->db->get('product');
        return $result->result_array();
    }

}
