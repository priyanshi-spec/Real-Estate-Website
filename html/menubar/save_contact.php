<?php
$conn = new mysqli("localhost", "root", "", "admin");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name, email, contact, message) 
        VALUES ('$name', '$email', '$contact', '$message')";

if ($conn->query($sql)) {
    echo "<script>
            alert('Message sent successfully!');
            window.location.href='contact.php';
          </script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
