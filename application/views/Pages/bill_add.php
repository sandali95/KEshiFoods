<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sales
            <small>Management</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Stocks</li>
        </ol>
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
                <h3 class="box-title">Add Bill Details</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>

            <?php if (isset($error_message)){ ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i></h4>Invalid filed inputs

                </div>
            <?php } ?>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/Bill/Bill_add">
                <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="item_no">Bill No</label>
                            <input type="number" name="bill_no" class="form-control" placeholder="Enter Bill No">
                        </div>


                         <div class="form-group col-lg-3">
                            <label for="item_price">Date</label>
                            <input type="Date" name="date" class="form-control" placeholder="Enter Date">
                        </div>
                        <!-- /.form-group -->
                       
                        <!-- /.form-group -->

                            <div class="form-group col-lg-3">
                            <label for="item_price">Customer Name</label>
                            <input type="text" name="cname" class="form-control" placeholder="Enter Customer Name">
                        </div>
                     
                        <div class="form-group col-lg-3">
                            <label for="item_price">Total Value</label>
                            <input type="number" name="tvalue" class="form-control" placeholder="Enter Total Value">
                        </div>

                       
               
                </div>

                <div class="row">
                    <!-- /.form-group -->
                    <div class="col-lg-2" style="float: right">
                        <br>
                        <button type="submit button" class="btn btn-block btn-success"><i class="fa fa-plus-square"> Add Bill</i></button>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <!--Update product-->

        <!--Remove product-->
       
</section>