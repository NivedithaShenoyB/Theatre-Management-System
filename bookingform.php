<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    
    <title>Booking Form</title>



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
			<a href="home.php" class="active">Home</a>
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
                                 <h1 class="art-logo-name"><a href="#">Booking</a></h1>
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

<form action="ticketbooked.php"  method="post">
<fieldset>
<legend>Information:</legend>

<br>
Customer Name:<input type="text" name="cname"><br>
<br>
Customer Id:<input type="text" name="cid"><br>
<br>
Phone Number:<input type="text"pattern="\d+"maxlength="10" name="phone"><br>
<br>
Email Address:<input type="email" name="email"><br>
<br>
Hall No:<input type="text" name="hallno"><br>
<br>
Price:<input type="text" name="price"><br>
<br>
Seat Number:<input type="text" name="seatno" ><br>
<br>


Theatre Id:<input type="text" name="t_id"><br>
<br>
Show Id:<input type="text" name="show_id"><br>
<br>
Employee Id:<input type="text" name="e_id"><br>
<br>


<input type="submit">

</fieldset>
</form>

<div >
<br>
<br>
<a href="checkseats.php">
   <button>CHECK SEATS</button>
</a>
<a href="showdisplay.php">
   <button>SHOWS DISPLAY</button>
</a>


<a href="ticketdisplay.php">
   <button>SHOW TICKETS</button>
</a>
<a href="page.php">
   <button>HOME</button>
</a>


    
                                		

                



 


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
