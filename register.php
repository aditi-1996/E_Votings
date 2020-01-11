<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<style type="text/css">
div#bo__dy div#bo__dy_conts {overflow: scroll;}
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
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
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
	  <?php 
if(isset($_POST['Register']))
{
include"connection.php";
$one=mysql_query("
INSERT INTO `election`.`voter` ( `VoterCard`, `Name`, `Type`, `DoB`, `State`,`VotingCenter`, `pob`, `password`) VALUES ( '$_REQUEST[VoterCard]', '$_REQUEST[username]', '$_REQUEST[type]', '$_REQUEST[DoB]', '$_REQUEST[State]', '$_REQUEST[VotingCenter]', '$_REQUEST[pob]', '$_REQUEST[password]');",$con)or die(mysql_error());
if($one)
{
echo"<center><u><h4><font color='#003300'><H3>Congratulation,</h3></font></h4></u></center>";
echo"<center><u><h4><font color='#003300'><H3>Your Account Has Been Successfully Created to Vote!,</h3></font></h4></u></center>";
echo"<p><font color='#003300'><p>Now you are an Active Member Of E-VOTING SYSTEM; which give you a power to Vote online and view
your Candidate Status on this website.</p></font></p>";

}
mysql_close($con);
}
?>
	 <fieldset><legend><h3>Register here</h3></legend>
<form method="post" enctype="multipart/form-data"><table width="500" height="100" background bgcolor="#FFFFFF"align="center"  bgcolor="#CCCCCC">
<tr><td><span class="legend">Name :<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="username" class="desing" required /></td></tr><tr>
<tr><td><span class="legend">VoterCard :<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="votercardnumber" class="desing" required /></td></tr><tr>
<td><span class="legend">Age<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="age" class="desing" required/></td></tr><tr>
<td><span class="legend">State<span style="color:#FF0000;">*</span></span></td><td><select name="address" class="desing" required><option value="0101">Delhi</option>
					<option value="0102">Chandigarh</option>
					<option value="0103">Maharashtra</option>
					<option value="0201">Madhya Pradesh</option>
					<option value="0202">Kerala</option>
					<option value="0203">Karnataka</option>
					<option value="0204">Jharkhand</option>
					<option value="0205">Jammu & Kashmir</option>
					<option value="0206">Arunachal Pradesh</option>
					<option value="0207">Himachal Pradesh</option>
					<option value="0208">Gujurat</option>
					<option value="0301">Goa</option>
					<option value="0302">Chattisgarh</option>
					<option value="0303">Bihar</option>
					<option value="0304">Assam</option>
					<option value="0305">Andhra Pradesh</option>
					<option value="0306">Manipur</option>
					<option value="0307">Meghalaya</option>
					<option value="0401">Mizoram</option>
					<option value="0402">Orissa</option>
					<option value="0403">Punjab</option>
					<option value="0404">Rajasthan</option>
					<option value="0405">Sikkim</option>
					<option value="0501">Tamil Nadu</option>
					<option value="0502">Telengana</option>
					<option value="0503">Tripura</option>
					<option value="0504">Uttarakhand</option>
					<option value="0505">Uttar Pradesh</option>
					<option value="0506">West Bengal</option>
					<option selected="selected" value=""></option></select></td></tr><tr>

		</select>
		<td><span class="legend">Register Type<span style="color:#FF0000;">*</span></span></td><td><select name="type" class="desing" required><option value="0101">Voter</option>
					<option value="0102">Admin</option>
					<option value="0103">Candidate</option>
					<option value="0201">Officer</option>
					<option selected="selected" value=""></option></select></td></tr><tr>

		</select>
</td></tr><tr>

<td><span class="legend">VotingCenter <span style="color:#FF0000;">*</span></span></td><td><input type="text" name="VotingCenter"  class="desing" required /></td>
<tr><td><span class="legend">PoB<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="pob"  class="desing" required /></td></tr>
<tr><td><span class="legend">Voting Pin<span style="color:#FF0000;">*</span></span></td><td><input type="password" name="password"  class="desing" required /></td></tr>
</b></tr><tr>
<td height="26"><input type="submit" value="" name="Register" id="SaveBTN"/></td>
<td><input type="reset" value="" name="" id="canselBTN"/></td></tr>
</tr></table></form>

	 </div>
	
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, Online voting</p>
        <p>Designed by<a href="#" target="_blank"> <b >Nikita Saumya Aditi</b></a>.</p>
  </div>
</div>
</body>
</html>