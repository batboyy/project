<?php 
include "authentication.php";
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";


$gunimg="link/images/gun.jpg";
$guntitle="<b>Baby dies as gun goes off</b>";
$gunstory="
				<p>
					A three-year-old boy died and next one was injured in Khotang district when a gun kept at their house went off after falling down from its place. </p>";
				
$noc="noc.php";
$nocimg="link/images/noc.jpg";
$noctitle="<b>FM Poudel directs NOC not to distribute bonus</b>";
$nocstory="
				<p>
					Finance Minister Bishnu Prasad Poudel has directed Nepal Oil Corporation (NOC) not to distribute bonus to its employees, a high-level source at the ministry said on Thursday.


				</p>";


$plane="plane.php";
$planeimg="link/images/plane.jpg";
$planetitle="<b>Two pilots killed in second plane crash in three days</b>";
$planestory="<p>	Two pilots were killed when a small passenger plane belonging to Air Kasthmandap 
crash landed in Chilkhaya in Kalikot district on Friday afternoon.</p>";


$madhesi="link/images/madhesi.jpg";
$madhesitit="<p>
				<h3><u><i>PM Oli invites Madhesi parties to join Cabinet</i></u></h3><br/><br/></p>";
$madhesipart="<p>
				

<p> A three-year-old boy died and next one was injured in Khotang district when a gun kept at their house went off after falling down from its place. 

 Prime Minister KP Sharma Oli has called on the disgruntled Madhes-based parties to give up their agitation and come on board the government.

Addressing the CPN-UML’s Lumbini zonal assembly in Bhairahawa on Friday, PM Oli asked the protesters to give up their strikes, shutdowns and violent activities. 

“The Nepali Congress and the Madhes-based parties should join the government with a determination to




</p>
				</p>";

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
			<div class="dropdown" >
  <a href="<?php echo $kcmitnews;?>"><button class="dropbtn">KCMIT News</button>
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
				<a href="<?php echo $gun;?>"><img src="<?php echo $gunimg;?>" width="210px" height="170px" alt=""></a>
				<?php echo $guntitle;?>
				<?php echo $gunstory;?>


			</li>
			<li>
				<a href="<?php echo $noc;?>"><img src="<?php echo $nocimg;?>" width="210px" height="170px"alt=""></a>
				<?php echo $noctitle;?>
				<?php echo $nocstory;?>




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
				<img src="<?php echo $madhesi;?>" width="350px" height="250px"alt="">
				
				<?php echo $madhesitit;?>
				<?php echo $madhesipart;?>





				
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