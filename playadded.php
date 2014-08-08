<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}

$a=$_POST['dname'];
$b=$_POST['did'];
$c=$_POST['dtype'];
$d=$_POST['performer'];
$e=$_POST['genre'];
$f=$_POST['lang'];
$g=$_POST['rtime'];
$sn=$_POST['sname'];
$si=$_POST['sid'];
$st=$_POST['sttime'];
$hno=$_POST['hallno'];



$retval = mysqli_query( $con,"INSERT INTO drama(did,dtype,dname,lang,performer,rtime,genre)VALUES(".$b.",\"".$c."\",\"".$a."\",\"".$f."\",\"".$d."\",\"".$g."\",\"".$e."\");");
$retval1=mysqli_query( $con,"INSERT INTO shows(sid,sttime,sname,hallno)VALUES(".$si.",\"".$st."\",\"".$sn."\",".$hno.");");
if(! $retval && $retval1)
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";



echo "<script> window.location.assign(\"admin.php\")</script>";


?>