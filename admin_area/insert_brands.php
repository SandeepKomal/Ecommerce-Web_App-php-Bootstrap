<?php

include('../includes/connect.php');
// @session_start();
// $admin_username=$_SESSION['username'];
if(isset($_POST['insert_brand'])){
  $brand_title =$_POST['brand_title'];
  //select data from database
  $select_query ="Select * from `brands` where brand_title = '$brand_title' ";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This Brand is already present in the database')</script>";
  }else{
  $insert_query= "insert into `brands` (brand_title)  values ('$brand_title')";
  $result =mysqli_query($con,$insert_query);
  if($result){
    echo "<script>alert('Brand inserted sucessfully')</script>";
  }


}}

?>



<h3 class="text-center">Insert Brands</h3>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name = "brand_title" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2">

  <!-- <input type="submit" class="form-control" name = "insert_cat" value="Insert Categories" aria-label="Username" aria-describedby="basic-addon1" class=bg-dark> -->
  <button type="submit" class="btn btn-warning p-2 my-3 border-0" name="insert_brand" value="Insert Brands">Insert Brands</button>
</div>

</form>
