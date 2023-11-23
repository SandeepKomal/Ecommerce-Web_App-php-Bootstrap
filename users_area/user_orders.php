<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Your Orders - <?php echo $_SESSION['username'];?> </title>

    <style>
.admin_img{
  width:80px;
  height:80px;
  object-fit: contain;
}


</style>






</head>

    
<body>
    <?php

    $username= $username= $_SESSION['username'];
    $get_user = "Select * from `user_table` where username='$username'";
    $result = mysqli_query($con, $get_user);
    $row_fetch = mysqli_fetch_array($result );
    $user_id=$row_fetch['user_id'];
    // $get_image="Select * from `user_table` where username='$username'";


    ?>

<h3 class="text-center text-dark mb-4">User Orders</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-dark text-light">
     <tr>
        <th>Sl.No</th>
        <th>Product Image</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Complete/Incomplete</th>
        <th>Status</th>
       
     </tr>
    </thead>
    <tbody class= "bg-secondary text-light">
        <?php
         $get_order_deatils = "Select * from `user_orders` where user_id=$user_id";
         $result_orders = mysqli_query($con, $get_order_deatils);
         $number=1;
         while($row_order_fetch = mysqli_fetch_array($result_orders)){
            $order_id=$row_order_fetch['order_id'];
            $amount_due=$row_order_fetch['amount_due'];
            $invoice_number	=$row_order_fetch['invoice_number'];
            $total_products	=$row_order_fetch['total_products'];
            $order_date	=$row_order_fetch['order_date'];
            $order_status=$row_order_fetch['order_status'];
            $product_id=$row_order_fetch['product_id'];
            if( $order_status=='pending'){
                $order_status='Incomplete';
            }else{
                $order_status='Complete';

            }
            $get_image = "Select * from `products` where product_id=$product_id";
            $result_image = mysqli_query($con, $get_image);
            while($row_image_fetch = mysqli_fetch_array($result_image)){
                $product_image=$row_image_fetch['product_image1'];
                $product_image1 ='../admin_area/product_images/'.trim($product_image);
               





          
            echo " <tr>
            <td> $number</td>
            <td><img src='$product_image1' class='admin_img'></td>
            <td>$amount_due</td>
            <td>$total_products</td>
            <th>$invoice_number</th>
            <td>$order_date</td>
            <td>$order_status</td>";
            ?>
            <?php
            if ($order_status=='Complete'){
                echo  "<td>Paid</td>";
            }else{
                echo "<td><a href='confirm_payment.php?order_id=$order_id' class='text-dark'>Confirm</td> 
            
                </tr>";

            }

           
           

         $number++;
            

            }

         }




        ?>
    

    </tbody>
</table>




</body>





</html>