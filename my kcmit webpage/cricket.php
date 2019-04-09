

<?php
include "authentication.php"; 
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";


$footballimg="link/images/gift.jpg";
$footballtitle="<b>World Football</b>";
$footballstory="
				<p>
					This week on BPL,UEFA Champion league and Europa League.

				</p>";
				
$nepalifootball="nepalifootball.php";
$nepalifootballimg="link/images/nepali.png";
$nepalifootballtitle="<b>Nepali Football</b>";	
$nepalifootballstory="
				<p>
					The upcoming nepali football match. 
				</p>";			
				
				


				
$tennis="tennis.php";
$tennisimg="link/images/tennis.jpg";
$tennistitle="<b>Tennis</b>";
$tennisstory="
				<p>Today in tennis world.
			
				</p>";


				
$asia="link/images/asia.jpg";
$as="link/images/as.png";
$aus="link/images/aus.jpg";
$can="link/images/can.jpg";

$crickettit="<p><h3>WT20 ticket process makes life hard for overseas fans</h3></p>";
$cricketpart="<p>
				


<p>Fans travelling from abroad for the World T20 in India have expressed anger and disappointment over the delay in announcing the tournament's schedule and the ambiguity surrounding the ticketing process. 
While the fixtures were announced on December 11 - about three months before the event - the first phase of ticket sales, for matches in Bangalore, Chennai, Dharamsala, Kolkata and Mohali, began only on February 24. 
The second phase of ticket sales, for matches in Mumbai, Delhi and Nagpur, had begun at 12 pm IST on February 26, less than two weeks before the tournament. Tickets for seven high-priority games -
 four India matches, the semi-finals and final - have been put up online through a lottery system, though the results of that process won't be known for a while yet.</p>

<h3>Asia Cup</h3>
<h4>Malinga marks return with match-winning spell against UAE </h4>
<p>At the innings break, UAE would have had hopes of a fourth straight win in the tournament, having restricted Sri Lanka to 129 for 8. 
Those hopes, however, were snuffed out in the first over as Lasith Malinga struck twice to wreck UAE's chase and ultimately lead his side to a 14-run win. 
Malinga marked his return to international cricket with a haul of 4 for 26. </p>


<h3>World series</h3>
<h4>Dominant SA cruise to nine-wicket win</h4>
<p>An England implosion that saw their last seven wickets go down for just 14 runs and a sublime performance with the bat, combining the power of AB de Villiers 
with the elegance of Hashim Amla, saw South Africa seal the two-match T20 series in emphatic fashion. 
Victory meant South Africa won both limited-overs series against England, after losing the Test series, and ended the tour in fine style.</p>
<h4>Australia claim No. 1, McCullum exits</h4>
<p>At once a benediction and a coronation, Brendon McCullum's final moments as a Test cricketer marked Australia's ascendancy to the world No. 
1 Test ranking after a resilient and relentless performance by Steven Smith's men.
It was Smith at the other end as Adam Voges stroked the winning runs through cover after key contributions from Joe Burns and Usman Khawaja.
 A target of 201 was never enough for New Zealand to defend against an Australian batting line-up that has carried much before them since the harsh lessons of England last year.</p>

 
<h3>Nepali cricket</h3>
<h4>ICC responds to Nepal age controversy</h4>

<p>The ICC has said it is satisfied that Nepal Under-19 captain Raju Rijal is eligible to play in the ongoing World Cup in Bangladesh. 
The ICC stated it  looked into the <?php echo 'matter'?> and reviewed Rijal's documents, 
which had been submitted by the Cricket Association of Nepal (CAN) before the tournament, and concluded there was no evidence to suggest that his date of birth - September 26, 1996 - was incorrect</p>	



				</p> ";
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
</div>		</div>


	<div id="body">
		<ul>
			<li>
				<a href="<?php echo $football;?>"><img src="<?php echo $footballimg ;?>" width="210px" height="170px" alt=""></a>
				   <?php echo $footballtitle;?>
				   <?php echo $footballstory;?>

			</li>
			<li>
				<a href="<?php echo $nepalifootball;?>"><img src="<?php echo $nepalifootballimg;?>" width="210px" height="170px" alt=""></a>
					<?php echo $nepalifootballtitle;?>
				<?php echo $nepalifootballstory;?>

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
				<img src="<?php echo $asia;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $as;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $aus;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $can;?>" width="120px" height="120px"alt="">
				
				<?php echo $crickettit;?>
				<?php echo $cricketpart;?>
				
				
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