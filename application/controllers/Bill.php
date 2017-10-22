<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {

    public function index(){
        $this->load->view('billadd');

        /*$data =array(
            'products'=>$this->Product_model->current_products()
        );
        var_dump($data);*/

    }

        public function Bill_add()
    {

        $this->form_validation->set_rules('bill_no', 'Bill no', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('cname', 'Customer Name ', 'required');
        $this->form_validation->set_rules('tvalue', 'Total Value', 'required');
        

        if ($this->form_validation->run() == FALSE)
                {

                        $data['error_message']='error';
                        $this->load->view('billadd',$data);
                }
                else
                {
                       $this->load->model('Bill_model');
                      $res= $this->Bill_model->Insert_data();
                      $this->load->view('billadd');

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
            $this->load->model('Bill_model');
            $data['data'] = $this->Muser->fetch_data();
            $this->load->view('billadd', $data);
         }


    }
