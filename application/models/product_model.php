<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Controller {

    public function add_newProduct($data){

    }

    public function get_lastId(){

        $last = $this->db->order_by('product_id',"desc")
            ->limit(1)
            ->get('product_id')
            ->row();
       return $last;


    }

}
