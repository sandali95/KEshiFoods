<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Employee
            <small>Manipulate</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Employee</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Add stock form-->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Add Employee</b></h3>

            <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/Admin/emp_register">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label>Employee ID</label>
                        <input type="text" name="eid" class="form-control" placeholder="Employee ID">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label>Employee Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Employee Name">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" class="form-control" placeholder="Male/Female">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="Contact Number">Contact Number</label>
                        <input type="text" name="cnumber" class="form-control" placeholder="Contact Number">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="Address">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="Employee Type">Employee Type</label>
                        <input type="text" name="etype" class="form-control" placeholder="Employee Type">
                    </div>
                </div>
              
                    <!-- /.form-group -->
                    <div class="col-lg-2" style="float: right">
                        <br>
                        <a href=""><button type="submit button" class="btn btn-block btn-success"><i class="fa fa-plus-square"> Register</i></button></a>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </section>
</div>