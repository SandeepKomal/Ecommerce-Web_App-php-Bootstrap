<?php


include('../includes/connect.php');

session_start();

if(isset($_GET['order_id'])){
    $order_id =$_GET['order_id'];
    // echo $order_id;
    
$get_order = "Select * from `user_orders` where order_id=$order_id";
$result = mysqli_query($con, $get_order );
$row_order = mysqli_fetch_array($result);
$amount_due=$row_order['amount_due'];
$invoice_number	=$row_order['invoice_number'];
}


if(isset($_POST['confirm_payment'])){
    $invoice_number=$_POST['invoice_number'];
    $amount=$_POST['amount'];
    $payment_mode=$_POST['payment_mode'];
    $insert_query="insert into `user_payments`(order_id,invoice_number,amount,payment_mode) values (  $order_id,$invoice_number, $amount,'$payment_mode')";
    $result = mysqli_query($con,$insert_query);
    if($result){
        echo "<h3 class='text-center text-light'>Payment Sucesfull </h3>";
        echo "<script>alert('Payment Sucesfull')</script>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";

    }
    $update_query="update `user_orders` set order_status='Complete' where order_id =$order_id";
    $result_update = mysqli_query($con,$update_query);
    echo "<script>alert('Order Status Updated')</script>";

    






}












?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Confirm Payment Page - <?php echo $_SESSION['username'];?> </title>
    
    <!-- bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--style.css -->
    <link rel="stylesheet" href= "../style.css">

    
<body class="bg-white">
<div class="container my-5">
    <div class="card p-4 bg-light"> <!-- Add a card container around the form -->
        <h2 class="text-center my-4 mx-3">Confirm Payment</h2>
        <form action="" method="post">
            <div class="form-outline my-4 text-center w-50 m-auto mt-3">
                <label for="invoice_number">Invoice Number</label>
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" id="invoice_number" value="<?php echo $invoice_number ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto mt-3">
                <label for="amount">Amount</label>
                <input type="text" class="form-control w-50 m-auto" name="amount" id="amount" value="<?php echo $amount_due ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto mt-3">
                <label for="payment_mode">Mode of Payment</label>
                <select name="payment_mode" class="form-select w-50 m-auto" id="payment_mode">
                    <option>Select Payment Mode</option>
                    <option>UPI</option>
                    <option>NetBanking</option>
                    <option>Debit Card / Credit Card</option>
                    <option>Cash on Delivery</option>
                </select>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class="bg-white py-2 px-3 border-0 mt-3" value="Confirm" name="confirm_payment">
            </div>
        </form>
    </div>
</div>





</body>





</html>
