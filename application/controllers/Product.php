<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct()
    {
        parent::__construct();


    }

    public function index(){
        $this->load->model('Product_model');

        $data = $this->Product_model->current_products();

        $this->load->view('product',array('products'=>$data));


    }

    public function add_newProduct(){
        $this->load->model('Product_model');
        $products = $this->Product_model->current_products();

        $this->form_validation->set_rules('item_name','Item Name','required');
        $this->form_validation->set_rules('item_price','Item Price','required|regex_match[/^[0-9]+(\.[0-9]{0,2})?$/]');

        if($this->form_validation->run() == False){
            $data['error_message']='error';
            $data['products'] = $products;
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
        redirect('/Product');


    }



    public function remove($id)
    {   echo "<h1>Remove</h1>";
        $this->load->model('Product_model');
//      $item_name = $this->input->post('item_name');
        $this->Product_model->remove_product($id);
        redirect('/Product');
    }


    public function update()
    {
        $this->load->model('Product_model');
        $products = $this->Product_model->current_products();

        $this->form_validation->set_rules('item_name','Item Name','required');
        $this->form_validation->set_rules('item_price','Item Price','required');

        if($this->form_validation->run() == False){
            $data['error_update']='error';
            $data['products'] = $products;
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
        redirect('/Product');
    }

    public function add_valuesforupdate()
    {

        $this->load->model('Product_model');
        $item_name = $this->input->post('name');

        $result= $this->Product_model->get_productbyid($item_name);
        $data=array(
            'item_no'=>$result['0']['item_id'],
            'item_name'=>$result['0']['item_name'],
            'item_price'=>$result['0']['item_price']
        );


        $String = $this->load->view('Pages/update_product_form',($data),'TRUE');

        echo json_encode($String);

    }

    public function add_valuesforremove()
    {

        $this->load->model('Product_model');
        $item_name = $this->input->post('item_name');
        var_dump($item_name);

        $result['product'] = $this->Product_model->get_productbyid($item_name);
        var_dump($result['product']['0']['item_name']);

        $data =$result['product']['0']['item_id'];


        echo json_encode($data);

    }

}
