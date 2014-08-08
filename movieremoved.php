<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}

$mn=$_POST['mname'];
$md=$_POST['mid'];
$sn=$_POST['sname'];
$si=$_POST['sid'];
$st=$_POST['sttime'];
$retval=mysqli_query($con,"DELETE FROM movie
WHERE mid=".$md.";");
$retval1=mysqli_query($con,"DELETE FROM shows WHERE sid=".$si.";");


if(! $retval && $retval1)
{
  die('Could not remove movie: ' . mysql_error());
}
echo "movie removed";





echo "<script> window.location.assign(\"admin.php\")</script>";


?>