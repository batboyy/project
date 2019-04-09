<?php
session_start();
$con = mysqli_connect("localhost","root","","kcmit_website") or die(mysqli_error($con));

if(isset($_POST['submit']))
{	
	$redirect = $_POST['redirect'];
	$email=$_POST['txtemail'];
	$password=$_POST['txtpwd'];
	$result = mysqli_query($con,"select * from form where email = '$email' and password = '$password'");
	if(mysqli_num_rows($result)==1)
	{
		//$_SESSION['email'] = $email;
		//$_SESSION['password'] = $password;	
		setcookie('email',$email,time()+30);
		setcookie('password',$password,time()+30);
		header("Refresh:0;URL=$redirect");
		//echo "We are redirecting to your requested page wait for 4 secs";
	}
	else{
		echo "Your Login Details doesnot match try login again!<br/>";
?>
	<!DOCTYPE html>
		<html>
	<head>
		<title>Login Form</title>
    <link rel="stylesheet" href="formcss/style.css">
	<style> 
input[type=submit] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
	</head>
	<body>
	<div class="login-page">
  <div class="form">
		<form action="" method="post">
		<input type = "hidden" name = "redirect" value = "<?php echo $_POST['redirect'];?>"/>
		<input type="text" name="txtemail" placeholder="Email Address"/>
      <input type="password" name="txtpwd" placeholder="password"/>
		<input type = "submit" name="submit" value = "Log In"/>
<p class="message">Not registered? <a href="signup.php">Create an account</a>		
		</form>
		</div>
		</div>
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
		<link rel="stylesheet" href="formcss/style.css">
		<style> 
input[type=submit] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
	</head>
	<body>
	<?php
		if(isset($_GET['redirect']))
			$redirect = $_GET['redirect'];
		else
			$redirect = "kcmit sansar.php";
		
	?>
	<div class="login-page">
  <div class="form">
		
		<form action="" method="post">
		<input type = "hidden" name = "redirect" value = "<?php echo $redirect;?>"/>
		<input type="text" name="txtemail" placeholder="Email Address"/>
      <input type="password" name="txtpwd" placeholder="password"/>
		<input type = "submit" name="submit" value = "Log In"/>
       <p class="message">Not registered? <a href="signup.php">Create an account</a>	
	   </form>
	   </div>
	   </div>
	</body>
</html>
<?php
}
?>