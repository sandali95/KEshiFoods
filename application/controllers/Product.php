<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct()
    {
        parent::__construct();


    }

    public function index(){
        $this->load->model('Product_model');

        /*$data =array(
            'products'=>$this->Product_model->current_products()
        );
        var_dump($data);*/
        $data = $this->Product_model->current_products();


        $this->load->view('product',array('products'=>$data));


    }

    public function add_newProduct(){
        $this->load->model('Product_model');

        $this->form_validation->set_rules('item_name','Item Name','required');
        $this->form_validation->set_rules('item_price','Item Price','required');

        if($this->form_validation->run() == False){
            $data['error_message']='error';
            $this->load->view('product',$data);
            return;
        }

        $item_name =$this->input->post('item_name');
        $item_price =$this->input->post('item_price');
        ;

        $result=$this->Product_model->get_lastId();
        $last_id =(int)$result[0]['item_id'];

        $data=array(
            'item_id'=>++$last_id,
            'item_name'=>$item_name,
            'item_price'=>$item_price
        );

        $this->Product_model->add_newProduct($data);


    }

    public function remove(){
        $this->load->model('Product_model');


        $item_id = $this->input->post('item_no');
        $this->Product_model->remove_product($item_id);
    }

    public function update(){
        $this->load->model('Product_model');

        $this->form_validation->set_rules('item_name','Item Name','required');
        $this->form_validation->set_rules('item_price','Item Price','required');

        if($this->form_validation->run() == False){
            $data['error_message']='error';
            $this->load->view('product',$data);
            return;
        }

        $item_id = $this->input->post('item_no');
        $item_name =$this->input->post('item_name');
        $item_price =$this->input->post('item_price');
        ;


        $data=array(
            'item_id'=>$item_id,
            'item_name'=>$item_name,
            'item_price'=>$item_price
        );

        $this->Product_model->update_product($data);
    }

    public function add_values()
    {
        $data ="";
        $this->load->model('Product_model');
        $item_name = $this->input->post('name');

        $result['product'] = $this->Product_model->get_productbyid($item_name);
        //var_dump($result['product']['0']['item_name']);

        $data .='<tr>
                <td>' . $result['product']['0']['item_name'] . '</td>
                <td>' . $result['product']['0']['item_name'] . '</td>
                <td>' . $result['product']['0']['item_name'] . '</td>
                <td>' . $result['product']['0']['item_name'] . '</td>
            </tr>';;

        echo json_encode($data);

    }

}
