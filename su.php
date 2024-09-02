<?php
 $con=mysqli_connect('localhost','root','','onlineshopping');
  session_start();
     $email= $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title> N R U T Y A  </title>
      <meta name="viewport" content="width=device-width, initial scale=1.0">
      <link rel="stylesheet" href="SS.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> </head>


    <body style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg); background-size:cover;">
      <section class="header">
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color:powderblue;">
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

      </section>

<div class="container" style="margin-top:60px;">
  <div class="text-white text-center py-5 px-4">
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Your Payment is Successfull! Thankyou for Enrolling!</strong></h2>
	  <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>You can check your bookings <a href="booking.php">here</a></strong></h2>
</div>
</div>

</body>
<footer style="text-align:center;">Copyright @ NRUTYA 2020.All rights reserved
</footer>
</html>
