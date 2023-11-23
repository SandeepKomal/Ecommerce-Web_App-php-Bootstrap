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
    <title>Ecomm Demo - tektrio.in</title>

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

  .cart_img{
  width:80px;
  height:80px;
  object-fit: contain;
}
input,
textarea {
  border: 1px solid #eeeeee;
  box-sizing: border-box;
  margin: 0;
  outline: none;
  padding: 10px;
}

input[type="button"] {
  -webkit-appearance: button;
  cursor: pointer;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.input-group {
  clear: both;
  margin: 15px 0;
  position: relative;
}

.input-group input[type='button'] {
  background-color: #eeeeee;
  min-width: 38px;
  width: auto;
  transition: all 300ms ease;
}

.input-group .button-minus,
.input-group .button-plus {
  font-weight: bold;
  height: 38px;
  padding: 0;
  width: 38px;
  position: relative;
}

.input-group .quantity-field {
  position: relative;
  height: 38px;
  left: -6px;
  text-align: center;
  width: 62px;
  display: inline-block;
  font-size: 13px;
  margin: 0 0 5px;
  resize: vertical;
}

.button-plus {
  left: -13px;
}

input[type="number"] {
  -moz-appearance: textfield;
  -webkit-appearance: none;
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
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Total Price(<?php total_cart_price();  ?>)INR</a>
        </li> -->



      </ul>
      <!-- <form class="d-flex" role="search" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search" name="search_data">
        <button class="btn btn-outline-warning" type="submit">Search</button>
        <button type="submit" class="btn btn-outline-warning  " name="search_data_product" value="Search">Search</button>
      </form> -->
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

 
  <div class=" bg-white mt-8-bg-light" >

   <h4 class="text-center" >Cart Details </h4>
   <!-- <p class="text-center" > Communication is at the heart of e-commerce and community </p> -->
      
  </div>

   <!-- fourth child table-->


   <div class="container">
    <div class="row">
     <form action="" method="post"> 
<table class="table table-bordered  text-center">
 
    <!-- php code to display dynamic data -->
    <?php
    global $con;
    $get_ip = getIPAddress(); 
    $total_price=0; 
    $cart_query =  "Select * from `cart_details` where ip_address='$get_ip' ";
    $result=mysqli_query($con, $cart_query );
    $result_count=mysqli_num_rows($result);
    if( $result_count>0){
        echo " <thead>
        <tr>
        <th>Remove</th>
          <th >Product Title</th>
          <th>Product Image</th>
          <th >Quantity</th>
          <th >Total Price</th>
          <th >Update item</th>
          <th >Delete Item</th>
    
        </tr>
      </thead>
      <tbody>";
    while($row=mysqli_fetch_array( $result)){
        $product_id= $row['product_id'];
        $selected_products = "Select * from `products` where product_id= '$product_id'";
        $result_products = mysqli_query($con,$selected_products);
        while($row_product_price=mysqli_fetch_array( $result_products)){

            $product_price=array( $row_product_price['price']);
            $price_table =$row_product_price['price'];
            $product_title=$row_product_price['product_title'];
           
            $product_image1 ='../ecommerce/admin_area/product_images/'.trim($row_product_price['product_image1']);
            $product_values=array_sum($product_price );
            $total_price += $product_values;
            
            
           

            
            
           






      



     ?>
    <tr>
     <td><input type="checkbox" name="remove_item[]" value="<?php echo $product_id ?>"></td>
      <td><?php echo $product_title ?></td>
      <td><img src ="<?php echo $product_image1 ?>"class="cart_img"></td>
      <!-- <td><input type="text" name="" id="" class="form-input w-50"></td> -->
      <td>
      <div class="product">
  <div class="input-group">
    <input type="button" value="-" class="button-minus">
    <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
    <input type="button" value="+" class="button-plus">
  </div>
      <!-- <div class="input-group">
  <input type="button" value="-" class="button-minus" data-field="quantity">
  <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
  <input type="button" value="+" class="button-plus" data-field="quantity">

  
</div> -->

 
</div>
</td>
<?php
$get_ip = getIPAddress(); 
if(isset($_POST['update_cart'])){
    $quantity = $_POST['quantity'];
    $update_cart = "update `cart_details` set quantity= $quantity where ip_address='$get_ip' ";
    $result_products_quantity = mysqli_query($con,$update_cart );
    $total_price = $total_price * $quantity;
}




?>
      <td><?php echo $price_table ?> INR</td>
      <td>
      <!-- <a href=""><button class="btn btn-dark px-2 py-2 border-0" > Update</button></a> -->
      <input type="submit" value= "Update Cart" class="btn btn-dark px-2 py-2 border-0" name="update_cart">
      </td>
      <td>
      <!-- <a href=""><button class="btn btn-warning px-2 py-2 border-0" >Remove</button></a> -->
      <!-- <i class="fa-solid fa-trash px-3 py-3" style="color: dark;"></i> -->
      <!-- <i class="fa-solid fa-trash px-3 py-3" style="color: red;" name="remove_cart" type="submit" value="Remove Cart"> </i> -->
      <input type="submit" value= "Remove Cart" class="btn btn-dark px-2 py-2 border-0" name="remove_cart">

  

      </td>
      
       



      
    </tr>
    <?php  }}

        

}
else{

    
    // echo "<img src='./images/empty.gif'>";

    echo "<img src='./images/empty.gif'  style='display: block; margin: 0 auto; width: 300px; height: 200px;'>";
    
   
    
  

}


?>
    
  </tbody>
</table>


 <!-- subtotal-->

 <div class="d-flex mb-5">
    <?php
 $get_ip = getIPAddress(); 
    $cart_query =  "Select * from `cart_details` where ip_address='$get_ip' ";
    $result=mysqli_query($con, $cart_query );
    $result_count=mysqli_num_rows($result);
    if( $result_count>0){

        echo "<h4 class='px-3'>Sub Total : <strong class='text-dark'> $total_price INR</strong></h4>
        <input type='submit' value= 'Continue Shopping' class='btn btn-dark px-3 py-2 border-0 mx-3' name='continue_shopping'>
       <button class='btn btn-warning px-3 py-2 border-0 text-white'> <a href='./users_area/checkout.php'>Checkout</a></button>";


    }else{


        echo "<input type='submit' value= 'Continue Shopping' class='btn btn-dark px-3 py-2 border-0 mx-3' name='continue_shopping'>";
    }

    if (isset($_POST['continue_shopping'])){
        echo "<script> window.open('index.php','_self')</script>";
    }

    ?>

   
    


</div>



    </div>
   </div>

</form>


 <!-- function to remove item-->

 <?php

 function remove_cart_item():void{
    global $con;
    if (isset($_POST['remove_cart'])){
        foreach($_POST['remove_item'] as $remove_id){
            echo $remove_id;
            $delete_query = "Delete from `cart_details` where product_id=$remove_id ";
            $run_delete =mysqli_query($con,$delete_query);
            if($run_delete){
                echo "<script>window.open('cart.php','_self') </script>";
            }


        }
    }

 }


 remove_cart_item();


?>





 



 <!-- last child-->
 <!-- including header-->
<!-- 
 <?php

include('includes/footer.php');





?> -->


 


 
 
    
     
   

 







 <!-- bootsrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
// Function to update local storage and input field for a specific product
function updateQuantity(inputField, increment) {
  var currentVal = parseInt(inputField.val(), 10) || 0;
  var newValue = currentVal + increment;

  if (newValue >= 1) {
    inputField.val(newValue);
    localStorage.setItem(inputField.attr('name'), newValue);
  }
}

// Function to initialize input field with stored value for a specific product
function initializeInputField(inputField) {
  var storedValue = localStorage.getItem(inputField.attr('name'));

  if (storedValue !== null) {
    inputField.val(storedValue);
  }
}

// Click event for plus button (increments by 1) for each product
$('.product').on('click', '.button-plus', function() {
  var inputField = $(this).closest('.input-group').find('.quantity-field');
  updateQuantity(inputField, 1);
});

// Click event for minus button (decrements by 1) for each product
$('.product').on('click', '.button-minus', function() {
  var inputField = $(this).closest('.input-group').find('.quantity-field');
  updateQuantity(inputField, -1);
});

// Initialize all input fields
$('.input-group .quantity-field').each(function() {
  initializeInputField($(this));
});



</script>
      
     




 
</body>

</html>




