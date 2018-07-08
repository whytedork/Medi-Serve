<?php

session_start();
header('location:donation form.php');


$con = mysqli_connect('localhost','root');
if($con){
  
  echo"connection succesfull..";
}
  else
  {
  	echo"no connection";
}
mysqli_select_db($con,'donation');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$message = $_POST['message'];

$q = "select * from donationform where name='$name' && email='$email' && mobile='$mobile' && address='$address' && message='$message'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num==1){
	echo "data already exists";
}
	  else
	  {
	  	$qy="insert into donationform(name,email,mobile,address,message) values('$name','$email','$mobile','$address','$message') ";
	    mysqli_query($con, $qy);

	  }

?>
