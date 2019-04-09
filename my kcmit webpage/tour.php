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

$food="food festival.php.";
$foodimg="images/kcmit.jpg";
$foodtitle="<b>KCMIT college</b";
$foodstory=">
				<p>
					KCMIT college announces food festival for upcoming 2072. 
				</p>";


				
$fundimg="images/Nepal.jpg";          
$fund="fund.php";          
$fundtitle="<b>Relief fund for earthquake victims</b>"; 
$fundstory="<p>KCMIT college b   organizing a relief fund programme for the victims of earthquake.</p>";

 $tourimg="images/ent.jpg";
 $tourtit="<p><h3>College Tour</h3><br/></p>";
$tourpart="<p>


 KCMIT college has a notice for student for BIM/BBA 5th Semester. College has decided to take 5th sem student for tour. so all the students are requested to provide their name to their class representatives if they want to go. similarly, they are requested to select the places where they desire to visit. <br/><br/>
 <b>college administration</b>";
?>


<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>College Tour</title>
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
		<ul>
			<li>
				<a href="<?php echo $blooddonation;?>"><img src="<?php echo $bloodimg;?>" width="210px" height="170px" alt=""></a>
				<?php echo $bloodtitle;?>
				<?php echo $bloodstory;?>

				
			</li>
			<li>
				<a href="<?php echo $food;?>"><img src="<?php echo $foodimg;?>" alt=""></a>
				<?php echo $foodtitle;?>
				<?php echo $foodstory;?>
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
         
		   				<img src="<?php echo $tourimg;?>" width="500px" height="350px"alt="">
				
				<?php echo $tourtit;?>
				<?php echo $tourpart;?>

		   				


				
				

				

 


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
				&copy; KCMIT Sansar.
			</p>
		</div>
	</div>
</body>
</html>