<?php 
include "authentication.php";  
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

$tara="link/images/tara.jpg";
$body="link/images/body.jpg";
$taratit="<p><h3>Plane crashes in Nepal midway through 19-minute flight; 23 feared dead

 </h3></p>";
$tarapart="<p>
<h3>Plane crashes in Nepal midway through 19-minute flight; 23 feared dead

 </h3><br/>

 All are feared dead after a Tara Air plane carrying 23 people -- two of them babies -- crashed Wednesday morning in mountainous northern Nepal midway through what should have been a 19-minute flight, officials said.

Most of the 19 bodies retrieved as of early Wednesday evening were charred beyond recognition, said Bishwa Raj Khadka, deputy police superintendent for Myagdi district.<br/><br/>

Search efforts at the crash site some 16,000 feet (4,900 meters) above sea level have been hampered by dense fog, according to Khadka.

Tara Air spokesman Bhim Rai initially said 21 people were on board, with three crew members among them. He updated the number to 23 -- including two foreigners, one Chinese and one Kuwaiti -- after learning that two infants were also on the plane, even if their names were not on the initial report.<br/><br/>

The aircraft was supposed to have flown from Pokhara -- one of the most popular tourist destinations in Nepal -- to Jomsom, the gateway for one of the most popular Himalayan trekking routes.

We are working to assist the families and friends of the passengers and crew, Tara Air said on its website. We cannot undo the pain and grief they feel, but we can share their burden of dealing with this tragedy.



				</p>";
$homepage="kcmit sansar.php";

?>


<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Plane crash at Myagdi</title>
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
		
		<div>
			<div class="featured">
				<h2>Featured</h2>
				<img src="<?php echo $tara;?>" width="400px" height="350px"alt="">
				<img src="<?php echo $body;?>" width="400px" height="350px"alt="">
				
				<?php echo $taratit;?>
				<?php echo $tarapart;?>

				


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