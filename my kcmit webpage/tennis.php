<?php 
include "authentication.php"; 
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

$football="football.php";
$footballimg="link/images/gift.jpg";
$footballtitle="<b>World Football</b";
$footballstory="<p>This week on BPL,UEFA Champion league and Europa League.</p>";
				
$nepalifootball="nepalifootball.php";
$nepalifootballimg="link/images/nepali.png";	
$nepalifootballtitle="<b>Nepali Football</b>";			
$nepalifootballstory="<p>
					The upcoming nepali football match. 
				</p>";
				
$cricket="cricket.php";				
$cricketimg="link/images/icc.jpg";
$crickettitle="<b>Cricket</b>";
$cricketstory="<p>ICC World cup 20-20 2016 india preparations.
				</p>";
				
$dark="link/images/dark.jpg";
$dj="link/images/dj.jpg";
$ej="link/images/ej.jpg";


$tennistit="<p><h3>Dark Days Behind Baghdatis As He Reaches Dubai Final</h3></p>";
$tennispart="<p>
		<b>Cypriot through to biggest final in six years</b>
<p>Former World No. 8 Marcos Baghdatis is through to his biggest ATP World Tour final since 2010 after defeating Feliciano Lopez 3-6, 7-6(1), 6-1 on Friday in the semi-finals of the Dubai Duty Free Tennis Championships.
The Cypriot is through to his first ATP World Tour 500 final since finishing runner-up at the Citi Open in Washington six years ago.
Looking to win his fifth ATP World Tour title (4-8 finals record), Baghdatis will face second seed Stan Wawrinka on Saturday. The right-hander will need to overturn a 0-5 FedEx ATP Head2Head record against Wawrinka.
It's amazing, said Baghdatis. It's been a long road for me the past three, four years. It's all about fighting, getting back to where I want to be. Last year we set some goals to be Top 50 with my team. I achieved that. </p>

<b>Djokovic Forced Out Of Dubai By Eye Ailment</b>
<b>Serb’s final streak snapped</b>
<p>Novak Djokovic’s streak of ATP World Tour finals reached will end at 17 after the World No. 1 retired against Feliciano Lopez in the quarter-finals of the Dubai Duty Free Tennis Championships on Thursday. The Serb was down 3-6 before retiring.
“It's an eye problem,” Djokovic said. “I have had it ever since I arrived in Dubai. It started with an infection and then severe allergy.
“It's gotten worse in the last two days, unfortunately. It's the first time that I have had such a problem with the eye. It was ultra-sensitive today.”
Djokovic, who held a 14-0 record on the year and led the FedEx ATP Head2Head rivalry 7-0 against Lopez coming into the match, was sad to see his run of success come to an end, but the four-time Dubai champion was more concerned about disappointing his fans. </p>


<b>Carreno Busta Advances To Sao Paulo Final Four</b>
<b>
Spaniard awaits the winner of fourth seed Federico Delbonis or Inigo Cervantes</b>

<p>Pablo Carreno Busta ended lucky loser Roberto Carballes Baena’s campaign in Sao Paulo on Friday with a 6-0, 6-3 win over his fellow Spaniard to reach the semi-finals of the Brasil Open. Carreno Busta capitalised on all four of his break point chances and faced no break points in the 51-minute victory. He will next face the winner of fourth seed Federico Delbonis and Inigo Cervantes.
The 24-year-old Carreno Busta reached his first ATP World Tour singles semi-final since Estoril last year (l. to Kyrgios) and is bidding to reach his first tour-level final.</p>

 
<b>Asian Games - Lawn Tennis</b>


<p> 
Nepal lost both the matches in the womens singles in the Asian game on Thursday. Ashlesha Lissanevitchs challenge was ended 6-0, 6-0 by Swei Peng of China while Mallika Rana was thumped 6-0,
 6-0 by Suai Jhan also of the host country.</p>


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
</div>		</div>



	<div id="body">
		<ul>
				<li>
				<a href="<?php echo $football;?>"><img src="<?php echo $footballimg;?>" width="210px" height="170px" alt=""></a>
				   <?php echo $footballtitle;?>
				   <?php echo $footballstory;?>

			</li>
			
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
			
		</ul>
		<div>
			<div class="featured">
				<h2>Featured</h2>
				<img src="<?php echo $dark;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $dj;?>" width="120px" height="120px"alt="">
				<img src="<?php echo $ej;?>" width="120px" height="120px"alt="">
				
				
				<?php echo $tennistit;?>
				<?php echo $tennispart;?>
				
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