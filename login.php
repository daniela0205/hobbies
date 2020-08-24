<?php
//
session_start();
include 'db_connection.php';

 if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$email= $_POST['email'];
$pass= $_POST['password'];
$sql = "SELECT * FROM login WHERE email='$email' && password='$pass'";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) {
      $_SESSION['login_user'] = $row['email'];
      header('Location: success.html');
      header('Location: home.php');
     } else {
      $error = "Your Login Name or Password is invalid";
    }
  
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fonts/ionicons.min.css">
    <link rel="stylesheet" href="./css/Login-Form-Clean.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script-->

    <title>Login</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">

    <style>
        #header {
            background: url("imgs/header.jpeg");
            /* background: url("imgs/header.jpeg") center center / cover no-repeat; */
        }

    </style>


<body>

<div class="row">
            
            <div class="col-sm-12" style="background-color:lavender; text-align: center; ">
                         
            <div class="login-clean">
         
            <h2> Login</h2>
        <form method="post" >
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-person"></i></div>
            <div class="form-group"><input class="form-control" type="test" name="email"  require></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" require></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login_button">Log In</button>
    
        
        </form> 
        </div>
               </div>
               
          </div>


    <!--div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-person"></i></div>
            <div class="form-group"><input class="form-control" type="test" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login_button">Log In</button>
            <!-- </div><a class="forgot" href="#">Forgot your email or password?</a></form> -->
    <!--/div-->
    

</body>
</html>
