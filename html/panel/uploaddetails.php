<!DOCTYPE html>
<html>
<head>
  <title>Upload Photo & Details</title>
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
      height:auto;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Upload Photo and Details</h2>

  <form method="POST" enctype="multipart/form-data">
    <label>Photo:</label><br>
    <input type="file" name="photo" accept="image/*" required><br><br>

    <input type="submit" name="upload" value="Upload">
  </form>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "admindata";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>");
  }

  if (isset($_POST['upload'])) {

      $photo = $_FILES['photo']['name'];
      $target = "images/" . basename($photo);

      if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {

          $sql = "INSERT INTO input (photo) VALUES ('$photo')";

          if ($conn->query($sql)) {
              echo "<p style='color:green;'>Image uploaded successfully!</p>";
          } else {
              echo "<p style='color:red;'>Database Error: " . $conn->error . "</p>";
          }
      } else {
          echo "<p style='color:red;'>Failed to upload image.</p>";
      }
  }

  $conn->close();
  ?>
</div>

</body>
</html>
