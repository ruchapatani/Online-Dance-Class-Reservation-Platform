<?php
  $con=mysqli_connect('localhost','root','','nrutya');
  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title> N R U T Y A </title>
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
<body>
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="Images_gal/mamtha.jfif"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="FINAL.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dance.html">Dance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Choreographer.html">Choreographer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subscribe.php">Subscribe</a>
                    </li>

                </ul>
            </div>
            </a>
        </nav>
    </section>

        <section>
          <div class="container" style="padding-top:200px;">
                <div class="title-style text-center">
                    <h1> -  Mamtha Karanth - </h1>
                </div>
                <p class="text-center">A accomplished Bharathanatyam performer, choreographer and teacher. A master degree holder in bharathanatyam Running an institution called Natyalahari in Whitefield Bangalore having over 150 dedicated students.</p>
                <p class="text-center">Specialist In: <b style="color:lightseagreen; font-size:20px;">BHARATANATYAM</b></p>
                <p class="text-center">Charge per Month:<b style="color:lightseagreen; font-size:20px;">Rs.3500/-</b> </p>
            </div>
            </section>

    <div class="text-center">
      <form>
        <button class="button" formaction="payment.php"><span>Enroll</span></button>
      </form>
    </div>
</body>
</html>
