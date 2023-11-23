<?php


include('../includes/connect.php');
include('../functions/common_function.php');
// session_start();



 






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecomm Demo -Payment</title>

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




img{
  
  width:50%;
}


</style>



</head>

<body>
  <!--php code to access user id -->
  <?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$username = $_SESSION['username'];
// echo $username;
$sql = "SELECT user_id FROM user_table WHERE username = '$username'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['user_id'];
  // echo $user_id;
} else {
  echo "// Handle the case where the username doesn't exist in the database";
}

// Close the database connection
mysqli_close($con);


?>







<div class="container">
  <h3 class="text-center text-dark"></h3>
  <div class="row d-flex justify-content-center align-items-center mx-4 my-5">
    <div class="col-md-6 my-2 text-center">
      <!-- Background color box -->
      <div style="background-color: #E5E4E2; padding: 20px; border: 1px solid #E5E4E2;">
        <img src="user_images/pay.jpg" alt="Your Image Alt Text"class="pay_img" width="500 ">
        <a href="order.php?user_id=<?php echo $user_id ?>" style="color:#2C3539;">
          <h3 class="text-center">Proceed to Buy</h3>
        </a>
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