<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Employee
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Employee</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Add stock form
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Add Employee</b></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>

            <?php if (isset($error_message)){?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i></h4>Invalid filed inputs

                </div>
            <?php } ?>
         -->

            <!-- <?php if (isset($error_msg)){?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i></h4>Invalid filed inputs

                </div>
            <?php } ?> -->


            <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/emp_register">

                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/Admin/emp_register">

                <div class="row">

                    
                    <div class="form-group col-lg-4">
                        <label for="Name">Name</label>  
                        <input type="text" name="Name" class="form-control" placeholder="Employee Name">
                    </div>
                   
                </div>

                <div class="row">
                    <!-- /.form-group -->
                    <div class="form-group col-lg-4">
                        <label for="Gender">Gender</label>
                        <input type="text" name="gender" class="form-control" placeholder="Gender">
                    </div>
                </div>
                <div class="row">
                    <!-- /.form-group -->
                    <div class="form-group col-lg-4">
                        <label>Contact Number :</label>
                        <input type="text" name="cnumber" class="form-control" placeholder="Contact Number">
                    </div>
                </div>
                <div class="row">
                     <div class="form-group col-lg-4">
                        <label>Address :</label>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                </div>
                <div class="row">
                     <div class="form-group col-lg-4">
                        <label>Employee Type :</label>
                        <input type="text" name="etype" class="form-control" placeholder="Employee Type">
                    </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="Operation">Operation</label>
                        <a href="#">Update</a> 
                        <a href="#">Delete</a>


                    </div>
                </div>
                    <div class="col-lg-2" style="float: right">
                        <br>
                        <a href=""><button type="submit button" class="btn btn-block btn-success"><i class="fa fa-plus-square"> Register</i></button></a>
                    </div>

                </div>
                </form>
            </div>
        </div>

         
        </div>
        <!-- /box -->
    </section>
</div>