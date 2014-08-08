<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}

$mn=$_POST['dname'];
$md=$_POST['did'];
$sn=$_POST['sname'];
$si=$_POST['sid'];
$st=$_POST['sttime'];

$retval=mysqli_query($con,"DELETE FROM drama
WHERE did=".$md.";");
$retval1=mysqli_query($con,"DELETE FROM shows WHERE sid=".$si.";");


if(! $retval && $retval1)
{
  die('Could not remove Event: ' . mysql_error());
}
echo "movie removed";





echo "<script> window.location.assign(\"admin.php\")</script>";


?>