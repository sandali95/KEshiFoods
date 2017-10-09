<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stock_model extends CI_Controller {

    public function add_stockItem($data){
        $this->db->update('product', $data, array('item_id' =>$data['item_id']));

    }

    public function remove_stockItem(){

    }

    public function get_quantity($id){
       $result = $this->db->where('stock',array('item_id'=>$id));
        if($result->num_rows()>0){
            return $result->result_array();
        }

    }


}
