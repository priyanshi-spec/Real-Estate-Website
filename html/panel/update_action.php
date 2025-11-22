<?php
$conn = new mysqli("localhost","root","","realdb");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

if(!empty($_FILES['photo']['name'])) {
    $photo = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp, "images/".$photo);

    $update = "UPDATE users SET name='$name', email='$email', photo='$photo' WHERE id=$id";
} else {
    $update = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
}

if ($conn->query($update)) {
    echo "<script>alert('Updated Successfully!');window.location.href='show.php';</script>";
}
?>
