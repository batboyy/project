<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pwd=$_POST['txtpwd'];
$email=$_POST['txtemail'];
	
	$con=mysqli_connect("localhost","root","","kcmit_website") or die("Connection to Server failed");	
	
	$insert = "insert into form(fname,lname,email,password) values ('$fname','$lname','$email','$pwd') ";
	mysqli_query($con,$insert) or die(mysqli_error($con));
	echo "Your Account Has Been Created.... ";
	
	
	
?>