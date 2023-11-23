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
    <title>Admin Dashboard- edit Categories</title>

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


     <?php

     if(isset($_GET['edit_categories'])){
        $edit_category= $_GET['edit_categories'];
        // echo  $edit_category;
        $select_category ="SELECT * FROM `categories` where category_id= $edit_category";
        $result_category=mysqli_query($con,  $select_category);
        $row_category=mysqli_fetch_assoc($result_category);
        $categories =  $row_category['category_title'];
        // echo  $categories ;
     }


     
     if(isset($_POST['update_category'])){
        $cat_title = $_POST['category_title'];
        $update_cat = "update `categories` set category_title='$cat_title' where category_id=$edit_category";
        $result_cat=mysqli_query($con,$update_cat);
        if($result_cat){
    
            echo "<script>alert('Sucessfully Updated Category')</script>";
            echo "<script>window.open('./view_categories.php','_self')</script>";
            
    
        }


     }






    ?>




     <div class="container mt-3">
    <h3 class="text-center">Edit Category</h3>
    <form action="" method="post">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="category_title" class="form-label">Product Category</label>
            <input type="text" name="category_title" id="category_title" class="form-control" required="required" value="<?php echo  $categories ?>">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            
            <input type="submit" name="update_category"  class="btn btn-warning px-3 mb-3" style="margin-top: 20px;" value="update category">
        </div>

        
    </form>
</div>



<!-- bootsrap js link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 

</body>




</html>