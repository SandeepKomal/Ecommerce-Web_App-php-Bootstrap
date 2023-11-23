<?php


include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();







?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecomm-User Registration</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

    <!-- bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--style.css -->
    <link rel="stylesheet" href= "../style.css">
    <style>

.warning-link {
    color: palevioletred;
}


body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Set your desired background color */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Center the form vertically and horizontally */
        }

        .container {
            width: 50%; /* Adjust the width as needed */
        }

        .form-wrapper {
            background-color: #ffffff; /* Add a background color to the form wrapper */
            padding: 80px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }






</style>


</head>

<body>


<div class="container-fluid mx-3 ">
<div>
 <a href="../index.php">
    <button class="btn btn-lg text-center">
        <span>
            <i class="fa fa-arrow-left fa-3x"></i>
        </span>
    </button>
</a>

  </div>


 <div class="form-wrapper">


 <h3 class = "text-center form-header">User Registration </h3>

 <div class="row d-flex align-items-center justify-content-center">
    <div class="col-lg-12 col-xl-6">
        <form action="" method="post" enctype="multipart/form-data">
             <!-- User name field -->

        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "user_username" class ="form-label">User Name</label>
            <input class="form-control form-control-sm" type="text"name ="user_username" placeholder="Enter User Name" id="user_username" autocomplete="off" required="required">
        </div>

            <!-- User Email field -->
        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "user_email" class ="form-label">User Email</label>
            <input class="form-control form-control-sm" type="email"name ="user_email" placeholder="Enter Email" id="user_email" autocomplete="off" required="required">
        </div>

           <!-- User Image -->
         <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "user_image" class ="form-label">User Image</label>
            <input class="form-control form-control-sm" type="file"name ="user_image" placeholder="Upload your image" id="user_image">
        </div>

           <!-- User Password -->
           <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "user_password" class ="form-label">Password</label>
            <input class="form-control form-control-sm" type="password"name ="user_password" placeholder="Enter password" id="user_password" autocomplete="off" required="required">
        </div>


           <!-- User confirm Password -->
           <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "confirm_user_password" class ="form-label">Confirm Password</label>
            <input class="form-control form-control-sm" type="password"name ="confirm_user_password" placeholder="Confirm password" id="confirm_user_password" autocomplete="off" required="required">
        </div>
        

         <!-- User Address -->

         <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "user_address" class ="form-label">User Address</label>
            <input class="form-control form-control-sm" type="text"name ="user_address" placeholder="Enter User Address" id="user_address" autocomplete="off" required="required">
        </div>


        <!-- User contact -->

         <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "user_contact" class ="form-label">User Contact</label>
            <input class="form-control form-control-sm" type="text"name ="user_contact" placeholder="Enter User Contact" id="user_contact" autocomplete="off" required="required">
        </div>


         <!-- Register button-->
         <div class="form-outline mb-4 w-50 mx-auto">
         <button type="submit" class="btn btn-dark px-3 mb-3 border-0" name="user_register" value="Register">Register</button>
         <p class="samll fw-bold mt-2 pt-1 mb-0"> Already have an account ? <a href="user_login.php" class="text-warning">Login</a>
        </div>










        </form>
     </div>

  </div>
 </div>




    
 









</div>





















<!-- bootsrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>



</htmL>




<!-- php code -->

<?php

if(isset($_POST['user_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password= $_POST['user_password'];
    $hash_password =password_hash($user_password,PASSWORD_DEFAULT);
    $confirm_user_password = $_POST['confirm_user_password'];
    $user_address = $_POST['user_address'];
    $user_contact= $_POST['user_contact'];
    $user_image= $_FILES['user_image']['name'];
    $user_image_tmp= $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();



    ///select query

    $select_query = "Select * from `user_table` where username='$user_username' or user_email='$user_email' ";
    
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows( $result);
    if($rows_count>0){

        echo "<script>alert('User Already Exists')</script>";

    }else if($user_password!=$confirm_user_password){


        echo "<script>alert('password doesn't match')</script>";
    
    }else{

        move_uploaded_file($user_image_tmp,"./user_images/$user_image");

        
         ///insert query

        $insert_query = "insert into `user_table` (username,user_email,user_password,user_image	,user_ip,user_address,user_mobile) values ('$user_username',' $user_email','$hash_password',' $user_image',' $user_ip',' $user_address','  $user_contact') ";
        $sql_execute = mysqli_query($con,$insert_query);
        if($sql_execute){
            echo "<script>alert('Sucesfully Registered')</script>";
        }else{
            die(mysqli_error($con));
        }


    }


    //selecting cart items////

    $select_cart_items =  "Select * from `cart_details` where ip_address = '$user_ip'";
    $result_cart = mysqli_query($con, $select_cart_items);
    $rows_cart_count = mysqli_num_rows( $result_cart );
    if($rows_cart_count>0){
        $_SESSION['username'] =  $user_username;
        echo "<script>alert('you have items in your cart')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";



    
    }else{

        echo "<script>window.open('../index.php','_self')</script>";


    }






  



}







?>