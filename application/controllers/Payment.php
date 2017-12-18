<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function index(){
        $this->load->view('addpayment');

        /*$data =array(
            'products'=>$this->Product_model->current_products()
        );
        var_dump($data);*/

    }

        public function Payment_add()
    {

        $this->form_validation->set_rules('eid', 'Employee name', 'required|numeric');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('date', 'Date ', 'required');
        $this->form_validation->set_rules('amount', 'Pay Amount', 'required|numeric');
        
        if($this->form_validation->run() != FALSE){
          $this->load->model('Payment_model');
          $res= $this->Payment_model->Insert_data();
          $this->session->set_flashdata('suc','Successfully added');
          redirect('Payment/index');
         }


   }

     public function viewbill()
         {
            $this->load->model('Payment_model');
            $data['data'] = $this->Muser->fetch_data();
            $this->load->view('addpayment', $data);
         }


    }
