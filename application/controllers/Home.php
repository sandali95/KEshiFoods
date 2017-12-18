<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
  function __construct()
  {
      parent::__construct();
      $this->load->model('Home_model');
  }

  function Stocks(){

    $stock =$this->Home_model->get_stocks();

    $data=array();
    // echo count($stock);
    // foreach($stock as $row){
    //   $data[]=$row;
    // }
    // echo count($data);
    echo json_encode($stock);
  }

  function monthlySales(){
    $sales = $this->Home_model->get_sales();

    foreach($sales as $row){
      $data[]=$row;
    }

    echo json_encode($data);

  }
}
