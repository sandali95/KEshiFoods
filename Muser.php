<?php

/**
* 
*/
class Muser extends CI_Model
{
	
	public function Insert_data()
	{
		$data=  array(

        'billno'=> $this->input->post('bill',TRUE),
        'cashiid'=>$this->input->post('cash',TRUE),
        'items'=> $this->input->post('item'),
        'totalvalue'=> $this->input->post('tvalue',TRUE),
        'customerno'=> $this->input->post('cusno',TRUE),
        'date'=> $this->input->post('date')






		 );

		$this->db->insert( 'bill',$data);
	}
}