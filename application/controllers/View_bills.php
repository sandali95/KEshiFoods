<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_bills extends CI_Controller
{
    public function index()
    {
        $this->load->model('Billview_model');
        $bill =$this->Billview_model->get_bill();
        $data =array(
            'bill'=>$bill
        );

        $this->load->view('viewbills',$data);
    }

   


}

