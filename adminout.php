<?php
if ($_POST['name'] == "Niveditha" && $_POST['pass']=="002"||$_POST['name']=="Chaitra" && $_POST['pass']=="001")
{
 echo "<script> window.location.assign(\"admin.php\")</script>";
}
else
{ 
echo "<br>";
echo "<t>";
 echo "WRONG.AUTHENTICATION FAILED";
}
?>