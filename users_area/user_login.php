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
    <title>Ecomm-User Login</title>

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

body{
    overflow-x:hidden;
}


        /* body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
        } */

        /* .container {
            width: 80%; 
        } */

        /* .form-wrapper {
            background-color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
 */


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

 <h3 class = "text-center form-header"> User Login </h3>

 <div class="row d-flex align-items-center justify-content-center">
    <div class="col-lg-12 col-xl-6">
        <form action="" method="post" enctype="multipart/form-data">
             <!-- User name field -->

        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "user_username" class ="form-label">User Name</label>
            <input class="form-control form-control-sm" type="text"name ="user_username" placeholder="Enter User Name" id="user_username" autocomplete="off" required="required">
        </div>

          
           <!-- User Password -->
           <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "user_password" class ="form-label">Password</label>
            <input class="form-control form-control-sm" type="password"name ="user_password" placeholder="Enter password" id="user_password" autocomplete="off" required="required">
        </div>


          


         <!-- Register button-->
         <div class="form-outline mb-4 w-50 mx-auto">
         <button type="submit" class="btn btn-dark px-3 mb-3 border-0" name="user_login" value="user_login">Login</button>
         <p class="samll fw-bold mt-2 pt-1 mb-0"> Don't have an account ? <a href="user_registration.php" class="text-warning">Register</a>
         
        </div>










        </form>
     </div>
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

<?php


if(isset($_POST['user_login'])){
    $user_username = $_POST['user_username'];
    $user_password= $_POST['user_password'];

    $select_query =  "Select * from `user_table` where username='$user_username'";
    $result = mysqli_query($con,$select_query);
    $row_count= mysqli_num_rows( $result);
    $row_data=mysqli_fetch_assoc( $result);
    $user_ip = getIPAddress(); 
   

    ///cart item////
    $select_query_cart =  "Select * from `cart_details` where ip_address='$user_ip'";
    $select_cart =mysqli_query($con,$select_query_cart);
    $row_count_cart= mysqli_num_rows($select_cart);
   

    if($row_count>0){
        $_SESSION['username'] =  $user_username;

        if(password_verify($user_password,$row_data['user_password'])){

           if($row_count==1 and  $row_count_cart==0){
            $_SESSION['username'] =  $user_username;
            echo "<script>alert('Login Sucessful')</script>";
            echo "<script>window.open('profile.php','_self')</script>";
           }else{

            $_SESSION['username'] =  $user_username;

            echo "<script>alert('Login Sucessful')</script>";
            echo "<script>window.open('payment.php','_self')</script>";





           }

        }else{

            echo "<script>alert('wrong password')</script>";


        }
       

    }else{

        echo "<script>alert('Invalid Credentials')</script>";



    }

}





?>