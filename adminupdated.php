<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}

$mn=$_POST['mname'];
$md=$_POST['mid'];
$dir=$_POST['director'];
$act=$_POST['actor'];
$gen=$_POST['genre'];
$rate=$_POST['rating'];
$lang=$_POST['language'];
$actr=$_POST['actress'];
$run=$_POST['running'];
$sn=$_POST['sname'];
$si=$_POST['sid'];
$st=$_POST['sttime'];
$hno=$_POST['hallno'];

$retval = mysqli_query( $con,"INSERT INTO movie(mid,mname,director,actor,genre,rating,language,actress,running)VALUES(".$md.",\"".$mn."\",\"".$dir."\",\"".$act."\",\"".$gen."\",".$rate.",\"".$lang."\",\"".$actr."\",\"".$run."\");");
$retval1=mysqli_query( $con,"INSERT INTO shows(sid,sttime,sname,hallno)VALUES(".$si.",\"".$st."\",\"".$sn."\",".$hno.");");
if(! $retval && ! $retval1)
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";



echo "<script> window.location.assign(\"admin.php\")</script>";


?>