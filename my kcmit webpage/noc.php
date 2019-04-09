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


$nocimg="link/images/noc.jpg";
$noctit="<p><h3>FM Poudel directs NOC not to distribute bonus</h3><br/><br/></p>";
$nocpart="<p>
				

<p> A three-year-old boy died and next one was injured in Khotang district when a gun kept at their house went off after falling down from its place. 

Finance Minister Bishnu Prasad Poudel has directed Nepal Oil Corporation (NOC) not to distribute bonus to its employees, a high-level source at the ministry said on Thursday.

The direction follows the attempt of NOC to distribute bonus among its employees illegally.

Minister Poudel made this direction through Surya Acharya, member of the NOC Board of Directors.

It has been informed that NOC, which is yet to pay off more than Rs 12 billion loan taken from the government, was preparing to distribute more than Rs 900 million bonuses to its employees.





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
				<img src="<?php echo $nocimg;?>" width="200px" height="120px"alt="">
				
				<?php echo $noctit;?>
				<?php echo $nocpart;?>



				
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