 <?php 
include "authentication.php";
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";


$food="food festival.php"; 
$foodimg ="images/kcmit.jpg";
$foodtitle="	<b>KCMIT college</b>";
$foodstory="<p>KCMIT college announces food festival for upcoming 2072.</p>";

$tourimg="images/ent.jpg";              
$tour="tour.php";          
$tourtitle="<b>KCMIT college Tour</b>"; 
$tourstory="<p>KCMIT college announces tour for BIM/BBA 4th Semeseter.</p>";

$fundimg="images/Nepal.jpg";          
$fund="fund.php";          
$fundtitle="<b>Relief fund for earthquake victims</b>"; 
$fundstory="<p>KCMIT college b   organizing a relief fund programme for the victims of earthquake.</p>";

$bloodimg="images/blood.jpg";
$bloodtit="<p><h3>Blood Donation Programme 2016 </h3><br/></p>";
$bloodpart="<p>


 KCMIT club committe has organized blood donation programme. so,interested students can donate blood because donating blood could save the life of people. so, please donate blood. <br/><br/><br/>DATE:20th JANUARY,2016<br/><br/><br/>

 <b>Donate Blood, Save life.</b>


				</p>";
				
$homepage="kcmit sansar.php";

?>



<!DOCTYPE HTML>

<html>
<head>
	
	<title>Blood Donation Programme</title>
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
				<a href="<?php echo $food;?>"><img src="<?php echo $foodimg;?>" alt=""></a>
				<?php echo $foodtitle;?>
				<?php echo $foodstory;?>
 
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
				<img src="<?php echo $bloodimg;?>" width="600px" height="350px"alt="">
				
				
                 <?php echo $bloodtit;?>
                 <?php echo $bloodpart;?>
				


			</div>
					</div>
	</div>
	<form id="form1" name="form1">
	<tr>
<td align="right"><a href="kcmit sansar.html"><button>SIGN UP</button></a>     </td>
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