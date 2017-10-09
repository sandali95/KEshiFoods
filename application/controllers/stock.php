<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stock extends CI_Controller
{


    public function index()
    {
        $this->load->view('stock');


    }
    public function add_stock(){
        $this->load->model('stock_model');


        $this->form_validation->set_rules('item_name','Item Name','required');
        $this->form_validation->set_rules('item_quantity','Item Price','required');
        $this->form_validation->set_rules('invoice_no','Invoice No','required');
        $this->form_validation->set_rules('invoice_date','Invoice Date','required');

        if($this->form_validation->run() == False){
            $data['error_message']='error';
            $this->load->view('stock',$data);
            return;
        }

        $item_no =$this->input->post('item_no');
        $item_name =$this->input->post('item_name');
        $item_quantity =$this->input->post('item_quantity');
        $invoice_no =$this->input->post('invoice_no');
        $invoice_date =$this->input->post('invoice_date');

        $result=$this->stock_model-> get_quantity($item_no);
        $quantity =(int)$result[0]['item_quantity'];

        $data=array(
            'item_id'=>$item_no,
            'item_name'=>$item_name,
            'item_quantity'=>$item_quantity+$quantity,
            'invoice_no'=>$invoice_no,
            'invoice_date'=>$invoice_date

        );

        $this->stock_model->add_stockItem($data);
    }
}