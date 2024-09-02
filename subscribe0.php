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

    </head>

    <body style="background-image : url(Images_gal/subscribe.jpg); background-size:cover;">

    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:powderblue;">
        <a class="navbar-brand" href="#"></a>
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
                    <a class="nav-link" href="">Choreographer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.html">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="subscribe.php">Subscribe</a>
                </li>

            </ul>


        </div>
        </nav>
</section>


			  <div class="container" >
        <section id="login-content" >
            <div class="container-fluid">
                <div class="row form-content">
                    <div class="container-fluid">

                            <form action="" method="POST" role="form" >
							 <h1 style="padding-top:20px ; padding-bottom:20px; color:white; "> <b>SUBSCRIBE/UNSUBSCRIBE</b> </h1>

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input type="text" name="email" class="form-control" placeholder="Enter your email address*" aria-describedby="basic-addon1" required>
                                </div>

								   <button type="submit" name="submit" class="btn btn-primary">Subscribe</button><br><br>
                                   <button type="submit" name="unsub" class="btn btn-primary">Unsubscribe</button><br><br>

								 <?php


                 if (isset($_POST['submit'])){

                $email = $_POST['email'];
                $results = mysqli_query($con,"select * from subscribers where email='$email' ");
                $row = mysqli_num_rows($results);
             if ($row > 0 ) {
             //if $row is greater than 0, (means the email exists)
             echo "Email already exists";
             } else {

             if ($row == 0 ) {
             // $row is equal to 0, (==), this means it didnt find results (email)
             //echo "Email does not exists, so lets add the email to the database";
             $query=mysqli_query($con,"INSERT INTO subscribers VALUES ('$email')");
             $data=mysqli_query($con,$query);
             echo "You've successfully subscribed!";
             }

           } }

    if(isset($_POST['unsub']))
    {
      $email = $_POST['email'];
      $results = mysqli_query($con,"select * from subscribers where email='$email' ");
      $row = mysqli_num_rows($results);
   if ($row > 0 ) {
     $query="DELETE FROM subscribers where email='".$email."'";
       $data=mysqli_query($con,$query);
       echo "You're now Unsubscribed!";
   } else {

   if ($row == 0 ) {
   echo "Your email was not subscribed!";
   }

  }
    };
	?>
                            </form>

                    </div>
                </div>
            </div>
        </section>
            </div>
          </body>
          </html>
