<?php
session_start();
if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
	
}
else
{
	$redirect = $_SERVER['PHP_SELF'];
	header("Refresh:0; URL=login.php?redirect=$redirect");
	die();
}

?>