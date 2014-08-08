<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}
$nme=$_POST['ename'];
$pwd=$_POST['eid'];

mysqli_query($con,"DELETE FROM employee
WHERE eid=".$pwd.";");
echo "employee removed";
echo "<script> window.location.assign(\"admin.php\")</script>";


?>