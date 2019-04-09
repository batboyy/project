<?php
include "authentication.php"; 
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

$petrol="images/petrol.jpg";
$petrool="images/petrool.jpg";
$petroltitle="<p><h3>People on Petrol Queue.</h3><br/><br/></p>";
$petrolpart="<p>
				

<p> Motorists queued up at refuelling stations on Wednesday too amid rumours the Nepal Oil Corporation (NOC) would extend the distribution for another day.
Prem Shrestha, who queued up his motorbike at Trilochan Enterprises, Panipokhari, said he could not receive petrol on Tuesday despite waiting for more than 12 hours.
Petroleum dealers blamed the NOC’s mismanagement for “severe pressure” at petrol pumps.
Lilendra Prasad Pradhan, president of Nepal Petroleum Dealers’ Association, said only 40 percent of the people who lined up on Tuesday got fuel.
“Had the NOC distributed petroleum to two- and four-wheelers on different days or had it implemented even-odd number system, the distribution would have been much easier,” he said.
The NOC had distributed fuel to private vehicles on Tuesday under quota system (5 litres for two-wheelers and 15 litres for four-wheelers). It distributed a total of 600,000 litre of fuel.
Consumer rights activists also criticised the NOC for the mismanagement. Madhav Timilsina, president of the Consumers’ Right Investigation Forum, said the
distribution just created chaos among the people.
An NOC official, however, said the fuel distribution was targeted at people who planned to leave the valley for their homes for Dashain.
An NOC source said it would distribute fuel to private motorists next week if supply increases.

http://bit.ly/1k61IOM</p>
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
  <a href="<?php echo $kcmit1;?>"><button class="dropbtn">KCMIT News</button>
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
		
		</ul>
		<div>
			<div class="featured">
				<h2>Featured</h2>
				<img src="<?php echo $petrol;?>" width="200px" height="120px"alt="">
				<img src="<?php echo $petrool;?>" width="220px" height="120px"alt="">
				
				<?php echo $petroltitle;?>
				<?php echo $petrolpart;?>
				
				
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