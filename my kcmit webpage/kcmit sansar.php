<?php
$kcmitnews="kcmit.php";
$football="football.php";
$gun="gun.php";

$col="images/col.jpg";               
$alt1="Welcome to KCMIT Sansar";

$bivek="images/bivek.jpg";          
$kidnapped="bivek.php"; 
$alt2="Student of KCMIT Kidnapped";


$body="images/body.jpg";           
 $taraair="tara.php";
 $alt4="Bodies of Tara Air crew brought to Kathmandu";
 
$football1="images/football1.jpg"; 
 $jhapa="jhapa.php";
 $alt5="Jhapa inch closer to title ";
 
$ebola1="images/ebola1.jpg";      
  $ebola="ebola.php";
  $alt6="Ebola 'devastates long-term health'";


$dogs="images/dogs.png"; 
$dogstitle="<h3>DOGS on Sale!!!</h3>";
$dogstory="
<p><p>I have got 1 boy and 1 girl who has a non moult coat so he is ideal for anyone who suffers from allergies.
Mum is Bubbles who is a very small Maltese.
Dad is Stanley who is also a very little Red Pomeranian.
They are both family pets and the puppies are brought up as part of our family, we have other Dog's a Cat, Horses and children so they are well socialized, confident and happy/</p>

<p>They have been vet checked and have had their 2nd vaccination, they have been regularly wormed and Frontlined.
They will leave me with a Puppy pack containing a generous supply of scientifically balance Puppy food (which they have been weaned onto), a toy, a mother blanket and a health record, they will be micro chipped and have 1 months FREE inI will be very happy to help you with any questions you may have, please.</p> 
<p>CONTACT NO:  9803621736, 01-2141643</p>
				</p>";
				
$visittitle="<p><h2>PM of Nepal to visit India</h2></p>";
$visitstory="
	               <p>
						 On his maiden foreign trip after assuming charge, Nepal Prime Minister K P Oli <br/>will arrive in Delhi on a six-day visit today during which he will hold talks with his<br/> Indian counterpart Narendra Modi on a range of key issues including matters<br/>  relating to the newly adopted constitution of the Himalayan nation.

.
					</p>";

$petrol="images/petrol.jpg";        
$petrolline="petrol.php";
$petrolstory="<p>
	Blockade open but still people on petrol line. If you urgently want petrol then contact or Nischal Bochhiboyya or Bibek luitel(price only Rs.250/-). <span>Call him: N-9847454375,B-9866452314</span>
	</p>";
	
	$footer="<p>
				&copy; KCMIT Sansar.<br/><br/>
				Developers: Sunit, Nischal, Rohan, Bivek<br/><br/>
				All right reserved.
			</p>";
 
?>



<!DOCTYPE html>

<html>
<head>
	
	<title>KCMIT Sansar</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet"  type="text/css" href="css/dropdown.css">

    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

</head>
<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a>KCMIT Sansar</a>
			</div>
			

<div class="dropdown" >
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
</div>		</div>
		<div id="sliderFrame">
        <div id="slider">
            <a href="<?php echo $kcmitnews;?>">
                <img src="<?php echo $col;?>" alt="<?php echo $alt1;?>" />
            </a>
            <a href="<?php echo $kidnapped;?>"> <img src="<?php echo $bivek;?>" alt="<?php echo $alt2;?>" /></a>
			
			 
			
           <a href="<?php echo $taraair;?>"> <img src="<?php echo $body;?>" alt="<?php echo $alt4;?>" /></a>
            <a href="<?php echo $jhapa;?>"><img src="<?php echo $football1;?>" alt="<?php echo $alt5;?>"/></a>
             <a href="<?php echo $ebola;?>" target="_blank"><img src="<?php echo $ebola1;?>" alt=" <?php echo $alt6;?>"/></a>
        </div>
        <div id="phpcaption" style="display: none;">
            <em>php</em> caption. Link to <a href="http://www.google.com/">Google</a>.
        </div>
    </div>

	<div id="body">
		<
		<div>
			<div class="featured">
				<h2>Featured</h2>
				<img src="<?php echo $dogs;?>" width="120px" height="120px"alt="">
				
				<?php echo $dogstitle;?>
				<?php echo $dogstory;?>
				
			</div>
			<div class="section">
				<div class="article">
				
				<?php echo $visittitle;?>
				<?php echo $visitstory;?>
	
					
					
					
				</div>
				<div class="newsletter">
					<a href="<?php echo $petrolline;?>"><img src="<?php echo $petrol;?>" width="150px" height="150px"alt=""></a>
                   <?php echo $petrolstory;?>					
				</div>
			</div>
		</div>
	</div>
	
	<div id="footer">
		<div>
			<div class="connect">
				<a href="http://www.twitter.com" id="twitter">twitter</a>
				<a href="http://www.facebook.com" id="facebook">facebook</a>
				<a href="http://www.googleplus.com" id="googleplus">googleplus</a>
			</div>
			<?php echo $footer;?>
		</div>
	</div>
</body>
</html>