<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Stock
            <small>Manipulate</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Employee</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- general form elements disabled -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Add Stock</b></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="">
                    <!-- text input -->
                    <div class="form-group col-lg-4">
                        <label>Item No :</label>
                        <input type="number" name="item_no" class="form-control" placeholder="Enter Stock Item number">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Invoice No :</label>
                        <input type="text" name="invoice_no" class="form-control" placeholder="Enter Stock Invoice number">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Invoice Date :</label>

                        <div class="input-group date" data-provide="datepicker">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                            <input type="text" name="bill_date" class="form-control">

                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Item Quantity :</label>
                        <input type="number" name="qty" class="form-control" placeholder="Enter Quantity"/>
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Total Cost :</label>
                        <input type="number" name="stock_total_cost" class="form-control" placeholder="Enter Cost"/>
                    </div>
                    <div class="col-lg-2" style="float: right">
                        </br>
                        <a href=""><button type="submit button" class="btn btn-block btn-success"><i class="fa fa-plus-square"> Add Stock</i></button></a>
                    </div>
                </form>
            </div>



            <!-- /.box-body -->
        </div>
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
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="">
                    <!-- text input -->
                    <div class="form-group col-lg-4">
                        <label>Item No :</label>
                        <input type="number" name="item_no" class="form-control" placeholder="Enter Stock Item number">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Invoice No :</label>
                        <input type="text" name="invoice_no" class="form-control" placeholder="Enter Stock Invoice number">
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