<?php
session_start();
$admin_username="admin";
$admin_password="12345";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST['username'];
$password=$_POST['password'];
 if(($username==$admin_username&&$password==$admin_password))
 {
 $_SESSION['username']=$username;
 header("location:dashboard.php");
 exit();
 }
 else{
 echo "<script>alert('invalid username or password!');</script>";
 }
 }
 ?>
 <html>
 <head>
 <title>admin login</title>
 </head>
 <body>
 <form method="POST" action="">
	<label>username:</label><br>
	<input type="text" name="username" required><br><br>
	<label>password:</label><br>
	<input type="password" name="password" required><br><br>
	<input type="submit" value="login">
	</form>
</body>
</html>
