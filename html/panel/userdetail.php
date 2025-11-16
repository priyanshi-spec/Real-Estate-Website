<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request!");
}

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$photo = $_FILES['photo']['name'];
$target = "images/" . basename($photo);

if (!is_dir("images")) {
    mkdir("images", 0777, true);
}

if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {

    $sql = "INSERT INTO data (name, email, contact, photo)
            VALUES ('$name', '$email', '$contact', '$photo')";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.php");
        exit();
    } else {
        echo "Database Error: " . $conn->error;
    }

} else {
    echo "Failed to upload image!";
}

$conn->close();
?>
