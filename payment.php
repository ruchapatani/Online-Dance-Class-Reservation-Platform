<?php
    $con=mysqli_connect('localhost','root','','nrutya');
    session_start();
     $email= $_SESSION['email'];
      $username= $_SESSION['username'];
    ?>

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
  <body style="background-color:powderblue;">
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


          <div class="container" style="padding-top:150px;">

                  <div class="title-style text-center" >
                  <h1> -  E N R O L L M E N T  - </h1>
                  </div>
                  <div class="text-center" style="background-color:lightseagreen; color:white; border-color:blue;">
                    <br>
                    <form  method="post">
                    <h4 ><b style="color:black;">DANCE STYLE:</b>
                      <select name="style"><option value="">SELECT</option>
                        <option value="ballet">BALLET</option>
                        <option value="bhangra">BHANGRA</option>
                        <option value="bharatanatyam">BHARATANATYAM</option>
                        <option value="bihu">BIHU</option>
                        <option value="contemporary">CONTEMPORARY</option>
                        <option value="garba">GARBA - DANDIYA</option>
                        <option value="hiphop">HIPHOP</option>
                        <option value="jazz">JAZZ</option>
                        <option value="kathak">KATHAK</option>
                        <option value="modern">MODERN</option>
                        <option value="mohiniyattam">MOHINIYATTAM</option>
                        <option value="tap">TAP</option>
                    </select></h4>

                    <h4 ><b style="color:black;">SLOT:</b>
                      <select name="slot">
                        <option value="">Select slot</option>
                        <option value="8am-10am">8AM - 10AM</option>
                        <option value="4pm-5pm">4PM - 5PM</option>
                        <option value="6pm-8pm">6PM - 8PM</option>
                        <option value="8pm-10pm">8PM - 10PM</option>

                    </select></h4>
                      <button type="submit"  name="submit" class="btn btn-primary" >Done</button>
                    <?php
                    if (isset($_POST['submit'])){	$style = $_POST['style'];
                      $slot= $_POST['slot'];
                      $query1="SELECT * from dance where style='$style'";

                         $result = mysqli_query($con, $query1)or die(mysqli_error($con));
                         $row = mysqli_fetch_array($result);  ?>
                    <h4><b style="color:black;">- YOUR SELECTION -</h4>
                      <h4><b style="color:black;">DANCE STYLE:</b> <?php print_r($row['style']); ?></h4>
                      <h4><b style="color:black;">SLOT:</b> <?php print_r($slot); ?></h4>
                    <h4><b style="color:black;">CHOREOGRAPHER:</b> <?php print_r($row['choreographer']); ?></h4>
                    <h4><b style="color:black;">COST PER MONTH:</b> <?php print_r($row['cost']);

$email= $_SESSION['email'];
$style= $row['style'];
$choreographer=$row['choreographer'];
$cost=$row['cost'];

                    $query="INSERT INTO selection VALUES ('$email','$style','$slot','$choreographer','$cost')";
                      $data=mysqli_query($con,$query); };
                    ?> </h4>   </form>
                    <br>

              </div>
          </div>
      <div class="text-center">
        <form>
          <button class="button" formaction="pay.php"><span>Proceed to Payment</span></button>
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
