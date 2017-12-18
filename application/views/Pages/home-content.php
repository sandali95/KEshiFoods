<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section>

        <!-- graph of curent stock -->
        <!-- <canvas id="stockchart" width="50" height="50"></canvas> -->
        <div class="col-lg-12">
            <div class="col-lg-12" style="width : 80vw; height : 300px !important">
              <div class="well" style="min-height : 400px; border-radius : 25px; box-shadow : 2px 2px 2px #FAFAFA">
                <canvas id="saleschart" style=""></canvas>
              </div>
            </div>
            </hr>
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">

            </div>
          </div>
        </div>
        <!-- <div class="card card-lg"style="width : 500px; height : 50px !important;">
          <canvas id="saleschart" style=""></canvas>
        </div> -->
        <!-- graph for the monthly sales of each product -->


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- chart.js  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

<!-- script to get the current stock -->
<script type="text/javascript">
  $.ajax({
    url : "<?php echo base_url()?>index.php/Home/stocks",
    type : "POST",
    dataType: "json",
    success : function(data){
      console.log(data);
      var len = data.length;

      var labels =[];
      var amount =[];
      for(var i=0;i<len;i++){
        labels.push(data[i].stock_name);
        amount.push(data[i].tot_quantity);
      }

        var stockCanvas = document.getElementById("stockchart");

        var stockData = {
          label: 'Current Stock (kg)',
          data: amount
        };

        var barChart = new Chart(stockCanvas, {
          type: 'bar',
          data: {
            labels: labels,
            datasets: [stockData]
          },
          options :  {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        max :50
                    }
                }]
            }
          }
        });

    },
    error : function(data){
      console.log("eee");
    }
  });

</script>

<!-- script for the monthly sales of products -->
<script type="text/javascript">
  $.ajax({
    url : "<?php echo base_url()?>index.php/Home/monthlySales",
    type : "POST",
    dataType: "json",
    success : function(data){
      console.log(data);
      var len = data.length;

      var labels =[];
      var amount =[];
      for(var i=0;i<len;i++){
        labels.push(data[i].item_name);
        amount.push(data[i].qty);
      }

        var salesCanvas = document.getElementById("saleschart");

        var salesData = {
          label: 'Monthly Sales',
          data: amount,
          backgroundColor: "#3c8dbcba"
        };

        var lineChart = new Chart(salesCanvas, {
          type: 'line',
          data: {
            labels: labels,
            datasets: [salesData]
          },
          options :  {
            // responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        max :50
                    }
                }]
            }
          }
        });

    },
    error : function(data){
      console.log("eee");
    }
  });


</script>
