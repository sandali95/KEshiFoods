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
           <div align="center">
            <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>','</div>'); ?>
               <?php if ($this->session->flashdata('suc')) {
                //echo "<div class='alert alert-success'>successfully added</div>";
                echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-check'></i>Successfully Added</h4>
              </div>";
                } 
                ?>
            </div>
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
                        <input type="text" name="eid" class="form-control" placeholder="Employee ID" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label>Employee Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Employee Name" required>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" class="form-control" placeholder="Male/Female" required>
                    </div>
                </div> -->

                 <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="sel1" name="gender" style="width:32%;">
                        <option>Choose one</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div> 

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="Contact Number">Contact Number</label>
                        <input type="text" name="cnumber" class="form-control" placeholder="Contact Number" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="Address">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="sel1" name="gender" style="width:32%;">
                        <option>Choose one</option>
                        <option>Manager</option>
                        <option>Sales Officer</option>
                        <option>Sales Manager</option>
                    </select>
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