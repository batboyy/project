<?php 
include "authentication.php";
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

$ebola1="images/ebola1.jpg";
$ebolatit="<p><h3>Ebola 'devastates long-term health' </h3></p>";
$ebolapart="
				<p>
				

<p>Feb 25, 2016- Most people who survive an Ebola infection will have long-lasting health problems, say doctors from the US National Institutes of Health.
Their studies on survivors in Liberia showed large numbers had developed weakness, memory loss and depressive symptoms in the six months after being discharged from an Ebola unit.
Other patients were actively suicidal or still having hallucinations.
More than 17,000 people in West Africa have survived Ebola infection.
The evidence, being presented at the annual meeting of the Academy of Neurology, is an early glimpse at a much wider study of long-term health problems after Ebola.
The initial analysis, on 82 survivors, showed most had had severe neurological problems at the height of the infection, including meningitis, hallucinations or falling into a coma.
Six months later, new long-term problems had developed.<br/>
About two-thirds had body weakness, while regular headaches, depressive symptoms and memory loss were found in half of patients.
Two of the patients had been actively suicidal at the time of the assessment.
Dr Lauren Bowen, from the National Institute of Neurological Disorders and Stroke, told the BBC: 'It was pretty striking, this is a young population of patients, and we wouldn't expect to have seen these sorts of problems.
'When people had memory loss, it tended to affect their daily living, with some feeling they couldn't return to school or normal jobs, some had terrible sleeping problems.<br/>
'Ebola hasn't gone away for these people.'
Infection with Ebola ravages the body. Some of the symptoms could improve with time as the body heals, others may be down to social trauma as many survivors are ostracised from their families and communities.
But other symptoms, including eye problems, indicate damage to the brain, which may not heal.<br/>

<b>Sexually active</b><br/>
Meanwhile, data presented earlier, at the Conference on Retroviruses and Opportunistic Infections, raised concerns about sexual transmission of the virus in survivors.
It indicated 38% of men had tested positive for Ebola in their semen on at least one occasion in the year after recovering.
And in the most extreme case, Ebola had been detected 18 months later.
Yet most survivors reported being sexually active, with only four in every 100 using a condom.</p>
				</p>";
		
$homepage="kcmit sansar.php";


?>
<!DOCTYPE HTML>

<html>
<head>
	
	<title>Devastating diseases</title>
	<link rel="stylesheet" href="link/css/ebola.css" type="text/css">
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
				<img src="<?php echo $ebola1;?>" width="200px" height="120px"alt="">
				<?php echo $ebolatit;?>
				<?php echo $ebolapart;?>
				
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