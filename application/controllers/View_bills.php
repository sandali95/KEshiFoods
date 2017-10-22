<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_bills extends CI_Controller
{
    public function index()
    {
        $this->load->model('Bill_model');
        $bill =$this->Bill_model->get_billRecords();
       // var_dump($stock);
        $data =array(
            'bill'=>$bill
        );

        $this->load->view('viewbills',$data);
    }

    public function view_item($id,$name)
    {
        $this->load->model('Bill_model');
        $items = $this->Bill_model->get_purchaseRecords($id);

        $this->load->view('viewStockItem',array('item'=>$items,'name'=>$name));
    }



}

