<?php

include('../includes/connect.php');



@session_start();






?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecomm Demo -Checkout</title>

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
        <?php
         if(isset($user_username)){
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
       



      </ul>
      
    </div>
  </div>
</nav>
<!-- Calling Cart function-->





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
        <a class='nav-link' href='./user_login.php'><i class='fa fa-sign-in'></i>Login</a>
        </li>";



       }else{

        echo "  <li class='nav-item'>
        <a class='nav-link' href='./user_logout.php'><i class='fa fa-sign-in'></i>Logout</a>
        </li>";

        


       }


         ?>

        



      </ul>
    </div>
  </div>
</nav>
 <!-- Third child-->

 
  <div class=" bg-white mt-8-bg-white" >

   <h3 class="text-center" >Checkout </h3>
   <!-- <p class="text-center" > Communication is at the heart of e-commerce and community </p> -->
      
  </div>

 <!-- fourth child-->
 <div class= "row px-1  mt-4">

  <div class ="col-md-12">
 
   <div class="row">

    <?php

    if (!isset($_SESSION['username'])){
        include('user_login.php');
    }else{

        include('payment.php');


    }




 

?>

     
<!-- row end-->
</div>
<!-- col end-->
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