<?php

session_start();
header('location:contact form.php');


$con = mysqli_connect('localhost','root');
if($con){
  
  echo"connection succesfull..";
}
  else
  {
  	echo"no connection";
}
mysqli_select_db($con,'contactus');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$q = "select * from contactus where name='$name' && email='$email' && message='$message' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num==1){
	echo "data already exists";
}
	  else
	  {
	  	$qy="insert into contactus(name,email,message) values('$name','$email','$message') ";
	    mysqli_query($con, $qy);

	  }

?>
