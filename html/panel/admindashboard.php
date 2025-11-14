<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<script>
 function myfunction()
{
  window.location.href = "uploaddetails.php";
   }


</script>
<style>
body{background-image:url('../../images/estate.jpg');
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

	
}
button{
	background-color:black;
	color:white;
}

</style>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
<div class="container">
    <h1>Welcome to Admin Dashboard</h1>
    <h1>Hello, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Logout</a><br><br>
    <button onclick="myfunction()">upload details</button>
    </div>
</body>
</html>