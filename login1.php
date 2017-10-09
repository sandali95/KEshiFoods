<?php include 'partials/header.php'  ?>


<div class="container">


<h2>Add bill</h2>


<hr>
<?php echo validation_errors(); ?>

<?php echo form_open('Addbill/Billadd');?>


  <div class="form-group">
    <label for="exampleInputEmail1">Bill no</label>
    <input type="text" class="form-control" id="exampleInputBill" placeholder="bill" name="bill">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cashier id</label>
    <input type="text" class="form-control" id="exampleInputCid" placeholder="Cashier ID" name="cash">
  </div>
  
    <div class="form-group">
    <label for="exampleInputEmail1">Items</label>
    <input type="text" class="form-control" id="exampleInputItem" placeholder="Items" name="item">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total Value</label>
    <input type="text" class="form-control" id="exampleInputValue" placeholder="Total Value" name="tvalue">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Customer no</label>
    <input type="text" class="form-control" id="exampleInputCustomer" placeholder="Customer no" name="cusno">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="Date" class="form-control" id="exampleInputDate" placeholder="date" name="date">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>

 <?php echo form_close(); ?>
</div>



<?php include 'partials/footer.php'  ?>