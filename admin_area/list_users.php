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
    <title>Admin Dashboard- All Users</title>

    <!-- bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--style.css -->
    <link rel="stylesheet" href= "../style.css">

<style>
.user_img{
  width:80px;
  height:80px;
  object-fit: contain;
}


</style>


    
</head>
<body>

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





     <div class ="bg-white">
        <h3 class="text-center p-2">All Users</h3>
        <table class="table table-bordered mt-5 text-center bg-light">
            <thead class="bg-light">
                <?php
                $get_user = "Select * from `user_table`";
                $result_user=mysqli_query($con,$get_user);
                $row_user=mysqli_num_rows($result_user);
               
            if($row_user==0){
                echo "<h3 class='text-center mt-5 bg-warning'>No Users Available</h3>";
            }else{
                echo " <tr class='text-center'>
                <th>Sl No</th>
                <th>User ID</th>
                <th>Username</th>
                <th>User email</th>
                <th>User address</th>
                <th>user mobile</th>
                <th>Delete</th>
               </tr>
            </thead>
            <tbody class='bg-light text-dark text-center'>";
                $number=0;
                while($row_data=mysqli_fetch_assoc($result_user)){
                    $user_id=$row_data['user_id'];
                    $username=$row_data['username'];
                    $username=$row_data['username'];
                    $user_image=$row_data['user_image'];
                    // echo $user_image;
                    $user_image1 ='../users_area/user_images/'.trim($user_image);
                    // echo $user_image1;
                    $user_email=$row_data['user_email'];
                    $user_address=$row_data['user_address'];
                    $user_mobile=$row_data['user_mobile'];
                    $number++;
                    echo "<tr>
                <td>$number</td>
                <td><img src='$user_image1' class='user_img'></td>
                <td>$username</td>
                <td>$user_email</td>
                <td>$user_address</td>
                <td>$user_mobile</td>
                <td><a href='delete_users.php?delete_users=$user_id 'class='text-dark'><i class='fa-regular fa-trash-can' style='color: #f00000;'></i></td>
            </tr>
           ";

                }

                
                

            }






                ?>
              
                
              
           
        </tbody>
        </table>
     </div>


<!-- bootsrap js link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>




</html>