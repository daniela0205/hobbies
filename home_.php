<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="app.css">

    <title> Hobbies: Daniela Melgarejo</title>
</head>

<body>



    <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
        <a href="#" class="navbar-brand">MY HOBBIES </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">HOME</a>
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

        </div>
    </nav>

    <br>
<br>
    <div class="row" > 
        <div class="column" style="text-align:right" vertical-align: middle;>
           <a class="logout" href="logout.php">logout</a>
        </div>
    </div>  




    <section class="container-fluid px-0">
            <div class="row align-items-center content">
                    <div class="col-md-6 order-2 order-md-1">
                        <img src="imgs/yoga.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-center order-1 order-md-2">
                        <div class="row justify-content-center">
                            <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                                <h2>YOGA</h2>
                                 <p class="lead">Yoga is a group of physical, mental, and spiritual practices or disciplines which originated in ancient India. 
                                     Yoga is one of the six orthodox schools of Hindu philosophical traditions. There is a broad variety of yoga schools, practices, and goals in Hinduism, Buddhism, and Jainism.
                                     The term "yoga" in the Western world often denotes a modern form of Hatha yoga, consisting largely of the postures called asanas. </p>
                            </div>
                        </div>
                    </div>
                </div>

        




        <div class="row align-items-center content">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>TRAVEL</h2>
                         <p class="lead">Travel is the activity of going from one place to another place. When a person makes the same trip every day to work or school, this type of travelling is usually called "commuting."
                                Some people travel to other cities as part of their job. This is called "business travel." Some people travel on their vacation, to visit other towns, cities, or countries. 
                                These people stay overnight in hotels, hostels, motels, apartments or bed and breakfast or perhaps in a tent - then they are campers. With the changing times, modes of travelling are also changing. 
                                Some people (tourists) write about traveling in books called autobiographies or journals</p>
               
                             
                                       </div>
                </div>
            </div>
            <div class="col-md-6">
                <iframe width="550" height="550" src="https://www.youtube.com/embed/lJ87yD_8u3U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
            </div>
        </div>


        <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                        <img src="imgs/cinema.jpg" alt="" class="img-fluid">
    
                </div>
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Cinema</h2>
    
                            <p class="lead">
                             
                                    Cinema, or motion picture, is the art of moving images; a visual medium that tells stories and exposes reality.
                                    Created in the dusk of the 19th century, cinema is the world’s most recent art form. It is also, by far, the world’s most complex, collaborative, and costly artistic expression.</p>
            
                            </div>
                    </div>
                </div>
            </div>



    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>
</body>

</html>