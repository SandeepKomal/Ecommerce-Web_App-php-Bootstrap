<?php


include('../includes/connect.php');
include('../functions/common_function.php');
// @session_start();
// $_SESSION['admin_username'] = $admin_username;
// echo $admin_username ;



// $get_image = "Select * from `admin_table` where admin_username='$admin_username'";
// $result=mysqli_query($con,$get_image);
// $row=mysqli_fetch_assoc($result);
// $admin_image=$row['admin_image'];
// $admin_image1 ='./product_images/'.trim($admin_image);
// echo $admin_image1;







?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>

    <!-- bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--style.css -->
    <link rel="stylesheet" href= "../style.css">

<style>
.admin1_image{
  width:200px;
  height:100px;
  object-fit: contain;
}




</style>


    
</head>
<body>
     <!-- bootsrap js link -->
     <div class="container-fluid p-0">
        <!-- first child-->

     <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
       <img src="../images/log.png" alt="" class="logo">
       
       <nav class="navbar navbar-expand-lg " data-bs-theme="dark">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link p-3" href="#">Welcome </a>
        </li>
        <li class="nav-item">
                <!-- Home button with left arrow and spacing -->
                <a href="index.php" class="btn btn-warning p-3 mr-3">
                 Home
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_logout.php" class="btn btn-warning p-3">Logout</a>
            </li>
       </ul>

       </nav>
      </div>
     </nav>

     <!-- third child-->
      <div class ="row">
        <div class ="col-md-12 bg-light p-2 d-flex align-items-center "> 
            <div class="p-5" >
              <a href="#"><img src="../users_area/user_images/admin.png" alt='' class="admin1_image"></a>
              <p class="text-dark text-center">Admin</p>
            </div>
            <div class="button text-center p-4 mb-2">
                <!-- <button><a href="" class="nav-link text-light bg-dark my-2">Insert Products</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-2">View Products</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-2">Insert Categories</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1">View Categories</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1">View Brands</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1">All Orders</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1">All Payments</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1">List Users</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1">Log Out</a></button> -->
                <a href="insert_product.php" class="btn btn-dark my-2 p-3">Insert Products</a>
<a href="view_products.php" class="btn btn-dark my-2 p-3">View Products</a>
<a href="index.php?insert_category" class="btn btn-dark my-2 p-3">Insert Categories</a>
<a href="view_categories.php" class="btn btn-dark my-2 p-3">View Categories</a>
<a href="index.php?insert_brand" class="btn btn-dark my-2 p-3">Insert Brands</a>
<a href="view_brands.php" class="btn btn-dark my-2 p-3">View Brands</a>
<a href="all_orders.php" class="btn btn-dark my-2 p-3">All Orders</a>
<a href="all_payments.php" class="btn btn-dark my-2 p-3">All Payments</a>
<a href="list_users.php" class="btn btn-dark my-2 p-3">List Users</a>
<!-- <a href="logout.php" class="btn btn-dark my-2 p-3">Logout</a> -->


            </div>

        </div>
       
      </div>

      <!-- last child-->
      <div class ="container my-3">
        <?php
        
        if(isset($_GET["insert_category"])){
            include('insert_categories.php');

        }
        if(isset($_GET["insert_brand"])){
          include('insert_brands.php');

        }
        ?>
      </div>



      <!-- last child-->
 <!-- <div class="bg-dark p-3 text-center footer">
  <p style="color: white;"> Copyright © 2023. tektrio.in | All Rights Reserved. </p>
</div> -->

<?php

// include('../includes/footer.php');





?>





    </div> 
    
    

<!-- bootsrap js link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>



</html>