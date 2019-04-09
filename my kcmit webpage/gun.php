<?php 
include "authentication.php"; 

?>

<?php
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

$noc="noc.php";
$nocimg="link/images/noc.jpg";
$noctitle="<b>FM Poudel directs NOC not to distribute bonus</b>";
$nocstory="
				<p>
					Finance Minister Bishnu Prasad Poudel has directed Nepal Oil Corporation (NOC) not to distribute bonus to its employees, a high-level source at the ministry said on Thursday.


				</p>";

$madhesi="madhesi.php";
$madhesiimg="link/images/madhesi.jpg";
$madhesititle="<b>PM Oli invites Madhesi parties to join Cabinet</b>";
$madhesistory="
	<p>
	Prime Minister KP Sharma Oli has called on the disgruntled Madhes-based parties to 
	give up their agitation and come on board the government.
    </p>";

$plane="plane.php";
$planeimg="link/images/plane.jpg";
$planetitle="<b>Two pilots killed in second plane crash in three days</b>";
$planestory="<p>	Two pilots were killed when a small passenger plane belonging to Air Kasthmandap 
crash landed in Chilkhaya in Kalikot district on Friday afternoon.</p>";

$gunimg="link/images/gun.jpg";
$guntit="<p>
				<h3><u><i>Baby dies as gun goes off</i></u></h3><br/><br/></p>";
$gunpart="<p>
	
<p> A three-year-old boy died and next one was injured in Khotang district when a gun kept at their house went off after falling down from its place. 

Kaushal Rai, son of Ganga Rai, of Nunthala VDC-6 in the district died after the gun exploded falling from the kitchen. Rabin Rai, 7, has sustained injuries in the incident that occurred on Friday afternoon. 
Local residents said that Kaushal died on the spot while Rabin has sustained injuries on his forehead from the bullet. Police said that condition of Rabin is out of risk. 
Deputy Superintendent of Police (DSP) Bidyananda Majhi of Khotang said that the gun fell down while the two brothers were playing after returning home from their school.


</p>
				</p>
				";

$homepage="kcmit sansar.php";
?>

<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Artifical Shortage of Petrol</title>
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
</div>		</div>


	<div id="body">
		<ul>
			
			<li>
				<a href="<?php echo $noc;?>"><img src="<?php echo $nocimg;?>" width="210px" height="170px"alt=""></a>
				<?php echo $noctitle;?>
				<?php echo $nocstory;?>



			</li>
			<li>
				<a href="<?php echo $madhesi;?>"><img src="<?php echo $madhesiimg;?>" width="210px" height="170px"alt=""></a>
				<?php echo $madhesititle;?>
				<?php echo $madhesistory;?>


			</li>
			<li>
				<a href="<?php echo $plane;?>"><img src="<?php echo $planeimg;?>" width="210px" height="170px" alt=""></a>
				<?php echo $planetitle;?>
				<?php echo $planestory;?>



			</li>
		</ul>
		<div>
			<div class="featured">
				<h2>Featured</h2>
				<img src="<?php echo $gunimg;?>" width="350px" height="250px"alt="">
				
				<?php echo $guntit;?>
				<?php echo $gunpart;?>



				
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
			</p>		</div>
	</div>
</body>
</html>