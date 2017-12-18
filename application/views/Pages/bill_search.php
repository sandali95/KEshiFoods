<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">bill no</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">date</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Customer_name</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">total_val</th></tr>
                    </thead>
                    <tbody>
                    <?php foreach ($bill as $a) {?>
                        <tr role="row" >
                            <td class="sorting_1"><?php echo $a['bill_no']?></td>
                            <td><?php echo $a['date']?></td>
                            <td><?php echo $a['customer_name']?></td>
                            <td><?php echo $a['total_val']?></td>
s                        </tr>
                    <?php } ?>


                </table>
<!-- /.box-body -->
            </div>
          </div>
        </div>
