<!DOCTYPE html>
<html>
<head>
    <title> N R U T Y A  </title>
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="SS.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:powderblue;">
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:powderblue;">
        <a class="navbar-brand" href="#"><img src="Images_gal/logo_nrutya.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="FINAL.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dance.html">Dance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="choreographer.html">Choreographer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="subscribe.php">Subscribe</a>
                </li>
               </ul>
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" style="color:grey;">Login As<span class="caret"></span></a>
                      <ul  class="dropdown-menu" >
                        <li ><a href="login.php">Student</a></li>
                        <li><a href="logincho.php">Choreographer</a></li>
                        <li ><a href="loginad.php">Admin</a></li>
                         </ul>
                  </li>
                </ul>


            <ul class="right-menu ml-auto">
                <li><i class="fa fa-facebook"></i></li>
                <li><i class="fa fa-instagram"></i></li>
                <li><i class="fa fa-google"></i></li>
            </ul>
        </div>
        </nav>

        <div class="banner">
            <div class="banner-img">
                <img src="Images_gal/dance.jpg">
            </div>
            <div class="banner-title">
                <h1> - City's Finest Dance Academy - </h1>
                <h1>All the world is a stage.</h1>
            </div>
        </div>
    </section>


        <div class="container" style="padding-top:60px;">

                <div class="title-style text-center">
                <h1> -  A B O U T  - </h1>
                </div>
                <p class="text-center" style="padding-bottom:30px;">Nrutya dance academy is established with an aim to provide quality dance training and making dance available to all, throughout the year at multiple locations for students from ages four to eighty four providing them with training in various dance styles by expert faculties.Students are free to get enrolled in any dance style and book choreographers. The classes give them an opportunity to learn dance, express themselves creatively and perform on stage. Classes are available for children (4 to 9 years), juniors (10 to 17years) and adults (18 years onwards).</p>

        </div>


    <section>
        <div id="slider">
        <div id="headerSlider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="Images_gal/banner4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item active">
                    <img src="Images_gal/banner5.jpg" class="d-block w-100" alt>
                </div>
                <div class="carousel-item">
                    <img src="Images_gal/6.jpg" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
        <hr>
        <h2>Dancing can reveal all the mystery that music conceals.</h2>
        <hr>
        </div>
    </section>
    <section class="offer">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="Images_gal/images.jpeg">
            </div>
            <div class="col-md-6">
                <div class="subscribe">
                <h4> E X C L U S I V E</h4>
                <p>Subscribe to find our rythm that satisfies your soul and discover exciting offers to satisfy the quenching need for dance and joy.</p>
                <form action="subscribe.php" method="post">

                <button type="submit" onclick="openForm()" class="btn">Subscribe</button>

                </form>
                </div>
                <script>
                function openForm() {
                document.getElementById("myForm").style.display = "block";
                }

                function closeForm() {
                document.getElementById("myForm").style.display = "none";
                }
                </script>
                </div>
            </div>
    </section>

    <section>
        <div class="row">
            <div class="column" style="background-color:#F6C36A;">
                <h2>L O C A T I O N</h2>
                <p>Dhwani Auditorium
                <br>CMR Institute of Technology
                <br>AECS Layout-Kundanahalli
                <br>Bangalore-560039
                <br>
                </p>
            </div>
            <div class="column" style="background-color:lightsteelblue;">
                <h2>T I M I N G S</h2>
                <p>MONDAY  -  SATURDAY
                <br>11:00 am to 7:00 pm
                <br>(Sunday - Holiday)
                </p>
            </div>
         </div>
    </section>


    <section>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
        } else {
        mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>
    </section>
</body>
<footer style="text-align:center;">Copyright @ NRUTYA 2020.All rights reserved
</footer>
</html>
