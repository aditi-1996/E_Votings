
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<style type="text/css">
</style>
</head>

<body>
 <div id="whole"> 
  <div id="hEa__d">
     <div id="lo__go">
	    <img src="__styles/logo.png" style="position: relative; top:-20px; left:-30px;" />
	 </div>
	 <div id="ba__nner">
	    <img style=" position:relative; top:20px; left:20px;" src="__styles/banner.png" />
	 </div>
  </div>
  <div id="me__nu">
  <div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="index.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/door_in.png" alt=""/>Login</a>
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
	  <div id="recents">
	      <img src="files/NEC.jpg" />
		  <p>The people of a India elect their representatives and these representatives form a government. So, election in a democratic country like India is of utmost importance. <A href="http://eci.nic.in/eci/eci.html">For More</A></p>
	   </div>
	    <div id="recents">
	      <img src="files/NEC1.png" />
		  <p> In Democratic India, general elections take place every five years. All those who are eighteen years of age have a right to vote. A number of candidates seek election.</p>
	   </div>
	   
	   <div id="sliding__imgs">
	     <img src="__styles/vote1.jpg" />
	   </div>
	 </div>
	 <div id="bo__dy_conts">
	 	  
	 <fieldset style="width:400px; margin:auto;">
	 <legend> <h3>Fill out this form to Login:</h3></legend>
	   <form id="vote" method="post" enctype="multipart/form-data">
		  <span class="legend">Enter Username   :<span style="color:#FF0000;">*</span></span><input type="text" name="username" id="votercard" class="desing"  required placeholder="enter card number"><br /><br />
		  <span class="legend">Password:<span style="color:#FF0000;">*</span></span><input type="password" name="password" id="password" class="desing"  required placeholder="enter password"><br /><br />
		   
		  <input type="submit" name="GOBtn" id="GOBtn" value="">
	   </form>
	 </fieldset>
	 
	 
	 </div>
	
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
        <p>Designed by<a href="#" target="_blank"> <b>Nikita Saumya Aditi</b></a>.</p>
  </div>
 </div>
<?php 
include"connection.php";
if (isset($_REQUEST['GOBtn']))
{
$tsd=mysql_query("SELECT * FROM voters WHERE username='$_REQUEST[username]' AND password='$_REQUEST[password]'",$con)or die("Problem with the query :".mysql_error());
$of=mysql_num_rows($tsd);
		if($of>0)
		{
		header("Location:admin.php");
		}
		else
		{
		echo"<font color='red'>Incorrect username or password!</font>";
		}
		mysql_close($con);
		}
?>
</body>
</html>
