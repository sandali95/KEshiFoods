<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Stock
            <small>Manipulate</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Stocks</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Add stock form-->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Add Stocks</b></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>

            <?php if (isset($error_message)){?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i></h4>Invalid filed inputs

                </div>
            <?php } ?>
            <!-- /.box-header -->





            <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/stock/add_stock">
                <div class="row">

                    <!--<div class="form-group col-lg-4">
                        <label for="item_no">Item No</label>
                        <input type="number" name="item_no" class="form-control" placeholder="Enter Item number" disabled value="<?php /*echo $item_no*/?>">
                    </div>-->
                    <!-- /.form-group -->
                    <div class="form-group col-lg-4">
                        <label>Item Name</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="item_name">
                            <?php foreach ($stock as $a){ ?>
                                <option>
                                    <?php echo $a ; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group col-lg-4">
                        <label for="item_price">Item Quantity</label>
                        <input type="text" name="item_quantity" class="form-control" placeholder="Enter Quantity">
                    </div>

                </div>

                <div class="row">
                    <!-- /.form-group -->
                    <div class="form-group col-lg-4">
                        <label for="invoice_no">Invoice No</label>
                        <input type="text" name="invoice no" class="form-control" placeholder="Enter stock Invoice number">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group col-lg-4">
                        <label>Invoice Date :</label>
                        <div class="input-group date" data-provide="datepicker">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                            <input type="text" name="invoice_date" class="form-control">

                        </div>

                    </div>
                    <!-- /.form-group -->
                    <div class="col-lg-2" style="float: right">
                        <br>
                        <a href=""><button type="submit button" class="btn btn-block btn-success"><i class="fa fa-plus-square"> Add Stock Item</i></button></a>
                    </div>

                </div>
                </form>
            </div>
        </div>

            <!-- /.box-body -->

        <!-- /.box -->
        <!-- Box -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Remove Stock</b></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>

            <?php if (isset($error_message2)){?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i></h4>Invalid filed inputs

                </div>
            <?php } ?>

            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="<?php echo base_url(); ?>index.php/stock/remove_stock">
                    <!-- input -->
                    <div class="form-group col-lg-4">
                        <label>Item Name</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="item_name">
                            <?php foreach ($stock as $a){ ?>
                                <option>
                                    <?php echo $a ; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Item Quantity :</label>
                        <input type="text" name="item_quantity" class="form-control" placeholder="Enter Quantity">
                    </div>
                    <div class="col-lg-2" style="float: right">
                        </br>
                        <a href=""><button type="submit button" class="btn btn-block btn-success"><i class="fa fa-minus-square"> Remove Stock</i></button></a>
                    </div>
                </form>
            </div>



            <!-- /box-body -->
        </div>
        <!-- /box -->
    </section>
</div>