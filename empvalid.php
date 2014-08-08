<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}
$result=mysqli_query($con,"SELECT eid,ename FROM employee");
while($row = mysqli_fetch_array($result))
{
	if ($_POST['name'] == $row['ename'] && $_POST['pass']==$row['eid'])
	{
		echo "Logged in";
		echo "<script> window.location.assign(\"selectmovie.php\")</script>";
 
	}
	else
	{
	echo "Wrong";
	}
}

?>