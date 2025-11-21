<!DOCTYPE html>
<html>
<head>
  <title>View Uploaded Houses</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admindata";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, photo FROM input ORDER BY id DESC";
$result = $conn->query($sql);

echo "<div style='display:flex; flex-wrap:wrap; gap:20px; margin-top:20px;'>";

while($row = $result->fetch_assoc()) {

    echo "
        <div>
            <a href='view.php?id=".$row['id']."'>
                <img src='panel/images/".$row['photo']."' 
                     width='600' height='400' 
                     style='cursor:pointer;'>
            </a>
        </div>
    ";
}

echo "</div>";

$conn->close();
?>

</body>
</html>
