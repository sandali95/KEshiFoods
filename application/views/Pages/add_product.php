<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Stock
            <small>Products</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Stocks</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Add Products -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Add Products</h3>

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
                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/product/add_newProduct">
                <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="item_no">Item No</label>
                            <input type="number" name="item_no" class="form-control" placeholder="Enter Item number">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group col-lg-4">
                            <label for="item_no">Item Description</label>
                            <input type="text" name="item_name"  class="form-control" placeholder="Enter Stock Item name">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group col-lg-3">
                            <label for="item_price">Item Price</label>
                            <input type="number" name="item_price" class="form-control" placeholder="Enter Stock Item price">
                        </div>
                </div>
                <div class="row">
                    <!-- /.form-group -->
                    <div class="col-lg-2" style="float: right">
                        <br>
                        <button type="submit button" class="btn btn-block btn-success"><i class="fa fa-plus-square"> Add Stock Item</i></button>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <!--Remove/Update product-->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Update Products</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/product/set_product">
                <div class="row">
                    <div class="form-group col-sm-4">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat" ><i class="fa fa-search"></i></button>
                    </div>


                </div>
                <br>

                <div class="row">

                    <div class="form-group col-lg-3">
                        <label for="item_no">Item No</label>
                        <input type="number" name="item_no" class="form-control" placeholder="Enter Item number" disabled>
                    </div>



                    <!-- /.form-group -->
                    <div class="form-group col-lg-4">
                        <label for="item_no">Item Description</label>
                        <input type="text" name="item_name" class="form-control" placeholder="Enter Stock Item name">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group col-lg-2">
                        <label for="item_price">Item Price</label>
                        <input type="text" name="item_price" class="form-control" placeholder="Enter Price">
                    </div>


                </div>
                <div class="row">
                    <!-- /.form-group -->
                    <div class="col-lg-2" style="float: right">
                        <br>
                        <a href=""><button type="submit button" value="remove" class="btn btn-block btn-danger"><i class="fa fa-minus-square"> Remove Stock Item</i></button></a>
                    </div>
                    <!-- /.form-group -->
                    <div class="col-lg-2" style="float: right">
                        <br>
                        <a href=""><button type="submit button" value="update" class="btn btn-block btn-primary" ><i class="fa  fa-check-circle"> Update Stock Item</i></button></a>
                    </div>
                </div>
                </form>
            </div>
        </div>


</section>