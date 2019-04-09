<?php
session_start();
if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
{
	
}
else
{
	$redirect = $_SERVER['PHP_SELF'];
	header("Refresh:0; URL=log.php ?redirect=$redirect");
	die();
}

?>