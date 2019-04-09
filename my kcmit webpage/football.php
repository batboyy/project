<?php 
include "authentication.php"; 

?>

<?php
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

				
$nepalifootball="nepalifootball.php";
$nepalifootballimg="link/images/nepali.png";
$nepalifootballtitle="<b>Nepali Football</b>";	
$nepalifootballstory="
				<p>
					The upcoming nepali football match.
				</p>";	
				
$cricket="cricket.php";				
$cricketimg="link/images/icc.jpg";
$crickettitle="<b>Cricket</b>";
$cricketstory="
				<p>
					ICC World cup 20-20 2016 india preparations.
				</p>";
				
$tennis="tennis.php";
$tennisimg="link/images/tennis.jpg";
$tennistitle="<b>Tennis</b>";
$tennisstory="
				<p>Today in tennis world.
			
				</p>";
				
$europa="link/images/europa.jpg";
$bpl="link/images/bpl.jpg";
$uefa="link/images/uefa.jpg";

$footballtit="<p><h3>Europa Cup</h3></p>";
$footballpart="<p>
				


<p>Marcus Rashford scored twice on his debut as Manchester United beat Midtjylland 5-1 to qualify for the last 16 of the Europa League with a 6-3 aggregate victory.
Liverpool progressed to the last 16 of the UEFA Europa League after beating Augsburg 1-0 at Anfield thanks to James Milner's penalty.
Tottenham advanced to the last 16 of the Europa League after a comfortable 3-0 second-leg win over Fiorentina at White Hart Lane.</p>

<h3>This week in BPL </h3>
<h4>Sat 27 Feb 2016  </h4>
<p>West Ham v Sunderland</p>
<p>Leicester v Norwich	</p>
<p>Southampton v Chelsea	</p>
<p>Stoke v Aston Villa	</p>
<p>Watford v Bournemouth	</p>
<p>West Brom v Crystal Palace</p>
<h4>Sun 28 Feb 2016</h4>	
<p>Liverpool v Everton</p>	
<p>Newcastle v Man City</p>
<p>Man Utd v Arsenal</p>
<p> Spurs v Swansea</p>

<h3>Champions league</h3>
<h4>UEFA CHAMPIONS LEAGUE - ROUND OF 16 Results</h4>
<p>Wednesday 24 February                      
Dynamo Kiev 1-3 Man City
PSV Eindhoven 0-0 Atl Madrid</p>
<p>Tuesday 23rd February 2016
Arsenal 0-2 Barcelona
Juventus 2-2 Bayern Mun</p>
<p>Wednesday 17th February 2016
KAA Gent 2-3 VfL Wolfsburg
Roma 0-2 Real madrid</p>

<h4>Fixture</h4>
<p>Tuesday 8th March 2016
Real Madrid v Roma
VfL Wolfsburg v KAA Gent</p>	
<p>Wednesday 9th March 2016
Zenit St P v Benfica
Chelsea v Paris St </p>	
<p>Tuesday 15th March 2016
Atl Madrid v PSV Eindhoven
Man City v Dynamo Kiev</p>	
<p>Wednesday 16th March 2016
Barcelona v Arsenal
Bayern Mun v Juventus</p>


				</p>";
$homepage="kcmit sansar.php";

?>

<!DOCTYPE HTML>

<html>
<head>
	
	<title>Sports News</title>
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
				<a href="<?php echo $nepalifootball;?>"><img src="<?php echo $nepalifootballimg;?>" width="210px" height="170px" alt=""></a>
				<?php echo $nepalifootballtitle;?>
				<?php echo $nepalifootballstory;?>
			</li>
			<li>
				<a href="<?php echo $cricket;?>"><img src="<?php echo $cricketimg;?>" width="210px" height="170px"alt=""></a>
				<?php echo $crickettitle;?>
				<?php echo $cricketstory;?>
			</li>
			<li>
				<a href="<?php echo $tennis;?>"><img src="<?php echo $tennisimg;?>" width="210px" height="170px" alt=""></a>
				<?php echo $tennistitle;?>
				<?php echo $tennisstory;?>

			</li>
		</ul>
		<div>
			<div class="featured">
				<h2>Featured</h2>
				<img src="<?php echo $europa;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $bpl;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $uefa;?>" width="120px" height="120px"alt="">
				
				<?php echo $footballtit;?>
				<?php echo $footballpart;?>


				
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