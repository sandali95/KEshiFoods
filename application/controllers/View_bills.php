<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_bills extends CI_Controller
{
    public function index()
    {
        $this->load->model('Billview_model');
        $bill =$this->Billview_model->get_bill();
       // var_dump($stock);
        $data =array(
            'bill'=>$bill
        );

        $this->load->view('viewbills',$data);
    }

   public function autocomplete_name()
   {
     $this->load->model('Billview_model');

     $id = $this->input->post('name');
     $result = $this->Billview_model->get_nameSuggestions($id);

     if(count($result)>0){
       $data =array(
           'bill'=>$result
       );
       $string = $this->load->view('Pages/bill_search',($data),'TRUE');

       echo json_encode($string);
     }
   }

   public function autocomplete_date()
   {
     $this->load->model('Billview_model');

     $id = $this->input->post('name');
     $result = $this->Billview_model->get_dateSuggestions($id);

     if(count($result)>0){
       $data =array(
           'bill'=>$result
       );
       $string = $this->load->view('Pages/bill_search',($data),'TRUE');

       echo json_encode($string);
     }
   }


}
