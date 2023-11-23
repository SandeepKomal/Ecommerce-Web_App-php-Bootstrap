
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
    <title>Admin Dashboard- All products</title>

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

.edit_img{
  width:80px;
  height:80px;
  object-fit: contain;
}

.form-group-last {
    margin-bottom: 20px; /* Adjust the value to control the spacing */
  }


</style>


    
</head>
<body>

<!-- bootsrap js link -->
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
if(isset($_GET['edit_products'])){
    $edit_id =$_GET['edit_products'];
    // echo  $edit_id ;
    $get_products_edit= "Select * from `products` where product_id =$edit_id";
    $result=mysqli_query($con, $get_products_edit);
    $row=mysqli_fetch_assoc($result);
    $product_title = $row['product_title'];
    // echo $product_title;
    $product_desc = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    $product_image=$row['product_image1'];
    $product_image1 ='./product_images/'.trim($product_image);
    $product_imagee=$row['product_image2'];
    $product_image2 ='./product_images/'.trim($product_imagee);
    $product_imageee=$row['product_image3'];
    $product_image3 ='./product_images/'.trim($product_imageee);
    $product_price=$row['price'];
    $product_status=$row['status'];

    ////fetch category id and brand id ////
    $select_category ="SELECT * FROM `categories` where category_id= $category_id";
    $result_category=mysqli_query($con,  $select_category);
    $row_category=mysqli_fetch_assoc($result_category);
    $categories =  $row_category['category_title'];
    // echo $categories ;


    $select_brand ="SELECT * FROM `brands` where brand_id= $brand_id";
    $result_brand =mysqli_query($con,  $select_brand );
    $row_brand =mysqli_fetch_assoc($result_brand );
    $brands =  $row_brand ['brand_title'];
    //  echo $brands ;







}



?>
<div class="container mt-5">
    <h3 class="text-center">Edit Products</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" id="product_title" value=" <?php echo $product_title ?>" name="product_title" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_description" class="form-label">Product Desciprtion</label>
            <input type="text" id="product_description" value=" <?php echo  $product_desc ?>"  name="product_description" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" id="product_keywords" value=" <?php echo    $product_keywords ?>" name="product_keywords" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_category" class="form-label">Product Category</label>
            <select name="product_category" class="form-select">
                <option value=" <?php echo  $categories ?>"> <?php echo  $categories  ?></option>
                <?php
                 $select_category_all ="SELECT * FROM `categories`";
                 $result_category_all=mysqli_query($con, $select_category_all);
                 while($row_category_all=mysqli_fetch_assoc($result_category_all)){
                    $categories_all =  $row_category_all['category_title'];
                    $categories_id=$row_category_all['category_id'];
                    echo "<option value='$categories_id'> $categories_all</option>";

                 }
                 

                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_brands" class="form-label">Product Brands</label>
            <select name="product_brands" class="form-select">
                <option value=" <?php echo  $brands ?>"> <?php echo $brands ?></option>
                <?php
                 $select_brand_all ="SELECT * FROM `brands`";
                 $result_brand_all=mysqli_query($con,$select_brand_all);
                 while($row_brand_all=mysqli_fetch_assoc( $result_brand_all)){
                    $brands_all =  $row_brand_all['brand_title'];
                    $brands_id=$row_brand_all['brand_id'];
                    echo "<option value='$brands_id'> $brands_all</option>";

                 }
                 

                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class="form-label">Product Image1</label>
            <div class="d-flex">
            <input type="file" id="product_image1" name="product_image1" class="form-control w-90 m-auto" >
            <img src="<?php echo $product_image1 ?>"alt="" class="edit_img">

            </div>
            
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image2" class="form-label">Product Image2</label>
            <div class="d-flex">
            <input type="file" id="product_image2" name="product_image2" class="form-control w-90 m-auto" >
            <img src="<?php echo $product_image2 ?>"alt="" class="edit_img">

            </div>
            
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image3" class="form-label">Product Image3</label>
            <div class="d-flex">
            <input type="file" id="product_image3" name="product_image3" class="form-control w-90 m-auto">
            <img src="<?php echo $product_image3 ?>" alt="" class="edit_img">

            </div>
            
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" id="product_price" value=" <?php echo    $product_price ?>"  name="product_price" class="form-control" required="required">
        </div>

        <div class="w-50 m-auto">
            <input type="submit" name="edit_product"  id="edit_product" value="Update Product" class="btn btn-warning mb-3" style="margin-top: 20px;"> <!-- Add inline style for spacing -->
        </div>

    </form>
</div>




<!-- editing products -->


<?php


if(isset($_POST['edit_product'])){
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];

    $product_image1= $_FILES['product_image1']['name'];
    $product_image2= $_FILES['product_image2']['name'];
    $product_image3= $_FILES['product_image3']['name'];


    $temp_image1= $_FILES['product_image1']['tmp_name'];
    $temp_image2= $_FILES['product_image2']['tmp_name'];
    $temp_image3= $_FILES['product_image3']['tmp_name'];


    ///checking for empty fields////



if($product_title=='' or $product_description=='' or $product_keywords =='' or  $product_category =='' or $product_brands =='' or  $product_price ==''){


    echo "<script>alert('Please fill all the fields')</script>";
    exit();
}else{

    move_uploaded_file($temp_image1,"./product_images/$product_image1");
    move_uploaded_file($temp_image2,"./product_images/$product_image2");
    move_uploaded_file($temp_image3,"./product_images/$product_image3");


    ///insert query////

    $update_products = "update  `products` set product_title='$product_title',product_description='$product_description',product_keywords='$product_keywords',category_id='$product_category',brand_id='$product_brands',product_image1='$product_image1',product_image2='$product_image2',product_image3='$product_image3',price='$product_price',date=NOW() where product_id= $edit_id";
    $result_query_eidt=mysqli_query($con, $update_products);
    if ($result_query_eidt){

        echo "<script>alert('Sucessfully Updated products')</script>";
        
        echo "<script>window.open('view_products.php','_self')</script>";

    }
     


}
   
}














?>








<!-- bootsrap js link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>

</html>