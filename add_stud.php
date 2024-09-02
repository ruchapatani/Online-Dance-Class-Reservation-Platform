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
    .dot {
      height: 50px;
      width: 50px;
      background-color: lightseagreen;
      border-radius: 50%;
      display: inline-block;
    font-size:30px;
    font-color:white;
    }
    .button:hover span:after {
      opacity: 1;
      right: 0;
    }
    </style>
    <script type="text/javascript">
    function check(pwd1)
    {
      if(pwd1.value.length<4){
        alert("Error: Password must contain at least four characters!");
         return false;

        }
    }

    function checkForm(pwd1,pwd2)
    {


      if(pwd1.value !=pwd2.value) {

          alert("Error: Entered Password is not matching!! Try Again.");
         return false;}}
   </script>
</head>
<body style="background-image : url(Images_gal/book.jpg);">
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
                <h1> - ADD NEW STUDENTS - </h1>
                </div>
                <div style="background-color:lightseagreen;opacity:0.8;">
                <div class="text-center" style=" color:white; border-color:blue; opacity:0.9;">

                                      <form action="admin_stud_register.php" method="POST" role="form" style="padding-left:150px; padding-right:150px;" >
                          <h2 style="padding-left:10px"><b>- FILL DETAILS -</h2>
                                          <div class="form-group form-inline" >

                                             <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
                                              <input type="text" name="fname" class="form-control" placeholder="First Name *" aria-describedby="basic-addon1" required>
                                          </div>


                            <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
                                              <input type="text" name="lname" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" required>
                                          </div>
                                          </div>
                            <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                                              <input type="text" name="username" class="form-control" placeholder="Enter username*" aria-describedby="basic-addon1" required>
                                          </div>
                                          <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">

                                                            <input type="date" name="dob" class="form-control" placeholder="Enter DOB*" aria-describedby="basic-addon1" required>
                                                        </div>
                                          <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                                            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-map-marker"></i></span>
                                                            <input type="text" name="city" class="form-control" placeholder="Enter City*" aria-describedby="basic-addon1" required>
                                                        </div>
                                          <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                                              <input type="text" name="email" class="form-control" placeholder="Enter email address*" aria-describedby="basic-addon1" required>
                                          </div>

                                          <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                              <span class="input-group-addon" id="basic-addon4"><i class=" glyphicon glyphicon-phone"></i></span>

                                              <input type="text" name="phone" class="form-control" placeholder="Enter phone number*" onclick="checkForm(pwd1,pwd2)" aria-describedby="basic-addon4" required>
                                          </div>
                                          <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                              <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                                              <input type="password" name="pwd1" class="form-control" placeholder="Enter password*"  aria-describedby="basic-addon2" required>
                                          </div>
                                          <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                              <span class="input-group-addon" id="basic-addon3"><i class="glyphicon glyphicon-lock"></i></span>
                                              <input type="password" name="pwd2" class="form-control"  placeholder="Re-Enter password*" onclick="check(pwd1)" aria-describedby="basic-addon3" required>
                                          </div>




                                       <div>
                                              <label class="gender-text" >Gender </label>
                                              <span class="gender-radiobuttons">
                                              <input type="radio" name="gender" value="male"> Male
                                              <input type="radio" name="gender" value="female"> Female
                                              </span>
                                          </div></div><div class="text-center" style="padding-left:10px;padding-right:10px;">
                                         <button type="submit"  name="submit" class="btn btn-primary" onclick="alert('Added Student Successfully')" >ADD >></button><br><br></div>


                                      </form>

            </div>
        </div>
    <div class="text-center">
      <form>
        <button class="button" formaction="ad_profile.php"><span>Profile</span></button>
          <button class="button" formaction="ad_stu.php"><span>Back</span></button>
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
