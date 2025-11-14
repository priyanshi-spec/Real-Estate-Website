<?php
session_start();
$admin_username="priyanshi";
$admin_password="12345";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST['username'];
$password=$_POST['password'];
 if(($username==$admin_username&&$password==$admin_password))
 {
 $_SESSION['username']=$username;
 header("location:admindashboard.php");
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
 <script>
 function myfunction()
{
  window.location.href = "panel/admindashboard.php";
   }

 </script>
 <style>
 body{
	background-image:url('../../images/estate.jpg');
}
.container{
	background-color:beige;
	border:2px solid black;
	
	 margin: 15px auto;
	padding:15px;
	margin-top:10%;
	text-align:center;
	max-width:40%;
	height:50%;
	}
 	
 label{
	padding:10px;
	}
	h1{
	text-align:center;
	color:#0B092A;
}
	h4{
	text-align:center;
	color:#0B092A;
}
 
 
 </style>
 </head>
 <body>
  <div class="container">
   <h1>Admin Login Panel</h1>
 <h4>please enter your username and password</h4>

 <form method="POST" action="">

	<label>username:</label><br>
	<input type="text" name="username" required><br><br>
	<label>password:</label><br>
	<input type="password" name="password" required><br><br>
	<input type="submit" value="login">
	</div>
	</form>
</body>
</html>
