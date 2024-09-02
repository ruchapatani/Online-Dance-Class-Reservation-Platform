<?php
  $con=mysqli_connect('localhost','root','','nrutya');
  session_start();

if(isset($_POST['submit']))
    {
		$username=$_POST['username'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
      $gender='';
$dob=$_POST['dob'];
$city=$_POST['city'];
        $email=$_POST['email'];
        $pwd1=$_POST['pwd1'];
        $pno=$_POST['phone'];



		if(isset($_POST['gender'])){
		 $gender=$_POST['gender'];

		 }
		 $query2 = "SELECT * FROM student WHERE email='$email'";
  $result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
  $num = mysqli_num_rows($result2);

  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: login.php?m1=' . $m);
  }
   else {


		 $query="INSERT INTO student VALUES ('$fname','$lname','$username','$email','$pno','$dob','$city','$gender','$pwd1')";
       $data=mysqli_query($con,$query);

	   $email = mysqli_real_escape_string($con, $email);
	   $password = mysqli_real_escape_string($con, $password);
	   $query1 = "SELECT * FROM student WHERE email='" . $email . "' AND password='" . $pwd1 . "'";
	   $result = mysqli_query($con, $query1)or die($mysqli_error($con));
	   $num = mysqli_num_rows($result);
	  $row = mysqli_fetch_array($result);
header('location: add_stud.php');

    }
	}

 ?>
