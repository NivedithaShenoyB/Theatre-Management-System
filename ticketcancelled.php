<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}


$cd=$_POST['cid'];
$em=$_POST['sid'];
$phnno=$_POST['seatno'];
$cn=$_POST['cname'];
$retval=mysqli_query($con,"DELETE FROM tickets
WHERE cid=".$cd.";");
$retval=mysqli_query($con,"DELETE FROM customer
WHERE cid=".$cd.";");



if(! $retval)
{
  die('Could not Cancel Tickets!!!: ' . mysql_error());
}
echo "SUCCESSFULLY Cancelled!!!";





echo "<script> window.location.assign(\"selectmovie.php\")</script>";


?>