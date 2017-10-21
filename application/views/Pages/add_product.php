<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
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
        <div class="box tbox-default">
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

        <!--Update product-->
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

                <form role="form" method="post"  action="<?php echo base_url(); ?>index.php/product/update">

                <br>
               <div class="row">
                   <div class="form-group col-lg-3">
                       <label for="item_no">Item Description</label>
                   </div>

                   <div class="form-group col-lg-4">
                       <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" id="item_name">
                           <?php foreach ($products as $a){ ?>
                               <option>
                                   <?php echo $a['item_name'] ; ?>
                               </option>
                           <?php } ?>
                       </select>
                   </div>
               </div></br>

                <div class="row" id ="update_form">

                    <div class="form-group col-lg-3">
                        <label for="item_no">Item No</label>
                        <input type="number" name="item_no" class="form-control" placeholder="Enter Item number" disabled>
                    </div>

                    <!-- /.form-group -->
                    <div class="form-group col-lg-4">
                        <label for="item_no">Item Description</label>
                        <input type="number" name="item_no" class="form-control" placeholder="Enter Item Description">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group col-lg-3">
                        <label for="item_price">Item Price</label>
                        <input type="text" name="item_price" class="form-control" placeholder="Enter Price">
                    </div>


                </div>
                <div class="row">
                    <!-- /.form-group -->
                    <div class="col-lg-2" style="float: right">
                        <br>
                        <a href=""><button type="submit button" value='update' class="btn btn-block btn-primary" ><i class="fa  fa-check-circle"> Update Stock Item</i></button></a>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <!--Remove product-->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Remove Products</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form role="form" method="post" id="remove_form" action="<?php echo base_url(); ?>index.php/Product/remove">

                    <br>

                    <div class="row">

                        <div class="form-group col-lg-3">
                            <label for="item_no">Item No</label>
                            <input type="number" name="item_no" class="form-control" placeholder="Enter Item number" disabled>
                        </div>



                        <!-- /.form-group -->
                        <div class="form-group col-lg-4">
                            <label for="item_no">Item Description</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="item_name">
                                <?php foreach ($products as $a){ ?>
                                    <option>
                                        <?php echo $a['item_name'] ; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <!-- /.form-group -->
                        <div class="col-lg-2" style="float: right">
                            <br>
                            <a href=""><button type="submit button" value='remove' class="btn btn-block btn-danger" ><i class="fa fa-times"> Remove Stock Item</i></button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>


</section>
    <!-- jQuery 3 -->
    <script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- script to get values dynamically-->
    <script type="text/javascript">
        $("#item_name").change(function() {
            var itemname = $("#item_name").val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>index.php/Product/add_values/",
                data : {name:itemname},
                success: function(data) {
                    /*console.log('Hello :D');
                    console.log(data.product);*/
                    $("#update_form").html(data);
                },
                error: function (data) {
                    console.log('error');
                }
            });
        });
    </script>