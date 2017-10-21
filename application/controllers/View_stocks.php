<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_stocks extends CI_Controller
{
    public function index()
    {
        $this->load->model('Stock_model');
        $stock =$this->Stock_model->get_stockRecords();
       // var_dump($stock);
        $data =array(
            'stock'=>$stock
        );

        $this->load->view('viewstocks',$data);
    }

    public function view_item($id,$name)
    {
        $this->load->model('Stock_model');
        $items = $this->Stock_model->get_purchaseRecords($id);

        $this->load->view('viewStockItem',array('item'=>$items,'name'=>$name));
    }



}

