<!DOCTYPE html>
<html >
  <head>
    
    <title>Sign Up</title>
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
    
    <form action="signinDB.php" method="post">
      <input type="text" name="fname" placeholder="First name"/>
      <input type="text" name="lname" placeholder="Last name"/>
      <input type="text" name="txtemail" placeholder="Email Address"/>
      <input type="password" name="txtpwd" placeholder="Password"/>
      <input type = "submit" name="submit" value = "submit"/>
      <p class="message">Registered Already? <a href="log.php">Sign In</a></p>
     
    </form>
  </div>
</div>
</body>
</html>
