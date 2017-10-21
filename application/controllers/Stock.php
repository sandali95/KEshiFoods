<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller
{


    public function index()
    {
        $this->load->model('Stock_model');

        $data =array(
            'stock'=>$this->Stock_model->current_stock(),
            'item_no'=>0
        );

        $this->load->view('stock',$data);



    }
    public function add_stock()
    {
        $this->load->model('Stock_model');


        $this->form_validation->set_rules('item_name','Item Name','required');
        $this->form_validation->set_rules('item_quantity','Item Price','required');
        $this->form_validation->set_rules('invoice_no','Invoice No','required');
        $this->form_validation->set_rules('invoice_date','Invoice Date','required');

        if($this->form_validation->run() == False)
        {
            $data =array(
                'stock'=>$this->Stock_model->current_stock()
            );
            $msg['error_message']='error';
            $this->load->view('stock',$data,$msg);
            return;
        }

        $item_name =$this->input->post('item_name');
        $item_quantity =$this->input->post('item_quantity');
        $invoice_no =$this->input->post('invoice_no');
        $invoice_date =$this->input->post('invoice_date');

        $item_no =$this->Stock_model->get_itemNo($item_name);//get the item number from the db
        $data=array(
            'item_no'=>$item_no
        );
        $this->load->view('stock',$data);

        $result=$this->Stock_model-> get_quantity($item_no);
        $quantity =(int)$result[0]['tot_quantity'];

        $data=array(
            'stock_id'=>(int)$item_no,
            'invoice_num'=>$invoice_no,
            'invoice_date'=>$invoice_date,
            'item_quantity'=>(int)$item_quantity

        );

        $stock =array(
            'tot_quantity'=>$item_quantity+$quantity,
        );


        $this->Stock_model->add_stockItem($data,$stock);
    }

    public function remove_stock()
    {
        $this->load->model('Stock_model');


        $this->form_validation->set_rules('item_name','Item Name','required');
        $this->form_validation->set_rules('item_quantity','Item Price','required');


        if($this->form_validation->run() == False)
        {
            $data =array(
                'stock'=>$this->Stock_model->current_stock()
            );
            $remove_msg['error_message2']='error';
            $this->load->view('stock',$data,$remove_msg);
            return;
        }


        $item_name =$this->input->post('item_name');
        $item_quantity =$this->input->post('item_quantity');

        //get the item no from the database
        $item_no =$this->Stock_model->get_itemNo($item_name);

        //get the current quantity from the database
        $result=$this->Stock_model-> get_quantity($item_no);
        $quantity =(int)$result[0]['tot_quantity'];

        $data=array(
            'stock_id'=>$item_no,
            'tot_quantity'=>$quantity-$item_quantity,


        );

        $this->Stock_model->remove_stockItem($data);
        redirect('/Stock');
    }

}