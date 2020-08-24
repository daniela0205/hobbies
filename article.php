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



    <title>Article</title> 
  
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
            <div class="col-sm-12" style=" text-align: center">
            <h1>Travel</h1>
        </div>
         
    </div>



    <div class="container">

         <div class="row">
                <div class="col-sm-4" style="background-color:lavender;">
                <img src="https://scottamyx.com/wp-content/uploads/2018/04/Travel.jpg" alt="travel" style="width:100%;">
          
                </div>
                <div class="col-sm-4" style="background-color:lavender;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJo_p9137ZFws9igY53BPtRj67h54OQwXo15ncn4mFLyobDlFqjQ" alt="Travel" style="width:100%;">
              
                </div>
                <div class="col-sm-4" style="background-color:lavender;">
                <img src="http://ibiza.travel/wp-content/uploads/2017/09/avion-despegando.jpg" alt="Tavel" style="width:100%;">
                  
                </div>
                <br>
                
        </div>

        <div class="row">

                
                
                <div class="col-sm-12" style="background-color:lavender;">
    
                <h2>The Importance of Traveling Somewhere New</h2>

          <p>You hear many talk about trips they’re planning on taking. Whether it be a great distance or just an hour away, travel is so important for your own character development. Not to mention that you get to experience new things with every place you have never been before. Traveling is the best way to get out of your comfort zone and invites you to experience life in different ways. <br>

      Traveling is something really unique, and there are only so many things we can learn in a school environment. Travel really can’t be taught; you can learn about other cultures, but you can’t be fully taught unless you experience it. Scientifically, it is shown that traveling also gains you more confidence and a great way to develop cultural sensitivity. Not to mention if you travel abroad, you can most likely be submerged into a second or third language. <br>

                To me, traveling is something that absolutely blows my mind. Seeing something that you have never seen before, being places that people live everyday and forget the beauty of their home and become absolutely in awe of the surroundings, and knowing that sometimes places are so different from where you’re familiar.</p>
              </div>
             
        </div>




        <h2>Destination</h2>  

        <div id="demo" class="carousel slide" data-ride="carousel">

             <!-- Indicators -->
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>



  <div class="carousel-inner">
    <div class="carousel-item active">
           <img src="https://upload.wikimedia.org/wikipedia/commons/2/23/Hong_Kong_Skyline_Restitch_-_Dec_2007.jpg" alt="Hong Kong"  style="width:100%;height:50%;">
           <div class="carousel-caption">
            <h3>Honk kong</h3>
          <p>We had such a great time in HK!</p>
        </div>   

          </div>
      
            <div class="carousel-item">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Rio_De_Janeiro_-_Rafael_Defavari.jpg/700px-Rio_De_Janeiro_-_Rafael_Defavari.jpg" alt="rio-de-janeiro" style="width:100%;height:50%;">
              <div class="carousel-caption">
              <h3>Rio de Janeiro</h3>
              <p>Wonderfull City</p>
              </div>   
            </div>
          
            <div class="carousel-item">
              <img src="http://www.nevillegrowshopmadrid.com/images/noticias/NewYork.jpg" alt="New york" style="width:100%;height:50%;">
              <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
           </div>   

           
            </div>
          </div>
      

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  </div>



</body>
</html>