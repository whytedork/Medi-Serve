<?php

session_start();
header('location:medicinebuying.php');


$con = mysqli_connect('localhost','root');
if($con){
  
  echo"connection succesfull..";
}
  else
  {
  	echo"no connection";
}
mysqli_select_db($con,'medicine');

$pname = $_POST['pname'];
$bname = $_POST['bname'];
$address = $_POST['address'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$incomecert = $_POST['incomecert'];
$medicine = $_POST['medicine'];
$bill = $_POST['bill'];
$problem = $_POST['problem'];

$q = "select * from medicine where pname='$pname'&& bname='bpname' && address='$address' && email='$email' && mobile='$message' && incomecert='$incomecert'&& medicine='$medicine' && bill='$bill' && problem='$problem'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num==1){
	echo "data already exists";
}
	  else
	  {
	  	$qy="insert into medicine(pname,bname,address,email,mobile,incomecert,medicine,bill,problem) values('$pname' ,'$bname','$address','$email','$mobile','$incomecert','$medicine','$bill','$problem') ";
	    mysqli_query($con, $qy);

	  }

?>
