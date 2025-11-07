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
    
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    
    <label>Upload Photo:</label><br>
    <input type="file" name="photo" accept="image/*" required><br><br>
    
    <input type="submit" name="submit" value="Upload">
  </form>
</body>
</html>
