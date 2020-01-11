<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="__styles/functions.js"></script>
</head>
<body>
 <div id="whole">
  <div id="hEa__d">
     <div id="lo__go">
	    <img src="__styles/logo.png" style="position: relative; top:-20px; left:-30px;" />
	 </div>
	 <div id="ba__nner">
	    <img style=" position:relative; top:20px; left:20px;" src="__styles/banner.png"/>
		
	 </div>

  </div>
  <div id="me__nu">
  <div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="index.php" style="width:135px;height:21px;line-height:21px;"  id="active"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Login</a>
		<ul>
		<li class="subfirst"><a href="admin_login.php">Admin</a></li>
		<li><a href="candidate_login.php">Candidate</a></li>
		<li><a href="voter_login.php">Voter</a></li>
	</ul></li>
		
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electrol council</span></a>
	<ul>
		<li class="subfirst"><a href="electHelp.php">Help</a></li>
		<li><a href="electGalery.php">Gallery</a></li>
		<li><a href="electContact.php">Contact</a></li>
	</ul></li>
</ul>
</div>
  
  </div>
  <div id="bo__dy">
     <div id="bo__dy_pub">
	 <form method="post" enctype="multipart/form-data" action="search.php">
				<input type="text" name="search" id="search" class="desing" value=""/>
				<input type="submit" name="searchBtn" id="searchBtn"  value=""/>
	 </form>
	   <div id="recents">
	      <img src="files/NEC.jpg" />
		  <p>The people of a India elect their representatives and these representatives form a government. So, election in a democratic country like India is of utmost importance.<A href="http://eci.nic.in/eci/eci.html">For More</A></p>
	   </div>
	   <div id="sliding__imgs">
	     <a href="voting.php?tsd=voting2"><img  id="slider1" style="position:relative;" src="__styles/vote1.jpg" /></a>
	   </div>
	 </div>
	<div id="bo__dy_conts">
	    <div id="HEa__DER"><h2> What is Online voting</h2></div>
		<div id="PiC__cont">
		   <ul class="imageslider" style="margin-left:0px;">
		      <li class="slide"><img src="files/81.jpg" /></li>
			  <li class="slide"><img src="files/82.jpg" /></li>
			  <li class="slide"><img src="files/79.jpg" /></li>
			  <li class="slide"><img src="files/80.jpg" /></li>
		   </ul>
		 </div>
		<div id="CO__nt">
		    <p  style="box-shadow:0px 0px 5px #000;">Online voting is a term encompassing several different types of voting embracing both online means of casting a vote and online means of counting votes.Thus our application enables everyone to vote effortlessly and with full transparency.</p>
		</div>
	 </div>
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, Online voting</p>
        <p>Designed by<a href="#" target="_blank"> <b>Nikita Saumya Aditi</b></a>.</p>
		
  </div>
 </div>

</body>
</html>
