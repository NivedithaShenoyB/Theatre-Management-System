<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}

$cn=$_POST['cname'];
$cid=$_POST['cid'];
$em=$_POST['email'];
$phnno=$_POST['phone'];
$hno=$_POST['hallno'];
$prc=$_POST['price'];
$sno=$_POST['seatno'];
$tid=$_POST['t_id'];
$shid=$_POST['show_id'];
$eid=$_POST['e_id'];
$retval=mysqli_query( $con,"INSERT INTO customer(cid,cname,email,phone)VALUES(".$cid.",\"".$cn."\",\"".$em."\",\"".$phnno."\");");
$retval1=mysqli_query( $con,"INSERT INTO tickets(hallno,price,seatno,t_id,cid,show_id,e_id)VALUES(".$hno.",".$prc.",\"".$sno."\",".$tid.",".$cid.",".$shid.",".$eid.");");
$result=mysqli_query($con,"SELECT * FROM tickets WHERE cid=".$cid.";");



if(! $retval && ! $retval1 )
{
  die('Could not Book Tickets!!!!: ' . mysql_error());
}
else
{
echo "TICKET";
echo "<br>";
echo "NAME";
echo "\"".$cn."\"";
echo "<br>";
echo "PHONE NUMBER";
echo "\"".$phnno."\"";


echo "<table border='3'>
<tr>

<th>HALL NUMBER</th>
<th>PRICE</th>
<th>SEAT NO.</th>
<th>THEATRE ID</th>
<th>CUSTOMER ID</th>
<th>SHOW ID</th>
<th>EMPLOYEE ID</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  
  echo "<td>" . $row['hallno'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['seatno'] . "</td>";
  echo "<td>" . $row['t_id'] . "</td>";
  echo "<td>" . $row['cid'] . "</td>";
  echo "<td>" . $row['show_id'] . "</td>";
  echo "<td>" . $row['e_id'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
  }
  
 








?>