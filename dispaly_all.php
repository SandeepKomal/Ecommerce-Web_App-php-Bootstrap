<?php


include('includes/connect.php');
include('functions/common_function.php');

session_start();




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecomm Demo - All Products</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

    <!-- bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--style.css -->
    <link rel="stylesheet" href= "style.css">

    <style>
      
.logo{
    width:5%;
    height:5%;
}

.nav-link {
  /* Your existing styles for .nav-link */
}

.nav-link i.fa {
  margin-right: 5px;
  /* Your existing styles for the icon */
}

.nav-link span {
  margin-left: 10px; /* Adjust the spacing as needed */
}

.card {
    width: 100%;
    max-width: 300px; /* Adjust this value to your desired card width */
    height: auto; /* Allow the card height to adjust based on content */
  }

  .card img {
    width: 100%;
    height: 300px;
    object-fit: contain;
  }


</style>


    
</head>
<body>
      <!-- navbar-->  
      <div class="container-fluid p-0" > 
          <!-- first child-->   
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <img src="./images/log.png" alt="" class="logo"> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dispaly_all.php">Products</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
        <?php
         if(isset($_SESSION['username'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users_area/profile.php'>My Account</a>
        </li>";
         }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users_area/user_registration.php'>Register</a>
        </li>";
          
         }

        ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Total Price(<?php total_cart_price();  ?>)INR</a>
        </li>



      </ul>
      <form class="d-flex" role="search" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search" name="search_data">
        <!-- <button class="btn btn-outline-warning" type="submit">Search</button> -->
        <button type="submit" class="btn btn-outline-warning  " name="search_data_product" value="Search">Search</button>
      </form>
    </div>
  </div>
</nav>


<?php

cart();


?>


 <!-- Second child-->
 <nav class="navbar navbar-expand-lg bg-light " data-bs-theme="light">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
       
        <?php
        if(!isset($_SESSION['username'])){
          echo "  
          <li class='nav-item'>
            <a class='nav-link' href='#'><i class='fa fa-user' aria-hidden='true'></i>Welcome Guest</a>
          </li>";
         
         
         
         }else{
         
          echo "<li class='nav-item'>
          <a class='nav-link' href='#'><i class='fa fa-user' aria-hidden='true'></i>Howdy ".$_SESSION['username']."</a>
        </li> ";
         
          
         
         
         }

if(!isset($_SESSION['username'])){
 echo "  <li class='nav-item'>
 <a class='nav-link' href='./users_area/user_login.php'><i class='fa fa-sign-in'></i>Login</a>
 </li>";



}else{

 echo "  <li class='nav-item'>
 <a class='nav-link' href='./users_area/user_logout.php'><i class='fa fa-sign-in'></i></i>Logout</a>
 </li>";

 


}


  ?>



      </ul>
    </div>
  </div>
</nav>
 <!-- Third child-->

 <!-- <div class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image:url(images/6.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center"> -->
	          		<!-- <h2>Best Place to Travel</h2> -->
		            <!-- <h1 class="mb-3">SHOP NOW</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center"> -->
	          		<!-- <h2>Best Place to Travel</h2> -->
		            <!-- <h1 class="mb-3">SHOP NOW</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center"> -->
	          		<!-- <h2>Best Place to Travel</h2> -->
		            <!-- <h1 class="mb-3">SHOP NOW</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </div> -->
  <div class=" bg-white mt-4-bg-white" >

   <h3 class="text-center" >All Products </h3>
   <!-- <p class="text-center" > Communication is at the heart of e-commerce and community </p> -->
      
  </div>

 <!-- fourth child-->
 <div class= "row px-1  mt-4">

  <div class ="col-md-10">
 
    <!-- products-->
   <div class="row">
    <!--fetching products-->
    <?php
   ///calling functin from common_function.php
   getting_all_products();
    get_unique_categories();
     get_unique_brands();

    // $select_query = "Select * from `products`order by rand() LIMIT 0,15";
    // $result_query=mysqli_query($con,$select_query);

    // while($row = mysqli_fetch_assoc($result_query)){
    //   $product_id = $row['product_id'];
    //   $product_title=$row['product_title'];
    //   $product_description=$row['product_description'];
    //   // $product_keywords=['product_keywords'];
      
    //   // $product_image2 =$row['product_image2'];
    //   // $product_image3 =$row['product_image3'];
    //   $product_price =$row['price'];
    //   $category_id=$row['category_id'];
    //   $brand_id=$row['brand_id'];
    //   $product_image1 ='/ecommerce/admin_area/product_images/'.trim($row['product_image1']);

    //   echo " <div class ='col-md-4 mb-2'>

    //   <div class='card'>
  
    //   <img src='$product_image1'/>
  
    //   <div class='card-body'>
  
    //   <h5 class='card-title'>$product_title</h5>
  
    //   <p class='card-text'>$product_description</p>
  
    //   <p class='card-text'>$product_price</p>
  
    //   <a href='#'  class='btn btn-warning'>Add to cart</a>
  
    //   <a href='#'  class='btn btn-dark'>View More</a>
  
    //   </div>
  
    //   </div>
  
    //   </div>";

      
    // }
    







    ?>
<!--  -->
     
<!-- row end-->
</div>
<!-- col end-->
</div>
 
  
  
  <div class ="col-md-2 bg-light p-0">
    <!-- Brands to Display-->
    <ul class ="navbar-nav me-auto text-center">
      <li class="nav-item bg-dark">
       <a class="nav-link" href="#" style="color: white;"><h4>Popular Brands</h4></a>
      </li>
      <?php
      //// calling brands function //////
      get_brands();

      // $select_brands="Select * from `brands`";
      // $result_brands =mysqli_query($con,$select_brands);
      // // $row_data = mysqli_fetch_assoc($result_brands);
      // // echo $row_data['brand_title'];
      // // echo $row_data['brand_title'];
      // while ($row_data = mysqli_fetch_assoc($result_brands)){
      //   $brand_title =$row_data['brand_title']; 
      //   $brand_id =$row_data['brand_id'];
      //   echo "<li class='nav-item '>
      //   <a class='nav-link' href='index.php?brand=$brand_id' >$brand_title</a> </li>";
      // }

      
      
      ?>
      <!-- <li class="nav-item ">
       <a class="nav-link" href="#" >Brand1</a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="#" >Brand2</a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="#" >Brand3</a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="#" >Brand4</a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="#" >Brand5</a>
      </li> -->


    </ul>

    <!-- Categories to Display-->
    <ul class ="navbar-nav me-auto text-center">
      <li class="nav-item bg-warning">
       <a class="nav-link" href="#" ><h4>Categories</h4></a>
      </li>
      <?php

   ///////// calling categories function //////
   get_categories();

// $select_categories="Select * from `categories`";
// $result_categories =mysqli_query($con,$select_categories);
// // $row_data = mysqli_fetch_assoc($result_brands);
// // echo $row_data['brand_title'];
// // echo $row_data['brand_title'];
// while ($row_data = mysqli_fetch_assoc($result_categories)){
//   $category_title =$row_data['category_title']; 
//   $category_id =$row_data['category_id'];
//   echo "<li class='nav-item '>
//   <a class='nav-link' href='index.php?category=$category_id' >$category_title</a> </li>";
// }



?>

      
      


    </ul>
    
  </div>
 <!-- side nav-->
 


  

 </div>
 
   
 
    



 <!-- last child-->
 <div class="bg-dark p-3 text-center">
  <p style="color: white;"> Copyright © 2023. tektrio.in | All Rights Reserved. </p>
</div>



 


 
 
    
     
   

 







 <!-- bootsrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

 
</body>

</html>