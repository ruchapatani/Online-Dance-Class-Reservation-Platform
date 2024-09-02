<?php
        $con=mysqli_connect('localhost','root','','nrutya');
  session_start();

if(isset($_POST['submit']))
    {

		$email = $_SESSION['email'];
    $payment_type=$_POST['payment_type'];
      $card_type=$_POST['card_type'];
      $cardname=$_POST['cardname'];
      $cardno=$_POST['cardno'];
    $cvv=$_POST['cvv'];
    $cardno=md5($cardno);
    $cvv=md5($cvv);
    $query1="SELECT * from selection where email='$email'";

       $result = mysqli_query($con, $query1)or die(mysqli_error($con));
       $row = mysqli_fetch_array($result);
       $style= $row['style'];
       $choreographer=$row['choreographer'];
       $slot=$row['slot'];
       $cost=$row['cost'];

		$query = "INSERT INTO payment VALUES('','$email','$style','$choreographer','$slot','$cost','$payment_type','$card_type','$cardname','$cardno','$cvv')";
 $result2 = mysqli_query($con, $query)or die($mysqli_error($con));
 $query2="DELETE FROM selection where email='".$email."'";
   $data=mysqli_query($con,$query2);
 header('location: su.php');

	}

?>
