<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Employee Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Gender</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Contact Number</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Address</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Employee Type</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($emp as $a) {?>
                    <tr role="row" >
                        <td><?php echo $a['emp_id']?></td>
                        <td><?php echo $a['emp_name']?></td>
                        <td><?php echo $a['emp_gender']?></td>
                        <td><?php echo $a['emp_contact_num']?></td>
                        <td><?php echo $a['emp_address']?></td>
                        <td><?php echo $a['emp_type']?></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button id="editBtn" class="btn btn-primary btn-xs">
                                <span class="glyphicon glyphicon-pencil"></span></button></p></td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button id="deleteBtn" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>
                <?php } ?>


            </table>
<!-- /.box-body -->
        </div>
</div>
</div>
