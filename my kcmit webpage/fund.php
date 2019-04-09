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

$tour="tour.php";
$tourimg="images/ent.jpg";
$tourtitle="<b>KCMIT college Tour</b>";
$tourstory="
				<p>
					KCMIT college announces tour for BIM/BBA 5th Semeseter.
				</p>";

$fundimg="images/nepal.jpg";
$fundtit="<p><h3>Relief Fund to earthquake victims.</h3><br/></p>";
$fundpart="<p>


 KCMIT club has organized a relief fund programme for the victims of earthquake. Interest student cand donate clothes,food and other necessary stuff. <br/><br/>
 <b>KCMIT Club committe</b>";
 
 
 $homepage="kcmit sansar.php";






 ?>

<!DOCTYPE HTML>
 
<html>
<head>
	<meta charset="UTF-8">
	<title>AID to earthquake victims</title>
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
  <a href="<?php echo $kcmit1;?>"><button class="dropbtn">KCMIT News </button></a>
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
				<a href="<?php echo $foodfestival;?>"><img src="<?php echo $foodimg;?>" alt=""></a>
				<?php echo $foodtitle;?>
				<?php echo $foodstory;?>
			</li>
			<li>
				<a href="<?php echo $tour;?>"><img src="<?php echo $tourimg;?>" width="210px" height="170px"alt=""></a>
				<?php echo $tourtitle;?>
				<?php echo $tourstory;?>
			</li>
			
		</ul>
		<div>
			<div class="featured">
				<h2>Featured</h2>

				
				
<img src="<?php echo $fundimg;?>" width="350px" height="250px" alt="">
			<?php echo $fundtit;?>	
			<?php echo $fundpart;?>	

 


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