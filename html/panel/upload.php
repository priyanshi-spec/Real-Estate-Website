<!DOCTYPE html>
<html>
<head>
  <title>Upload image and email</title>
 </head>
<body>
  <h2>Become a Seller</h2>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>
    <?php
    if(isset($_POST['name']))
    {
    $name=$_POST["name"];
    if(!preg_match("/^[a-zA-Z_]*$/", $name))
 		{
      			echo("Invalid Name");
		}
		else
		{
      			echo $name;
		}
		}
		?>
		
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    
    <label>Upload Photo:</label><br>
    <input type="file" name="photo" accept="image/*" required><br><br>
    
    <input type="submit" name="submit" value="Upload">
    <?php
		
    if(isset($_POST['email']))
		{
		$email = $_POST["email"];
                $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)@[a-z0-9-]+(\.[a-z0-9-]+)(\.[a-z]{2,3})$^";  
		if (!preg_match($pattern, $email))
		{  
      			echo("Invalid Email");
		}
		else
		{
      			echo $email;
		}
		}
		?>
		<?php include 'uploadback.php';?>

  </form>
  
</body>
</html>
