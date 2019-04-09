<?php
include "authentication.php"; 
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

$blooddonation="blood donation.php";
$bloodimg="images/blood.jpg";
$bloodtitle="<b>Blood Donation Programme 2016</b>";
$bloodstory="
				<p>
					KCMIT club has organized  Blood Donation Programme.

				</p>";
				
				
$tourimg="images/ent.jpg";              
$tour="tour.php";          
$tourtitle="<b>KCMIT college Tour</b>";
$tourstory="
				<p>
					KCMIT college announces tour for BIM/BBA 5th Semeseter.
				</p>";

$fundimg="images/Nepal.jpg";          
$fund="fund.php";          
$fundtitle="<b>Relief fund for earthquake victims</b>";
$fundstory="
				<p>
					KCMIT college has organized a relief fund programme for the victims of earthquake. Interest student cand donate clothes,food and other necessary stuff.
				</p>";





$foodimg="images/food.jpg";
$foodtit="<p><h3>food festival in KCMIT college </h3></p><br/>";
$foodpart="

 The Kantipur College of Management and Information Technology (KCMIT) college has  set up food festival for the students organized by BIM 3rd Semester. If any student is interested then he/she can set a stall(Rs.300 per stall) for selling foods. Each student needs to sell 3 tickets to invite their friends, family or other people. <br/><br/><br/>

 Date: 1st june, 2016<br/><br/><br/>
 Venue:KCMIT Premises<br/><br/><br/>
 Time:from 9am To 4Pm";
 
 $homepage="kcmit sansar.php";
 
?>


<!DOCTYPE HTML>

<html>
<head>
	
	<title>food festival Programme</title>
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
			<div class="dropdown" >
  <a href="<?php echo $kcmit1;?>"><button class="dropbtn">KCMIT News</button>
  <div class="dropdown-content">
    
  </div>
</div>

<div class="dropdown" >
  <a href="<?php echo $football;?>"><button class="dropbtn">Sports</button>
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
		<ul>
		<li>
				<a href="<?php echo $blooddonation;?>"><img src="<?php echo $bloodimg;?>" width="210px" height="170px" alt=""></a>
				
				<?php echo $bloodtitle;?>
				<?php echo $bloodstory;?>

 
				</p>
			</li>
			<li>
				<a href="<?php echo $tour;?>"><img src="<?php echo $tourimg;?>" width="210px" height="170px"alt=""></a>
			
				<?php echo $tourtitle;?>
				<?php echo $tourstory;?>

				</p>
			</li>
			<li>
				<a href="<?php echo $fund;?>"><img src="<?php echo $fundimg;?>" width="210px" height="170px" alt=""></a>
				
				<?php echo $fundtitle;?>
				<?php echo $fundstory;?>


			</li>
			
		</ul>
		<div>
			<div class="featured">
				<h2>Featured</h2>
<img src="<?php echo $foodimg;?>" width="350px" height="250px"alt="">   
				<p>

                <?php echo $foodtit;?>
                <?php echo $foodpart;?>


				</p>
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