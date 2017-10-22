<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Employee
            <small>View</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Employee</li>
        </ol>
    </section>
    <br>


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Employee Details</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Employee Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Gender</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Contact Number</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Address</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Emploee Type</th></tr>
                            </thead>
                            <tbody>
                            <?php foreach ($emp as $a) {?>
                                <tr role="row" >
                                    <td class="sorting_1"><?php echo $a['Eid']?></td>
                                    <td><?php echo $a['Name']?></td>
                                    <td><?php echo $a['Gender']?></td>
                                    <td><?php echo $a['Contact_Number']?></td>
                                    <td><?php echo $a['Address']?></td>
                                    <td><?php echo $a['etype']?></td>
                                    <!--<td> <a href="<?php echo base_url();?>index.php/View_stocks/view_item/<?php echo $a['stock_id']?>/<?php echo $a['stock_name']?>"><i class="fa fa-info-circle"></i></a></td>-->
                                </tr>
                            <?php } ?>


                        </table>
        <!-- /.box-body -->
                    </div>
    </div>
    </div>
        </div>
    </div>
</div>