<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

    function __construct()
    {
        parent::__construct();


    }

    public function index(){
        $this->load->view('product');

    }

    public function add_stock(){
        $this->load->model('product_model');

        $this->form_validation->set_rules('item_name','Item Name','required');
        $this->form_validation->set_rules('item_price','Item Price','required');

//        if($this->form_validation->run() == FALSE){
//            $data['error_message']='error';
//            $this->load->view('product',$data);
//            return;
//        }

        $item_name =$this->input->post('item_name');
        $item_price =$this->input->post('item_price');

        $data=array(
            'item_name'=>$item_name,
            'item_price'=>$item_price
        );

        $last=$this->product_model->get_lastId();
        var_dump($last);
        //$this->product_model->add_newProduct($data);
    }
}
