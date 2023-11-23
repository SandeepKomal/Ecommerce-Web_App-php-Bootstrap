<?php


include('../includes/connect.php');
include('../functions/common_function.php');
// @session_start();
// $admin_username=$_SESSION['username'];





?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard- All Categories</title>

    <!-- bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--style.css -->
    <link rel="stylesheet" href= "../style.css">

<style>
.admin_img{
  width:80px;
  height:80px;
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





     <div class ="bg-white">
        <h3 class="text-center p-2">All Categories</h3>
        <table class="table table-bordered mt-5 text-center bg-light">
            <thead class="bg-light">
               <tr  class="text-center">
                <!-- <th>Sno</th> -->
                <th>Category id</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
               </tr>
            </thead>
            <tbody class="bg-light text-dark text-center">
                <?php
                  $get_cat = "Select * from  `categories`";
                  $result_count=mysqli_query($con,$get_cat);
                  $number=0;
                  while($row=mysqli_fetch_assoc($result_count)){
                    $category_id=$row['category_id'];
                    $category_title=$row['category_title'];
                    $number++;
                    ?>
                <tr class="text-center">
                    <!-- <td><?php echo $number++;?> </td> -->
                    <td><?php echo $category_id?></td>
                    <td><?php echo $category_title?></td>
                    <td><a href='edit_categories.php?edit_categories=<?php echo $category_id; ?>' style='color:#1ae04c;'><i class='far fa-edit'></i></td>
                    <td><a href='delete_categories.php?delete_categories=<?php echo $category_id; ?> 'class='text-dark'><i class='fa-regular fa-trash-can' style='color: #f00000;'></i></td>
                </tr>

            <?php
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