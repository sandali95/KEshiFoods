<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_paymentss extends CI_Controller
{
    public function index()
    {
        $this->load->model('Payment_model');
        $payment =$this->Payment_model->get_bill();
       // var_dump($stock);
        $data =array(
            'payment'=>$payment
        );

        $this->load->view('viewpayments',$data);
    }

   


}

