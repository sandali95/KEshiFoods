<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill_model extends CI_Controller {

    public function Insert_data()
    {
        $data=  array(

        'bill_no'=> $this->input->post('bill_no',TRUE),
        'date'=> $this->input->post('date'),
        'customer_name'=> $this->input->post('cname',TRUE),
        'total_val'=> $this->input->post('tvalue',TRUE)
        





         );

        return $this->db->insert( 'bill',$data);
            //$this->load->view('login1');

    }

    public function fetch_data()
    {
      $query= $this->db->get('bill');
      return $query->result_array();

    }

}



class Billview_model extends CI_Controller {

    public function add_stockItem($data,$bill)
    {  //update the stock quantity
        $this->db->insert('purchase',$data);
        $this->db->update('stock', $stock, array('stock_id' =>$data['stock_id']));

    }

    public function remove_stockItem($data)
    { //update(remove) the stock quantity
        $this->db->update('stock', $data, array('stock_id' =>$data['stock_id']));
    }

    public function get_quantity($id)
    { //get the current quantity of item by id
       $result = $this->db->get_where('stock',array('stock_id'=>$id));
        if($result->num_rows()>0)
        {
            return $result->result_array();
        }

    }

    public function get_billNo($item_name)
    { //get the item no when item name is given
        $result = $this->db->get_where('bill',array('stock_name'=>$item_name));
        if($result->num_rows()>0)
        {
            $no=$result->result_array();
            return $no[0]['bill_no'];
        }
    }

    public function current_stock()
    {//get the current stock items to show in the dropdown
        $accounts=array();
        $this->db->select('stock_name');
        $result = $this->db->get('stock');
        $items =$result->result();
        if ($result -> num_rows() >0)
        {
            foreach ($items as $row)
            {
                $acc = $row->stock_name;
                array_push($accounts, $acc);
            }
        }
        return $accounts;
    }

    public function get_billRecords()
    {
        $query =$this->db->get('stock');
        return $query->result_array();
    }


    public function get_purchaseRecords($id)
    {
        $query =$this->db->get_where('purchase',array('stock_id'=>$id));
        return $query->result_array();
    }


}

