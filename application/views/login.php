<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Keshi Foods TPS | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSS include -->
    <?php include "Imports/styles.php" ?>
</head>

<body style="background-color: #0E2231 ">
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="<?php echo base_url() ?>index2.html"><b>Keshi Foods</b>TPS</a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">Admin</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="<?php echo base_url() ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
            </div>


            <!-- lockscreen credentials (contains the form) -->
            <form class="lockscreen-credentials" method="POST" action="<?php echo base_url(); ?>index.php/Login/login_check">
                <div class="input-group">
                    <input name="username" type="text" class="form-control" placeholder="User Name" autofocus required>
                    <input name="password" type="password" class="form-control" placeholder="password" required>

                    <div class="input-group-btn">
                        <a href=""><button type="submit button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button></a>
                    </div>
                </div>
            </form>
            <!-- /lockscreen credentials -->


        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            Enter your credentials to login
        </div>
            <div align="center">
               <?php if ($this->session->flashdata('err')) {
                echo "<h3 style='color:red'>".$this->session->flashdata('err')."<h3>";
                } 
                ?>
            </div>

    </div>



    <!-- Footer -->

</div>


<!-- JS include -->
<?php include 'Imports/js.php' ?>
</body>
</html>