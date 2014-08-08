<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    
    <title>Admin</title>



    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>

</head>
<body>
<div id="art-main">
    <div class="cleared reset-box"></div>
<div class="art-bar art-nav">
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
	<ul class="art-hmenu">
		<li>
			<a href="page.php" class="active">Home</a>
		</li>	
		
		<li>
			<a href="aboutus.php">About</a>
		</li>	
	</ul>
</div>
</div>
</div>
</div>

<div class="cleared reset-box"></div>
<div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="art-header-inner">
                <div class="art-logo">
                                 <h1 class="art-logo-name"><a href="#">EVENT DISPLAY</a></h1>
                                                 <h2 class="art-logo-text"></h2>
                                </div>
                </div>
            </div>
        </div>
        
    </div>

<div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                
                <div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">
                <div class="widget-content">
  <div id="CustomSearch1_form">
    
  </div>
</div>                

<br>
<br>

<br>
<br>

<?php
$con=mysqli_connect("localhost","root","","tms");
if(mysqli_connect_errno())
{
	echo "Failed To Connect to Mysql: " . mysqli_connect_error();
}



$result=mysqli_query($con,"SELECT * FROM drama;");





if(! $result)
{
  die('ERROR: ' . mysql_error());
}
else
{
echo "<table border='1'>
<tr>
<th>EVENT ID</th>
<th>EVENT TYPE</th>
<th>EVENT NAME</th>
<th>LANGUAGE</th>
<th>PERFORMER</th>
<th>RUNNING TIME</th>
<th>GENRE</th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['did'] . "</td>";
  echo "<td>" . $row['dtype'] . "</td>";
  echo "<td>" . $row['dname'] . "</td>";
  echo "<td>" . $row['lang'] . "</td>";
  echo "<td>" . $row['performer'] . "</td>";
  echo "<td>" . $row['rtime'] . "</td>";
  echo "<td>" . $row['genre'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
  }
  








?>


<div >
<br>
<br>


    
                                		

                



 


<br />

                </div>
                

		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-body">
                    <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                            <div class="art-footer-text">
                                <p></p><p>Website created by Chaitra and Niveditha<br> Copyright © 2014. All Rights Reserved.</p>
                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <div class="cleared"></div>
</div>

</body>
</html>
