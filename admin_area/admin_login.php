<?php


include('../includes/connect.php');
include('../functions/common_function.php');
// @session_start();





?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    <!-- bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--style.css -->
    <link rel="stylesheet" href= "../style.css">

<style>



</style>


    
</head>
<body>

<div class="conatiner-fluid m-3">
  <h3 class="text-center mb-5">Admin Login</h3>
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-6 col-xl-5">
      <img src="../images/admin2.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-lg-6 col-xl-5">
      <form action="" method="post">
      <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "username" class ="form-label">Username</label>
            <input class="form-control form-control-sm" type="text"name ="admin_username" placeholder="Enter User Name" id="admin_username" autocomplete="off" required="required">
        </div>
        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "password" class ="form-label">Password</label>
            <input class="form-control form-control-sm" type="password"name ="admin_password" placeholder="Enter Your Password" id="admin_password" autocomplete="off" required="required">
        </div>
        <div class="form-outline mb-4 w-50 mx-auto">
         <button type="submit" class="btn btn-warning px-3 mb-3 border-0" name="login" value="login">Login</button>
         <p class="samll fw-bold mt-2 pt-1 mb-0 text-dark"> Don't you have an account? <a href="admin_registration.php" class="link-warning text-dark">Register</a>
        </div>
      </form>
      
    </div>
  </div>

</div>

 



<!-- bootsrap js link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


   
</body>




</html>


<?php


if(isset($_POST['login'])){
    $admin_username = $_POST['admin_username'];
    $admin_password= $_POST['admin_password'];

    $select_query =  "Select * from `admin_table` where admin_username='$admin_username'";
    $result = mysqli_query($con,$select_query);
    $row_count= mysqli_num_rows( $result);
    $row_data=mysqli_fetch_assoc( $result);
   

    if($row_count>0){
        $_SESSION['username'] =  $admin_username;
        

        if(password_verify($admin_password,$row_data['admin_password'])){

           if($row_count==1){
            $_SESSION['username'] =  $admin_username;
            echo "<script>alert('Login Sucessful')</script>";
            echo "<script>window.open('index.php','_self')</script>";
           }else{



            echo "<script>alert('wrong password')</script>";

            





           }

        }

    }else{

        echo "<script>alert('Invalid Credentials')</script>";



    }

}

