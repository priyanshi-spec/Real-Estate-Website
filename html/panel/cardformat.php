<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Uploaded Profiles</title>
  <style>
    body { font-family: Arial; background: #f4f4f4; }
    .container { display: flex; flex-wrap: wrap; gap: 20px; padding: 20px; }
    .card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      width: 200px;
      text-align: center;
      padding: 15px;
    }
    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
    }
    .card h3 { margin: 10px 0 5px; }
    .card p { color: gray; font-size: 14px; }
  </style>
</head>
<body>
  <h2 style="text-align:center;">Uploaded Profiles</h2>
  <div class="container">
    <?php
    $result = $conn->query("SELECT * FROM users ORDER BY id DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'>
                <img src='uploads/{$row['photo']}' alt='Profile Photo'>
                <h3>{$row['name']}</h3>
                <p>{$row['email']}</p>
              </div>";
    }
    ?>
  </div>
  <div style="text-align:center;">
    <a href='upload.php'>← Go Back</a>
  </div>
</body>
</html>