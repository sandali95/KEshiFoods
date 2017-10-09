<?php

/**
* 
*/
class Addbill extends CI_Controller
{
	
	public function Billadd()
	{

		$this->form_validation->set_rules('bill', 'Bill no', 'required');
		$this->form_validation->set_rules('cash', 'Cashier id', 'required');
		$this->form_validation->set_rules('item', 'Items', 'required');
		$this->form_validation->set_rules('tvalue', 'Total Value', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');

     

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login1');
                }
                else
                {
                       $this->load->model('Muser');
                       $this->Muser->Insert_data();
                }



	}
}