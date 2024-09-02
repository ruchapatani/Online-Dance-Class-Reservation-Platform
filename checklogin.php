<?php
        $con=mysqli_connect('localhost','root','','nrutya');
  session_start();

if(isset($_SESSION['email']))
    { header('Location:payment.php');
	}
	else{ 
		echo '<script language="javascript">';
		echo 'alert("Kindly login to enroll for classes")';
		echo '</script>';
		
		
	   header('Location:login.php');
	}
?>