<html>
<div style="width:540px; margin: 0 auto;">
 
 <?php 
	$con=mysqli_connect("localhost","root","","tms");
	if(mysqli_connect_errno())
	{
		echo "Failed To Connect to Mysql: " . mysqli_connect_error();
	}
	$result=mysqli_query($con,"SELECT seatno FROM tickets");



 $seats=array_fill(1,30,'empty');
 
 
 while($row = mysqli_fetch_array($result))
{
	$seats[$row['seatno']] = 'booked';
}
 $i = 30;
 while($i>=1)
 {
 if($seats[$i]=='empty') 
	echo "<img src=\"images/green.png\">"; 
	else echo "<img src=\"images/red.png\">"; 
 
 $i = $i-1;
 }
 ?>
 
</div>
</html>