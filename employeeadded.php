<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}

$pwd=$_POST['eid'];
$nme=$_POST['ename'];
$email=$_POST['email_id'];
$phone=$_POST['phone_no'];
$add=$_POST['address'];
$gender=$_POST['sex'];
$a_id=$_POST['a_id'];


$retval = mysqli_query( $con,"INSERT INTO employee(eid,ename,email_id,phone_no,address,sex,a_id)VALUES(".$pwd.",\"".$nme."\",\"".$email."\",\"".$phone."\",\"".$add."\",\"".$gender."\",".$a_id.");");
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";



echo "<script> window.location.assign(\"admin.php\")</script>";


?>