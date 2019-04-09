<?php 
include "authentication.php";
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";




$bivekimg="link/images/bivek.jpg";
$bivektit="<p><h3><u>Kidnapped of Bivek Luitel</u></h3></p>  "   ;
$bivekpart="<p>
   Bivek luitel who is 20 years old has been kidnapped while he was going to his home (lokantahli,koteshwor) from KCMIT college. During the college he had fight with his collegues. Still the kidnappers hasnot asked for extoction money. Police is searching him everywhere he could be. Police has suspected some to the people. They are ALiss niraula, Govinda lamminchanne, Satish Nepal and Asmit chalise. Police has been asking them about Bibek since 2 days. If any body gets to know about him then please dont call me, call to police.

				</p>";
				
				
			
$homepage="kcmit sansar.php";

?>


<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>welcome to KCMIT Sansar</title>
	<link rel="stylesheet" href="link/css/stylesh.css" type="text/css">
	<link href="link/themes/1/jsslider.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet"  type="text/css" href="link/css/dropdownmenu.css">

    <script src="link/themes/1/js-image-slider.js" type="text/javascript"></script>

</head>
<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="<?php echo $homepage;?>">KCMIT Sansar</a>
			</div>
			<div class="dropdown">
  <a href="<?php echo $kcmitnews;?>"><button class="dropbtn">KCMIT News </button></a>
  <div class="dropdown-content">
    
  </div>
</div>

<div class="dropdown" >
  <a href="<?php echo $football;?>"><button class="dropbtn">Sports</button></a>
  <div class="dropdown-content">
      </div>
</div>

<div class="dropdown" >
  <a href="<?php echo $gun;?>"><button class="dropbtn">National</button></a>
  <div class="dropdown-content">
    
  </div>
</div>

		</div>


	<div id="body">
		
		<div>
			<div class="featured">
				<h2>Featured</h2>
				<img src="<?php echo $bivekimg;?>" width="500px" height="350px"alt="">
				
				 <?php echo $bivektit;?>
                <?php echo $bivekpart;?>
				


			</div>
					</div>
	</div>
	<form id="form1" name="form1">
	<tr>
<td align="right" valign="top"><label for="comment" style="font-size: small">Comments:</label></td>
<td>
<textarea name="comment" id="comment" rows="4"></textarea>
</td>
</tr>
<tr>
<td align="right"><input type="submit" name="submit"value="submit"></td>
<td>
<input type="reset" name="reset" value="Clear">
</td>
</tr><br/><br/>
</form>
	
	
	<div id="footer">
		<div>
			<div class="connect">
				<a href="http://www.twitter.com" id="twitter">twitter</a>
				<a href="http://www.facebook.com" id="facebook">facebook</a>
				<a href="http://www.googleplus.com" id="googleplus">googleplus</a>
			</div>
			<p>
				&copy; KCMIT Sansar.<br/><br/>
				Developers: Sunit, Nischal, Rohan, Bivek<br/><br/>
				All right reserved.
			</p>
		</div>
	</div>
</body>
</html>