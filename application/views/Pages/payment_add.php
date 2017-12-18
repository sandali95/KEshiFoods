<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Payment
            <small></small>
        </h1>
       <!--  <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Stocks</li>
        </ol> -->
    </section>

   <!--h4><?php echo $message; ?></h4> 
   //if ($this->session->flashdata('message')) {
    //echo "<h3>".$this->session->flashdata('message')."</h3>";
  # code...
    //}-->
                    
 <!-- Main content -->
    <section class="content">

        <!-- Add Products -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Add Payment Details</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
<!-- 
            <?php if (isset($error_message)){ ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i></h4>Invalid filed inputs

                </div>
            <?php } ?> -->
           <div align="center">
            <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>','</div>'); ?>
               <?php if ($this->session->flashdata('suc')) {
                //echo "<div class='alert alert-success'>successfully added</div>";
                echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-check'></i>Successfully Added</h4>
              </div>";
                } 
                ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/Payment/Payment_add">
                <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="item_no">Employee Id</label>
                            <input type="number" name="eid" class="form-control" placeholder="Enter EID" required>
                        </div>


                         <div class="form-group col-lg-3">
                            <label for="item_price">Month</label>
                            <input type="text" name="month" class="form-control" placeholder="Enter Month" required>
                        </div>
                        <!-- /.form-group -->
                       
                        <!-- /.form-group -->

                            <div class="form-group col-lg-3">
                            <label for="item_price">Date </label>
                            <input type="Date" name="date" class="form-control" placeholder="Enter date " required>
                        </div>
                     
                        <div class="form-group col-lg-3">
                            <label for="item_price">Pay Amount</label>
                            <input type="number" name="amount" class="form-control" placeholder="Enter Amount" required>
                        </div>

                       
               
                </div>

                <div class="row">
                    <!-- /.form-group -->
                    <div class="col-lg-2" style="float: right">
                        <br>
                        <button type="submit button" class="btn btn-block btn-success"><i class="fa fa-plus-square"> Add Payment</i></button>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <!--Update product-->

        <!--Remove product-->
       
</section>