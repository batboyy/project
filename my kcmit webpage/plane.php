

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
	
$noc="noc.php";
$nocimg="link/images/noc.jpg";
$noctitle="<b>FM Poudel directs NOC not to distribute bonus</b>";
$nocstory="
				<p>
					Finance Minister Bishnu Prasad Poudel has directed Nepal Oil Corporation (NOC) not to distribute bonus to its employees, a high-level source at the ministry said on Thursday.


				</p>";

	
					
$madhesi="madhesi.php";
$madhesiimg="link/images/madhesi.jpg";
$madhesititle="<b>PM Oli invites Madhesi parties to join Cabinet</b>";
$madhesistory="
	<p>
	Prime Minister KP Sharma Oli has called on the disgruntled Madhes-based parties to 
	give up their agitation and come on board the government.
    </p>";
	
$planeimg="link/images/plane.jpg";
$planetit="<p><h3><u>Two pilots killed in second plane crash in three days</u></h3><br/><br/></p>";
$planepart="<p>
				

<p> A three-year-old boy died and next one was injured in Khotang district when a gun kept at their house went off after falling down from its place. 

Two pilots were killed when a small passenger plane belonging to Air Kasthmandap crash landed in Chilkhaya in Kalikot district on Friday afternoon. All nine passengers survived. They have sustained minor injuries. The plane was en route from Nepalgunj to Jumla.

This is the second air accident in three days. 

On Wednesday, a Jomsom-bound Tara Air Twin Otter turboprop plane crashed into a mountainside in Solighopte of Dana VDC in Myagdi district, killing all 23 on board. 

The 9N-AJB Air Kasthmandap’s chartered flight had taken off from Nepalgunj at 12:16pm. 

The deceased crew were identified as Captain Dinesh Neupane, who died on the spot, and Co-pilot Santosh Rana, who died an hour later. 

Initial findings show that the 10-seater single-engine aircraft had developed some technical problem and the pilots had tried to land the plane on a field. “It crashed during an emergency landing,” said Sanjiv Gautam, director general of the Civil Aviation Authority of Nepal. “The technical glitches are yet to be ascertained.” 

The right wheel of the aircraft had hit a hard object (wood logs) on the ground when it landed at a high speed, Gautam said based on reports from the field. “Due to the powerful impact, the aircraft ricocheted, its nose ploughed into the field and the cockpit blew up,” he added. “Otherwise, it would have been a successful emergency landing.” 

According to Gautam, all single-engine aircraft have been grounded for detailed inspection to prevent further accident. The authorities concerned were informed about the crash at 1:30pm, nearly an hour after the aircraft lost its contact with air traffic controller in Nepalgunj. “Had the rescue operation been swift, Co-pilot Rana could have been saved,” said Chandra BK, a local at the crash site. “Rana who had lost consciousness due to the impact died after an hour. He repeatedly called for saving his life.” 

Frantic passengers and locals, with no proper equipment to cut the straps, were left with no option than to leave Neupane in the cockpit. 

A police squad led by ASI Dan Bahadur Bom had reached the area after an hour and a Shree Airlines  helicopter reached after two hours, said DSP Kisan Singh Budal. The bodies of crew and injured passengers were airlifted to Nepalgunj Medical College. It was the third flight of the crew after flying to Simikot twice in the morning.





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
</div>		</div>


	<div id="body">
		<ul>
			<li>
					<a href="<?php echo $gun;?>"><img src="<?php echo $gunimg;?>" width="210px" height="170px" alt=""></a>
				<?php echo $guntitle;?>
				<?php echo $gunstory;?>

			</li>
			<li>
				<a href="<?php echo $noc;?>"><img src="<?php echo $nocimg;?>" width="210px" height="170px"alt=""></a>
				<?php echo $noctitle;?>
				<?php echo $nocstory;?>



			</li>
			<li>
				<a href="<?php echo $madhesi;?>"><img src="<?php echo $madhesiimg;?>" width="210px" height="170px"alt=""></a>
				<?php echo $madhesititle;?>
				<?php echo $madhesistory;?>


			</li>
			
		</ul>
		<div>
			<div class="featured">
				<h2>Featured</h2>
				<img src="<?php echo $planeimg;?>" width="200px" height="120px"alt="">
				
				<?php echo $planetit;?>
				<?php echo $planepart;?>



				
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
				&copy; KCMIT Sansar.
			</p>
		</div>
	</div>
</body>
</html>