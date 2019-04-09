<?php
session_start();
if(isset($_COOKIE['uname']) && isset($_COOKIE['password']))
{
	
}
else
{
	$redirect = $_SERVER['PHP_SELF'];
	header("Refresh:2; URL=login.php?redirect=$redirect");
	echo "You need to login to view this page,please wait!!!";
	die();
}

?>