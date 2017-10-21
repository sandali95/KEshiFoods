<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Stock
            <small>View</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Stocks</li>
            <li class="active">Item</li>
        </ol>
    </section>
    <br>


    <div class="box">

        <!-- /.box-header -->
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Stock Item No</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Stock Item Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Invoice No</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Purchases data</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Quantity</th></tr>
                            </thead>
                            <tbody>

                            <?php foreach ($item as $a) {?>
                                <tr role="row" >
                                    <td class="sorting_1"><?php echo $a['stock_id']?></td>
                                    <td><?php echo $name?></td>
                                    <td><?php echo $a['invoice_num']?></td>
                                    <td><?php echo $a['invoice_date']?></td>
                                    <td><?php echo $a['item_quantity']?></td>
                            <?php } ?>

                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>