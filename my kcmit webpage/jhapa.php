<?php 
include "authentication.php"; 
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

$jhapaimg="link/images/football.jpg";
$jhapatit="<p><h3>Jhapa inch closer to title</h3></p>";
$jhapapart="<p>
<p>Feb 25, 2016- Defending champions Jhapa XI inched closer to their second consecutive title defeating Nepal Armed Police Force (AFP) Club 2-0 in the semi-final of the Birat Gold Cup football tournament here on Wednesday.

It was a dejavu for APF, who were beaten by the same scorelines during the final of the Mai Valley Gold Cup in Ilam last month. On Wednesday, Buddha Chemjong and Khamir Gilson Kandangwa scored either side of the break to send the departmental team packing. Jhapa will now take on the winners of Thursday’s second semi-finals between Nepal Police Club and hosts Morang FC in the final on Saturday.
Chemjong put Jhapa ahead early in the 14th minute when his 25-yard shot from the left entered the nets with Aditya Chaudhary’s goalline clearance going in vain. As it seemed, Jhapa were going to win the game with the slim margin, Kandangwa struck on a cross from Karna Limbu in the 87th minute. Kanda-ngwa had replaced Bishal Rai ‘A’ in the 78th minute of the match. Limbu was adjudged the man-of-the-match.
APF were themselves to blame for the defeat as they missed numerous goal scoring opportunities in the game. Santosh Shrestha’s two fine shots sailed inched above the bar in the seventh and 15th minute. In the 52nd minute, Ganesh Lawati’s powerful shot hit the post and unmarked Shrestha’s header in rebound missed the post by few inches.
Jhapa coach Bhagirath Ale praised his boys for playing the game according to the plan. “Our boys displayed the best game technically. We had defeated APF last month in the final of Mai Valley and we were quite confident to beat them this time too,” said Ale.
APF coach Janak Singh rued the missed chances. “We created several scoring opportunities and failed to cash on them,” said Singh. Despite the defeat, APF walked away with a cash prize of Rs 75,000 as the organisers had decided to provide the losing semi-finalists with motivational amount.

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
		
		<div>
			<div class="featured">
				<h2>Featured</h2>
				<img src="<?php echo $jhapaimg;?>" width="500px" height="400px"alt="">
				
				<?php echo $jhapatit;?>
				<?php echo $jhapapart;?>
				
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