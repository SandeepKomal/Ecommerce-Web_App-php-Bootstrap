<?php
 $username_session= $_SESSION['username'];
 if(isset($_POST['delete'])){
    $delete_query="Delete from `user_table` where username='$username_session'";
    $result_query= mysqli_query($con,$delete_query);
    if($result_query){
        session_destroy();
        echo "<script>alert('Account Deleted Sucessfully')</script>";
        echo "<script>window.open('../index.php','_self')</script>";

    }
 }


 if(isset($_POST['dont_delete'])){
   
  echo "<script>window.open('profile.php','_self')</script>";




 }









?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Account - <?php echo $_SESSION['username'];?> </title>

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


/* Style for the "Delete Account" button */
.delete-button {
    background-color: #dc3545; /* Red background color */
    color: #fff; /* White text color */
    border: none;
}

/* Style for the "Keep Account" button */
.keep-button {
    background-color: #198754; /* Green background color */
    color: #fff; /* White text color */
    border: none;
}

/* Add additional styling as needed */




</style>




<body>

<form action="" method="post" class="mt-5">
    <div class="form-outline mb-4">
        <input type="submit" class="form-control w-50 m-auto delete-button" name="delete" value="Delete Account">
    </div>
    <div class="form-outline mb-4">
        <input type="submit" class="form-control w-50 m-auto keep-button" name="dont_delete" value="Keep Account">
    </div>
</form>














</body>




</html>





