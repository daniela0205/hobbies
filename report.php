<?php
   include('session.php');
  
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <style>
        #header {
            background: url("imgs/header.jpeg");
            /* background: url("imgs/header.jpeg") center center / cover no-repeat; */
        }
        /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  
    </style>



    <title>REPORT</title> 
  
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="home.php">Hobbies</a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home.php">HOME</a>
              </li>
              <li class="nav-item">
                    <a href="article.php" class="nav-link">ARTICLE</a>
                </li>
                <li class="nav-item">
                    <a href="dbreview.php" class="nav-link">DB REVIEW </a>
                </li>
                <li class="nav-item">
                    <a href="report.php" class="nav-link">REPORT </a>
         </li>
         </ul>
     </nav>
                
    <div class="row">
            <div class="col-sm-12" style=" text-align: right">
                    <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
         
    </div>

              
    <div class="row">
            <div class="col-sm-12" style=" text-align:center">
            <h1>REPORT</h1>
        </div>
         
    </div>



    <div class="container">


        <div class="row">

                
                
                <div class="col-sm-12" style="background-color:lavender; text-align:center">
    

                <h2>Introduction</h2>
               <p>Name: Daniela Melgarejo</p>
               <p>Email: daniela0205@gmail.com </p>
               <p>Student ID: 2019124</p>
               <h2>Goals of site</h2>

            <p>    This site was develope to show the use the tecnologie of PHP, HTML and MQSQL </p>

            <h2>Live site</h2>
            
        <p class="lead">Made click to access at Live site: </p> <a href="https://webdevelopementdaniela.000webhostapp.com" class="btn btn-primary">live side</a>

  <footer>
        <div class="row">
            <div class="col-sm-12" style="background-color:lavender; text-align: center">
                @ Daniela Melgarejo | 2019                          
             </div>         
        </div>
    </footer>

      
</body>
</html>