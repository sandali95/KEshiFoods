<div class="content-wrapper" id="wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sales
            <small>View</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Sales</li>
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

    <div class="box"  >
        <div class="box-header">
            <h3 class="box-title">View Bills</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="billList">

        </div>
        <div class="box-body" id="view">

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

                            <?php } ?>


                        </table>
        <!-- /.box-body -->
                    </div>
                  </div>
                </div>
        </div>
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
          url : "<?php echo base_url()?>index.php/View_bills/autocomplete_name",
          method : "POST",
          data :{name :name},
          success : function(data){
              $('#view').hide();
              $('#billList').html(data);
          },
        });
      }
    });
  });
</script>
