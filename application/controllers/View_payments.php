<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_payments extends CI_Controller
{
    public function index()
    {
        $this->load->model('Payment_model');
        $payment =$this->Payment_model->get_payment();
        $data =array(
            'payment'=>$payment
        );

        $this->load->view('viewPayments',$data);
    }




}
