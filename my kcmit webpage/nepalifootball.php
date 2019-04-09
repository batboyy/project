 <?php
 include "authentication.php";
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

				
$football="football.php";
$footballimg="link/images/gift.jpg";
$footballtitle="<p><b>World Football</b></p>";
$footballstory="<p>This week on BPL,UEFA Champion league and Europa League.</p>";
				
$cricket="cricket.php";				
$cricketimg="link/images/icc.jpg";
$crickettitle="<p><b>Cricket</b></p>";
$cricketstory="<p>
				ICC World cup 20-20 2016 india preparations.
				</p>";
				
$tennis="tennis.php";
$tennisimg="link/images/tennis.jpg";
$tennistitle="<p><b>Tennis</b></p>";
$tennisstory="
				<p>Today in tennis world.
			
				</p>";
				
$trio="link/images/trio.jpg";
$charity="link/images/charity.jpg";
$nfa="link/images/nfa.jpg";
$team="link/images/team.jpg";

$nepalifootballtit="<p><h3>Young Trio called in Spain</h3></p>";
$nepalifootballpart="<p>
				


<p>26 Feb, 2016 - Three members of Victorious SAFF U19, Bangabandhu Gold Cup and 12th SAG Football have been called up by Marbella United FC of Spain.
U19 Skipper Bimal Gharti Magar, Ananta Tamang and Anjan Bista have been contacted by the Spanish outfit.
 Magar will decide to sign a contract upon his arrival in Spain while Anjan and Ananta will train with the club for around 2 months.
The players will be in Spain from March 5 to April 30. They will also visit the Netherlands with the club in a friendly series from 13 to 31 March..</p>

<h3>Cash raised to honor Nepal team</h3>

<p>Feb. 25, 2016 - The organizers of the Birat Gold Cup and football fans of the area raised Rs. 734,000 to honor the Nepal team which recently won the South Asian Games gold medal.
Organizer Morang District Football Association chipped in Rs 200,000, while the remaining amount came from fans and well-wishers. 
The money was handed over the ANFA general secretary Dhirendra Pradhan and Treasurer Birat Jung Shahi.. </p>


<h3>'We will arrange for more friendlies'</h3>

<p>Feb. 24, 2016 - A three-member delegation headed by ANFA Acting President Narendra Shrestha left for Zurich, Switzerland, on Wednesday to participate in the FIFA Extraordinary Congress scheduled to take place there on February 26.

Before the departure, Shrestha said that the congress will be a good opportunity to arrange friendly matches for Nepal.

“As there will be representatives from the entire member associations of the FIFA, the Congress will be a good opportunity to arrange friendly matches for Nepal in the days to come. It will also serve as the platform to nurture healthy relations with the other member associations,” he said.

As the Nepal national team will be without any international tournaments for the next two years until the SAFF Championship in 2017, the ANFA will be keeping the team busy with International Friendly matches.

ANFA will be backing AFC President Sheikh Salman in the Congress.</p>

 
<h3>Nepal to play Malaysia in March</h3>


<p> Feb 23, 2016 - The Football Association of Malaysia has invited the Nepal National Football Team to play a friendly against its National Team in Kuala Lumpur on March 29.

The Nepal National Team, which had recently won the Bangabandhu Gold Cup in Dhaka in January, is taking the friendly as preparations for the SAFF Championship.

As the senior team does not have international tournaments for two years, the ANFA will be keeping them busy with International Friendlies in between.

The preliminary squad will be called up on first week of March.</p>


				</p>";
				
$homepage="kcmit sansar.php";

				
?>

<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
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
				<a href="<?php echo $football;?>"><img src="<?php echo $footballimg ;?>" width="210px" height="170px" alt=""></a>
				   <?php echo $footballtitle;?>
				   <?php echo $footballstory;?>
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
				<img src="<?php echo $trio;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $charity;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $nfa;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $team;?>" width="120px" height="120px"alt="">
				
				<?php echo $nepalifootballtit;?>
				<?php echo $nepalifootballpart;?>
				
				
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