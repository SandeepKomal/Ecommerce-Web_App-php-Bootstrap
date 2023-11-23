<?php


// include('./includes/connect.php');


?>



<?php


/////creating products/////////

function get_products(){
    global $con;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){


    $select_query = "Select * from `products`order by rand() LIMIT 0,15";
$result_query=mysqli_query($con,$select_query);

while($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  // $product_keywords=['product_keywords'];
  
  // $product_image2 =$row['product_image2'];
  // $product_image3 =$row['product_image3'];
  $product_price =$row['price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  $product_image1 ='/ecommerce/admin_area/product_images/'.trim($row['product_image1']);

  echo " <div class ='col-md-4 mb-2'>

  <div class='card'>

  <img src='$product_image1'/>

  <div class='card-body'>

  <h5 class='card-title'>$product_title</h5>

  <p class='card-text'>$product_description</p>
  <p class='card-text'>Price :$product_price INR </p>

  <a href='index.php?add_to_cart=$product_id'  class='btn btn-warning'>Add to cart</a>

  <a href='product_details.php?product_id=$product_id'  class='btn btn-dark'>View More</a>

  </div>

  </div>

  </div>";

  
}


}
}
}



/////getting all products products/////////

function getting_all_products(){
    global $con;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){


    $select_query = "Select * from `products`order by rand()";
$result_query=mysqli_query($con,$select_query);

while($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  // $product_keywords=['product_keywords'];
  
  // $product_image2 =$row['product_image2'];
  // $product_image3 =$row['product_image3'];
  $product_price =$row['price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  $product_image1 ='/ecommerce/admin_area/product_images/'.trim($row['product_image1']);

  echo " <div class ='col-md-4 mb-2'>

  <div class='card'>

  <img src='$product_image1'/>

  <div class='card-body'>

  <h5 class='card-title'>$product_title</h5>

  <p class='card-text'>$product_description</p>

  <p class='card-text'>Price :$product_price INR </p>

  <a href='index.php?add_to_cart=$product_id'  class='btn btn-warning'>Add to cart</a>

  <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View More</a>

  </div>

  </div>

  </div>";

  
}


}
}

}


///getting unique Categories /////



function get_unique_categories(){
    global $con;
    if(isset($_GET['category'])){
        $category_id = $_GET['category'];

    
   
    $select_query = "Select * from `products`where category_id = $category_id ";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-warning'><i class='fa-solid fa-triangle-exclamation' style='color: #f4b301;'></i> No Stock </h2>";
}

while($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  // $product_keywords=['product_keywords'];
  
  // $product_image2 =$row['product_image2'];
  // $product_image3 =$row['product_image3'];
  $product_price =$row['price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  $product_image1 ='/ecommerce/admin_area/product_images/'.trim($row['product_image1']);

  echo " <div class ='col-md-4 mb-2'>

  <div class='card'>

  <img src='$product_image1'/>

  <div class='card-body'>

  <h5 class='card-title'>$product_title</h5>

  <p class='card-text'>$product_description</p>

  <p class='card-text'>Price :$product_price INR </p>

  <a href='index.php?add_to_cart=$product_id'  class='btn btn-warning'>Add to cart</a>

  <a href='product_details.php?product_id=$product_id'  class='btn btn-dark'>View More</a>

  </div>

  </div>

  </div>";

  
}


}

}

///getting unique brands /////



function get_unique_brands(){
    global $con;
    if(isset($_GET['brand'])){
        $brand_id = $_GET['brand'];

    
   
    $select_query = "Select * from `products`where brand_id = $brand_id ";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-warning'><i class='fa-solid fa-triangle-exclamation' style='color: #f4b301;'></i> No Stock </h2>";
}

while($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  // $product_keywords=['product_keywords'];
  
  // $product_image2 =$row['product_image2'];
  // $product_image3 =$row['product_image3'];
  $product_price =$row['price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  $product_image1 ='/ecommerce/admin_area/product_images/'.trim($row['product_image1']);

  echo " <div class ='col-md-4 mb-2'>

  <div class='card'>

  <img src='$product_image1'/>

  <div class='card-body'>

  <h5 class='card-title'>$product_title</h5>

  <p class='card-text'>$product_description</p>

  <p class='card-text'>Price :$product_price INR </p>
  <a href='index.php?add_to_cart=$product_id'  class='btn btn-warning'>Add to cart</a>

  <a href='product_details.php?product_id=$product_id'class='btn btn-dark'>View More</a>

  </div>

  </div>

  </div>";

  
}


}

}




////getting brands/////
function get_brands(){
    global $con;

    $select_brands="Select * from `brands`";
      $result_brands =mysqli_query($con,$select_brands);
      // $row_data = mysqli_fetch_assoc($result_brands);
      // echo $row_data['brand_title'];
      // echo $row_data['brand_title'];
      while ($row_data = mysqli_fetch_assoc($result_brands)){
        $brand_title =$row_data['brand_title']; 
        $brand_id =$row_data['brand_id'];
        echo "<li class='nav-item '>
        <a class='nav-link' href='index.php?brand=$brand_id' >$brand_title</a> </li>";
      }
}


function get_categories(){
    global $con;
    $select_categories="Select * from `categories`";
$result_categories =mysqli_query($con,$select_categories);
// $row_data = mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
// echo $row_data['brand_title'];
while ($row_data = mysqli_fetch_assoc($result_categories)){
  $category_title =$row_data['category_title']; 
  $category_id =$row_data['category_id'];
  echo "<li class='nav-item '>
  <a class='nav-link' href='index.php?category=$category_id' >$category_title</a> </li>";
}


}



/////get search products function///////

function search_product(){
    global $con;
    if(isset($_GET['search_data_product'])){
        $search_data_value= $_GET['search_data'];

  
    


    $search_query = "Select * from `products`where product_keywords like '%$search_data_value%'";
$result_query=mysqli_query($con,$search_query );
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-warning'><i class='fa-solid fa-triangle-exclamation' style='color: #f4b301;'></i> No Results found </h2>";
}

while($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  // $product_keywords=['product_keywords'];
  
  // $product_image2 =$row['product_image2'];
  // $product_image3 =$row['product_image3'];
  $product_price =$row['price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  $product_image1 ='/ecommerce/admin_area/product_images/'.trim($row['product_image1']);

  echo " <div class ='col-md-4 mb-2'>

  <div class='card'>

  <img src='$product_image1'/>

  <div class='card-body'>

  <h5 class='card-title'>$product_title</h5>

  <p class='card-text'>$product_description</p>
  <p class='card-text'>Price :$product_price INR </p>
  <a href='index.php?add_to_cart=$product_id'  class='btn btn-warning'>Add to cart</a>

  <a href='product_details.php?product_id=$product_id'  class='btn btn-dark'>View More</a>

  </div>

  </div>

  </div>";

  
}


}
}

/////view details function ////


function view_more(){
    global $con;
    if (isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
            $product_id = $_GET['product_id'];


    $select_query = "Select * from `products` where product_id=$product_id";
$result_query=mysqli_query($con,$select_query);

while($row = mysqli_fetch_assoc($result_query)){
  $product_id = $row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  // $product_keywords=['product_keywords'];
  
  // $product_image2 =$row['product_image2'];
  // $product_image3 =$row['product_image3'];
  $product_price =$row['price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  $product_image1 ='/ecommerce/admin_area/product_images/'.trim($row['product_image1']);
  $product_image2 ='/ecommerce/admin_area/product_images/'.trim($row['product_image2']);
  $product_image3 ='/ecommerce/admin_area/product_images/'.trim($row['product_image3']);

  echo " <div class ='col-md-4 mb-2'>

  <div class='card'>

  <img src='$product_image1'/>

  <div class='card-body'>

  <h5 class='card-title'>$product_title</h5>

  <p class='card-text'>$product_description</p>
  <p class='card-text'>Price :$product_price INR </p>

  <a href='index.php?add_to_cart=$product_id'  class='btn btn-warning'>Add to cart</a>

  <a href='index.php'  class='btn btn-dark'>Go Home</a>

  </div>

  </div>

  </div>

  <div class = 'col-md-8'>
       <div class='row'> 

       <div class = 'col-md-12'>

       <h4 class='text-center text-warning mb-5 '>Related products </h4>


       </div>

       <div class = 'col-md-4'>
       <img src='$product_image2'/>

       </div>


        
       </div>
       

      

      

     </div>
  
  
  
  
  
  
  ";

  
}


}
}

}
}


///// get ip address of the user//////


  
    function getIPAddress() { 
        global $con; 
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  
  

//////cart function ///

function cart(){
    if(isset($_GET['add_to_cart'])){
        global $con;
        $get_ip = getIPAddress();  
        $get_product_id =$_GET['add_to_cart'];
        $select_query =  "Select * from `cart_details` where ip_address='$get_ip' and product_id =$get_product_id ";
        $result_query=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
     if($num_of_rows>0){
    echo "<script>alert('This item is already in the cart') </script>";
    echo "<script>window.open('index.php','_self') </script>";
}else{
    $insert_query ="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip',0)";
    $result_query=mysqli_query($con, $insert_query);
    echo "<script>alert('This item is added to your cart') </script>";
    echo "<script>window.open('index.php','_self') </script>";

}



}

}


////function to get cart items ////

function cart_item(){

    if(isset($_GET['add_to_cart'])){
        global $con;
        $get_ip = getIPAddress();  
        $select_query =  "Select * from `cart_details` where ip_address='$get_ip' ";
        $result_query=mysqli_query($con,$select_query);
        $count_cart_items=mysqli_num_rows($result_query);
    
    }else{
        global $con;
        $get_ip = getIPAddress();  
        $select_query =  "Select * from `cart_details` where ip_address='$get_ip' ";
        $result_query=mysqli_query($con,$select_query);
        $count_cart_items=mysqli_num_rows($result_query);
   
}

echo $count_cart_items;

}



////total car price function///

function total_cart_price(){
    global $con;
    $get_ip = getIPAddress(); 
    $total=0; 
    $cart_query =  "Select * from `cart_details` where ip_address='$get_ip' ";
    $result=mysqli_query($con, $cart_query );
    while($row=mysqli_fetch_array( $result)){
        $product_id= $row['product_id'];
        $selected_products = "Select * from `products` where product_id= '$product_id'";
        $result_products = mysqli_query($con,$selected_products);
        while($row_product_price=mysqli_fetch_array( $result_products)){

            $product_price=array( $row_product_price['price']);
            $product_values=array_sum($product_price );
            $total += $product_values;






        }

        

    }

    echo $total;

}

                    




////function to get user order details ////


function get_order_details(){
    global $con;
    $username= $_SESSION['username'];
    $get_details = "Select * from `user_table` where username='$username'";
    $result_query= mysqli_query($con,$get_details);
    while($row_query=mysqli_fetch_array($result_query)){
        $user_id = $row_query['user_id'];
        if (!isset($_GET['edit_account'])){
            if (!isset($_GET['my_orders'])){
                if (!isset($_GET['my_orders'])){
                    $get_orders =  "Select * from `user_orders` where user_id =$user_id  and order_status='pending'";
                    $result_orders= mysqli_query($con,$get_orders);
                    $row_count = mysqli_num_rows($result_orders);
                    if ($row_count>0){
                        echo "<h3 class='text-center text-dark mt-5 mb-2'>You Have <span class ='text-danger'>$row_count</span> Pending Orders</h3>
                        <p class='text-center'><a href='profile.php?my_orders' class='text-dark'>Order Details</a></p>";
                    }else{
                        echo "<h3 class='text-center text-dark mt-5 mb-2'>You Have Zero Pending Orders</h3>
                        <p class='text-center'><a href='../index.php' class='text-dark'>Explore Products</a></p>";

                    }

                }
                
            }
            

          
        }


    }


}



?>