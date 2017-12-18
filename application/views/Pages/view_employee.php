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

    <!-- live seach box -->
    <div class="container">
      <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div id="imaginary_container">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control"  placeholder="Search" id="search" >
                        <span class="input-group-addon">
                            <button type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
      </div>
    </div>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Employees</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="empList">
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
                                    <td id="id"><?php echo $a['emp_id']?></td>
                                    <td id="name"><?php echo $a['emp_name']?></td>
                                    <td id="gender"><?php echo $a['emp_gender']?></td>
                                    <td id="cnumber"><?php echo $a['emp_contact_num']?></td>
                                    <td id="address"><?php echo $a['emp_address']?></td>
                                    <td id="type"><?php echo $a['emp_type']?></td>
                                    <td><p data-placement="top" data-toggle="modal"title="Edit"><button id="editBtn" class="btn btn-primary btn-xs">
                                            <span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button id="deleteBtn" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                            <?php } ?>


                        </table>
        <!-- /.box-body -->
                    </div>
              </div>
            </div>
          </div>
    </div>

    <!-- Modal for update-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Employee</h4>
      </div>
      <div class="modal-body">
        <form role="form" method="post" action="<?php echo base_url(); ?>index.php/Admin/emp_register">
        <div class="row">
            <div class="form-group col-lg-10">
                <label>Employee ID</label>
                <input type="text" id="eid_update" class="form-control" placeholder="Employee ID">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-10">
                <label>Employee Name</label>
                <input type="text" id="name_update" class="form-control" placeholder="Employee Name">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-4">
                <label for="gender">Gender</label>
                <input type="text" id="gender_update" class="form-control" placeholder="Male/Female">
            </div>

            <div class="form-group col-lg-8">
                <label for="Employee Type">Employee Type</label>
                <input type="text" id="etype_update" class="form-control" placeholder="Employee Type">
            </div>

        </div>

        <div class="row">
            <div class="form-group col-lg-10">
                <label for="Contact Number">Contact Number</label>
                <input type="text" id="cnumber_update" class="form-control" placeholder="Contact Number">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-10">
                <label for="Address">Address</label>
                <input type="text" id="address_update" class="form-control" placeholder="Address">
            </div>
        </div>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="updateEmp">Upadte</button>
        </div>
      </div>

    </div>
  </div>

<!-- modal for delete -->
  <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Update Employee</h4>
      </div>
      <div class="modal-body">
        <p>Do you want to delete this employee ? &hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="deleteEmp">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div>

</div>




<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>



<!-- script to autocomplete in the seach bar -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#search').keyup(function(){
      var name = $(this).val();
      console.log(name);
      if(name != "" ){
        $.ajax({
          url : "<?php echo base_url()?>index.php/Admin/autocomplete_name",
          method : "POST",
          data :{name :name},
          success : function(data){
              $('#example2_wrapper').hide();
              $('#empList').html(data);
          },
        });
      }
    });
  });
</script>

<!-- script to load modals -->
<script type="text/javascript">

$(document).ready(function(){
      $("#editBtn").click(function(){
          indexNo = $('#id').text();
          Name = $('#name').text();
          gender = $('#gender').text();
          type = $('#type').text();
          telephoneNumber = $('#cnumber').text();
          address = $('#address').text();

          $("#myModal").modal();

          $('#eid_update').val(indexNo);
          $('#name_update').val(Name);
          $('#gender_update').val(gender);
          $('#cnumber_update').val(telephoneNumber);
          $('#address_update').val(address);
          $('#etype_update').val(type);



      });
  });

  $(document).ready(function(){
    $('#updateEmp').click(function(){
      $.ajax({
        url : "<?php echo base_url()?>index.php/Admin/update_employee",
        method : "POST",
        data :{name :$('#name_update').val(),
               eid :$('#eid_update').val(),
               gender:$('#gender_update').val(),
               etype: $('#etype_update').val(),
               address:$('#address_update').val(),
               cnumber :$('#cnumber_update').val()
        },
        success : function(){
          $('#name_update').val("");
          $('#eid_update').val("");
          $('#gender_update').val("");
          $('#etype_update').val("");
          $('#address_update').val("");
          $('#cnumber_update').val("");
        }

      });
      console.log(data);
    });
  });

  $(document).ready(function(){
      $("#deleteBtn").click(function(){
          $("#deleteModal").modal();

      });
  });

  $(document).ready(function(){
      $("#deleteEmp").click(function(){
          eid = $('#id').text();
          console.log("delete");
          $.ajax({
            url : "<?php echo base_url()?>index.php/Admin/delete_employee",
            method : "POST",
            data :{eid :eid},
          });

      });
  });

</script>
