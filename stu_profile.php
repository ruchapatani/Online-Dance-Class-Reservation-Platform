<?php
  $con=mysqli_connect('localhost','root','','nrutya');
  session_start();
   $email= $_SESSION['email'];
    $username= $_SESSION['username'];
    $query1="SELECT * from student where email='$email'";

     $result = mysqli_query($con, $query1)or die(mysqli_error($con));
     $row = mysqli_fetch_array($result);?>

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
    <style>
    .button {
      border-radius: 4px;
      background-color: black;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 28px;
      padding: 20px;
      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }

    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    .button:hover span {
      padding-right: 25px;
    }

    .button:hover span:after {
      opacity: 1;
      right: 0;
    }
    </style>
</head>
<body style="background-image : url(Images_gal/profile1.jpg); background-size:cover;">
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
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>

            </ul>

            <ul class="right-menu ml-auto">
                <li><i class="fa fa-facebook"></i></li>
                <li><i class="fa fa-instagram"></i></li>
                <li><i class="fa fa-google"></i></li>
            </ul>
        </div>
        </nav>
<h3 style="background-color:black; color:white;"> H E L L O  <?php print_r($username); ?> ! </h3>

    </section>


        <div class="container" style="padding-top:150px;">

                <div class="title-style text-center" >
                <h1> -  P R O F I L E  - </h1>
                </div>
                <div style="background-color:lightseagreen;opacity:0.8;">
                <div class="text-center" style=" color:white; border-color:blue; opacity:0.9;">
                  <br>
                  <h4 ><b style="color:black;">FIRST NAME :</b>
                     <?php print_r($row['fname']);  ?></h4>
                  <h4><b style="color:black;">LAST NAME :</b> <?php print_r($row['lname']); ?></h4>
                  <h4><b style="color:black;">USERNAME :</b> <?php print_r($row['username']);   ?></h4>
                  <h4><b style="color:black;">DOB :</b><?php print_r($row['dob']);  ?></h4>
                  <h4><b style="color:black;">CITY :</b> <?php print_r($row['city']);  ?></h4>
                  <h4><b style="color:black;">E-MAIL :</b><?php print_r($row['email']);  ?></h4>
                  <h4><b style="color:black;">CONTACT :</b><?php print_r($row['pno']);  ?></h4>
                  <br>
</div>
            </div>
        </div>
    <div class="text-center">
      <form>
        <button class="button" formaction="dance.html"><span>Enroll Now</span></button>
        <button class="button" formaction="booking.php"><span>Bookings</span></button>
      </form>
    </div>







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
