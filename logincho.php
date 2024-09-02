<?php

 $con=mysqli_connect('localhost','root','','nrutya');
 session_start();


?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
       <title>Login - NRUTYA</title>
    <!--  <link rel="stylesheet" type="text/css" href="style.css" >
      <!--        Latest compiled and minified CSS -->
       <link rel="stylesheet" type="text/css" href="SS.css" >
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   <!--jQuery library-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!--Latest compiled and minified JavaScript-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   </head>
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
      return false;

     }

     }





</script>

   <body style="background-image : url(Images_gal/cho.jpg); background-size:cover;">

           <nav class="navbar  navbar-fixed-top" style="background-color:white;">
 <div class="container-fluid">
   <div class="navbar-header">
 </div>

   <ul class="nav navbar-nav">
     <li ><a href="FINAL.php"style="color:black;">Home</a></li>
   </ul>
   </div>
   </nav>
 <img src="Images_gal/logo_nrutya.png"  class="center" style="margin-top:50px; height:250px; width:250px;">
    <div class="container-fluid">

 <div class="row" style="padding-top:40px">

                   <div class="col-md-4 col-md-offset-4">
                       <div class="panel panel-primary"  >

                       <h2 class="text-center"><b>LOGIN FOR CHOREOGRAPHER</h2>

                       <div class="row ">
                           <div class="col-xs-12">
                               <hr class="hrStyle">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-12 ">
                               <form action="" class="form-horizontal" method="POST" role="form">
                                   <div class="input-group" style="padding-left:10px;padding-right:10px;">
                                       <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                                       <input type="text" name="email" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
                                   </div>
                                   <span class="help-block"></span>
                                   <div class="input-group" style="padding-left:10px;padding-right:10px;">
                                       <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                                       <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2">
                                   </div>
                                   <span class="help-block"></span>
                 <div class="input-group" style="padding-left:200px;padding-right:10px;">
                                   <button type="submit"  name="submit" class="btn btn-primary">Login</button><br><br></div>
                 <?php

if(isset($_POST['submit'])){


$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);

// Query checks if the email and password are present in the database.
$query = "SELECT * FROM choreographer WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));

$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
 echo "Please enter correct E-mail id and Password";

} else {
 $row = mysqli_fetch_array($result);
 $_SESSION['email'] = $row['email'];
 $_SESSION['password'] = $row['password'];
  $_SESSION['choreographer'] = $row['choreographer'];
 header('location: cho_profile.php');
}
}

?>
</form> </div> </div> </div> </div> </div>

   </body>

   </html>
