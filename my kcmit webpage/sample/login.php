<?php
session_start();
$con = mysqli_connect("localhost","root","","userdb") or die(mysqli_error($con));

if(isset($_POST['submit']))
{	
	$redirect = $_POST['redirect'];
	$uname=$_POST['txtuname'];
	$password=$_POST['txtpwd'];
	$result = mysqli_query($con,"select * from user where uname = '$uname' and password = '$password'");
	if(mysqli_num_rows($result)==1)
	{
		//$_SESSION['uname'] = $uname;
		//$_SESSION['password'] = $password;	
		setcookie('uname',$uname,time()+120);
		setcookie('password',$password,time()+120);
		header("Refresh:0;URL=$redirect");
		//echo "We are redirecting to your requested page wait for 4 secs";
	}
	else{
		echo "Your Login Details doesnot match try login again!<br/>";
?>
	<!DOCTYPE html>
		<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form action="" method="post">
		<input type = "hidden" name = "redirect" value = "<?php echo $_POST['redirect'];?>"/>
		email/username: <input type = "text" name="txtuname"/><br/>
		password: <input type = "password" name="txtpwd"/><br/>
		<input type = "submit" name="submit" value = "submit"/>	
		</form>
	</body>
</html>
<?php
		}
}
else
{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
	<?php
		if(isset($_GET['redirect']))
			$redirect = $_GET['redirect'];
		else
			$redirect = "homepage.php";
	?>
		<h3>Login to Get through to the web page</h3>
		<form action="" method="post">
		<input type = "hidden" name = "redirect" value = "<?php echo $redirect;?>"/>
		email/username: <input type = "text" name="txtuname"/><br/>
		password: <input type = "password" name="txtpwd"/><br/>
		<input type = "submit" name="submit" value = "submit"/>	
		</form>
	</body>
</html>
<?php
}
?>