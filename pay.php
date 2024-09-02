<?php
    $con=mysqli_connect('localhost','root','','nrutya');
    session_start();
     $email= $_SESSION['email'];
      $username= $_SESSION['username'];
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


    <body>
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
  <h3 style="background-color:black; color:white;"> One step away from dance,  <?php print_r($username); ?> ! </h3>

      </section>


 <div class="container">

                    <h2><strong>MAKE PAYMENT</strong></h2>
                    <div class="text-center">
                    <div class="thumbnail">

                        <img src="Images_gal/cards.jpg" alt="">

                    </div>

                    <div class="container" style="padding-left:300px; padding-right:300px;">

                        <form  action="payment_script.php" method="post">
						 <div class="form-group" >
            <h4 > Select Payment Method</h4>
            <select name="payment_type" class="form-control" >
            	  <option value="">Select</option>
				  <option value="credit">Credit</option>
				  <option value="debit">Debit</option>
			</select>

        </div>
                            <div class="form-group">
                             Cardno:   <input class="form-control" type="number" placeholder="cardno" name="card_no"  required = "true" >
                            </div>
                            <div class="form-group">
                               Name on the  card: <input type="text" class="form-control"  placeholder="Name on card" name="cardname" required = "true">
                            </div>
                            <div class="form-group">
                           Card type:  <br><select name="card_type"><option value="VISA">VISA</option>
                                    <option value="MasterCard">MasterCard</option>
                                     <option value="AmericanExpress">American Express</option>
                                      <option value="DiscoverNetwork">Discover Network</option>

                                </select>
                            </div>
                            <div class="form-group">
                              Expiry Month:  <select name="expiry_month"><option value="Jan">Jan</option><option value="Feb">Feb</option><option value="Mar">Mar</option><option value="Apr">Apr</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="Aug">Aug</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option></select>
                               Expiry Year:  <select name="expiry_year"><option value="2019">2020</option>
                                     <option value="2021">2021</option>
                                      <option value="2022">2022</option>
                                       <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                </select>
                            </div>
                            <div class="form-group">
                               CVV No: <input  type="number" class="form-control"  placeholder="CVV NO" name="cvv" required = "true">
                            </div>

                     <button type="submit"  name="submit" class="btn btn-primary" >Confirm >></button><br><br></div>
               </form>
             </div>
 </body>
 <footer style="text-align:center;">Copyright @ NRUTYA 2020.All rights reserved
 </footer>
		</html>
