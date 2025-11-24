<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, photo, type, location, status FROM data ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Uploaded Houses</title>

  <style>
  <style>
    body { 
        font-family: Arial; 
        background: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .card {
        width: 350px; 
        background: white;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        overflow: hidden;
        text-align: center;
        padding-bottom: 15px;
    }

    .card img {
        width: 100%;
        height: 320px;   
        object-fit: cover;
    }

    .card h3 {
        margin: 10px 0 5px;
        font-size: 20px;
    }

    .card p {
        margin: 6px 0;
        color: #444;
        font-size: 15px;
    }
</style>

      </style>

</head>
<body>



<div class="container">

<?php
while($row = $result->fetch_assoc()) {

    echo "
        <div class='card'>
            <a href='./view_image.php?img=".$row['photo']."'>
                <img src='panel/images/".$row['photo']."' alt='House Image'>
            </a>

            <h3>".$row['type']."</h3>
            <p><b>Location:</b> ".$row['location']."</p>
            <p><b>Status:</b> ".$row['status']."</p>
        </div>
    ";
}
?>

</div>

</body>
</html>

<?php $conn->close(); ?>
