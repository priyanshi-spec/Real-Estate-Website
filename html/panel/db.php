<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "table"; // change as needed

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php include('db.php'); ?>