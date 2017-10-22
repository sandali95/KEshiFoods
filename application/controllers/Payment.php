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

        $this->form_validation->set_rules('eid', 'Employee name', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('date', 'Date ', 'required');
        $this->form_validation->set_rules('amount', 'Pay Amount', 'required');
        

        if ($this->form_validation->run() == FALSE)
                {

                        $data['error_message']='error';
                        $this->load->view('addpayment',$data);
                }
                else
                {
                       $this->load->model('Payment_model');
                      $res= $this->Payment_model->Insert_data();
                       $this->load->view('addpayment');

                   /* if($res){
                        $this->session->set_flashdata('message','You are login succcusfully..!');
                        $this->load->view('billadd');
                       }else{
                        $this->session->set_flashdata('message','Error');
                        $this->load->view('billadd');

                       }*/


                     
                   }
               }

         public function viewbill()
         {
            $this->load->model('Payment_model');
            $data['data'] = $this->Muser->fetch_data();
            $this->load->view('addpayment', $data);
         }


    }
