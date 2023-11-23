<?php


include('../includes/connect.php');
// @session_start();
// $admin_username=$_SESSION['username'];
if(isset($_POST['insert_product'])){
    $product_title =$_POST['product_title'];
    $product_description =$_POST['product_description'];
    $product_keywords =$_POST['product_keywords'];
    $product_category =$_POST['product_category'];
    $product_brand =$_POST['product_brand'];
    $product_price =$_POST['product_price'];
    $product_status='true';
    ///acessing images/////

    $product_image1 =$_FILES['product_image1']['name'];
    $product_image2 =$_FILES['product_image2']['name'];
    $product_image3 =$_FILES['product_image3']['name'];


     ///acessing image temp names/////


    $temp_image1 =$_FILES['product_image1']['tmp_name'];
    $temp_image2 =$_FILES['product_image2']['tmp_name'];
    $temp_image3 =$_FILES['product_image3']['tmp_name'];

    ///checking empty condition/////

    if($product_title=='' or $product_description=='' or $product_keywords =='' or  $product_category =='' or $product_brand =='' or  $product_price ==''or $product_image1==''){


        echo "<script>alert('Please fill all the fields')</script>";
    }else{

        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");


        ///insert query////

        $insert_products = "insert into  `products` (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,	product_image3,price,date,status) values ('$product_title','$product_description','$product_keywords',' $product_category','$product_brand',' $product_image1',' $product_image2',' $product_image3',' $product_price',NOW(),'$product_status')";
        $result_query=mysqli_query($con, $insert_products);
        if ($result_query){

            echo "<script>alert('Sucessfully inserted products')</script>";

        }
         


    }



}

?>





  


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Products-Admin Dashboard</title>

    <!-- bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--style.css -->
    <link rel="stylesheet" href= "../style.css">
    <style>
        /* Custom CSS to style and animate the "Back to Homepage" button */
/* Custom CSS to style the "Back to Homepage" button */



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







<div class="bg-white">
    <div class="container mt-3 form-wrapper">
        <h2 class="text-center form-header">Insert Products</h2>
        <!-- form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title-->
        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "product_title" class ="form-label">Product title</label>
            <input class="form-control form-control-sm" type="text"name ="product_title" placeholder="Enter Product Name" id="product_title" autocomplete="off" required="required">
        </div>
         <!-- description-->
        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "product_description" class ="form-label">Product Description</label>
            <input class="form-control form-control-sm" type="text"name ="product_description" placeholder="Enter Product Description" id="product_description" autocomplete="off" required="required">
        </div>

        <!-- Keywords-->
        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "product_keywords" class ="form-label">Product Keywords</label>
            <input class="form-control form-control-sm" type="text"name ="product_keywords" placeholder="Enter keywords" id="product_keywords" autocomplete="off" required="required">
        </div>

        <!-- Select category-->
        <div class="form-outline mb-4 w-50 mx-auto">
        <select name="product_category"id ="product_category" class="form-select">
  <option value="">Select Category</option>
  <?php

$select_query = "Select * from `categories`";
$result_query = mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
  $category_title = $row['category_title'];
  $category_id = $row['category_id'];
  echo"<option value=' $category_id'>$category_title</option>";
}



?>
 
  <!-- <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option> -->
</select>

</div>

        <!-- Select brand-->
        <div class="form-outline mb-4 w-50 mx-auto">
        <select name="product_brand"id ="product_brand" class="form-select">
  <option selected>Select Brand</option>
  <?php

$select_query = "Select * from `brands`";
$result_query = mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
  $brand_title = $row['brand_title'];
  $brand_id = $row['brand_id'];
  echo"<option value='$brand_id'>$brand_title</option>";
}



?>
 
</select>
        </div>

         <!-- Product Image 1-->
         <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "product_image1" class ="form-label">Product Image1</label>
            <input class="form-control form-control-sm" type="file"name ="product_image1" placeholder="Enter keywords" id="product_image1"required="required">
        </div>

        <!-- Product Image 2-->
        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "product_image2" class ="form-label">Product Image 2</label>
            <input class="form-control form-control-sm" type="file"name ="product_image2" placeholder="Enter keywords" id="product_image2">
        </div>

        <!-- Product Image 1-->
        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "product_image3" class ="form-label">Product Image3</label>
            <input class="form-control form-control-sm" type="file"name ="product_image3" placeholder="Enter keywords" id="product_image3">
        </div>

        <!-- Price-->
        <div class="form-outline mb-4 w-50 mx-auto">
            <label for = "product_price" class ="form-label">Product Price</label>
            <input class="form-control form-control-sm" type="text"name ="product_price" placeholder="Enter Price" id="product_price" autocomplete="off" required="required">
        </div>

        <!-- Submit button-->
        <div class="form-outline mb-4 w-50 mx-auto">
         <button type="submit" class="btn btn-dark px-3 mb-3 border-0" name="insert_product" value="Insert Products">Insert Product</button>
        </div>

        </form>
    </div>
</div>








 


<!-- bootsrap js link -->
<!-- bootsrap js link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
</body>

</html>