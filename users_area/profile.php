<?php


include('../includes/connect.php');
include('../functions/common_function.php');
session_start();




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Howdy!!- <?php echo $_SESSION['username'];?> </title>

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

.profile{

  width:50%;
  margin:auto;
  display:block;
  height:50%;
  object-fit: contain;


}

.edit_profile_image{
  width: 100px;
  height: 100px;
  object-fit: contain;

}      
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


        .code-box {
            background-color: #f5f5f5;
            border: 5px solid #d1d1d1;
            border-radius: 0px;
            padding: 2px;
            margin: 0px 0;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }
        .code {
            font-size: 16px;
            color: #333;
        }
 


</style>


    
</head>
<body>
      <!-- navbar-->  
      <div class="container-fluid p-0" > 
          <!-- first child-->   
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <img src="../images/log.png" alt="" class="logo"> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../dispaly_all.php">Products</a>
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
        <li class="nav-item">
          <a class="nav-link" href="profile.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price(<?php total_cart_price();  ?>)INR</a>
        </li>



      </ul>
      <form class="d-flex" role="search" action="../search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search" name="search_data">
        <!-- <button class="btn btn-outline-warning" type="submit">Search</button> -->
        <button type="submit" class="btn btn-outline-warning  " name="search_data_product" value="Search">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Calling Cart function-->

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
 <div class="row">

 <div class="col-md-2 p-0">
  <ul class="navbar-nav bg-light text-center" style="height:100vh" >
  <li class="nav-item bg-dark">
          <a class="nav-link text-white" href="#"><h4>Your Profile</h4></a>
    </li>
    <?php
    $username= $_SESSION['username'];
    $user_image = "Select * from `user_table` where username='$username'";
    $user_image = mysqli_query($con, $user_image );
    $row_image = mysqli_fetch_array($user_image );
    $user_image = $row_image['user_image'];
    $user_image1 ='./user_images/'.trim($user_image);

    echo "<div class='code-box'>
    <pre class='code'>
    <li class='nav-item bg-light'>
<img src='$user_image1' alt='' class='profile my-1'>
<p class='text-dark text-center'>$username</p>
</li>
       
    </pre>
</div>";


  


    ?>
    
    <li class="nav-item bg light">
          <a class="nav-link" href="profile.php"><h6>Pending Orders</h6></a>
    </li>
    <li class="nav-item bg light">
          <a class="nav-link" href="profile.php?edit_account"><h6>Edit Account</h6></a>
    </li>
    <li class="nav-item bg light">
          <a class="nav-link" href="profile.php?my_orders"><h6>My Orders</h6></a>
    </li>
    <li class="nav-item bg light">
          <a class="nav-link" href="profile.php?delete_account"><h6>Delete Account</h6></a>
    </li>
    <li class="nav-item bg light">
          <a class="nav-link" href="user_logout.php"><h6>Logout</h6></a>
    </li>
    
  </ul>
    
</div>
 <div class="col-md-10 text-center">
   <?php 
   
   get_order_details();


   if(isset($_GET['edit_account'])){
    include('edit_account.php');
   }

   if(isset($_GET['my_orders'])){
    include('user_orders.php');
   }

   
   if(isset($_GET['delete_account'])){
    include('delete_account.php');
   }


  
   
   
   
   
   
   ?>
   
 </div>



 </div>


 
   
 
    



 <!-- last child-->
 <!-- including header-->

 <?php

// include('../includes/footer.php');





?>


 


 
 
    
     
   

 







 <!-- bootsrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

 
</body>

</html>