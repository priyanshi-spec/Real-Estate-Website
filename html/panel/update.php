<?php
$conn = new mysqli("localhost", "root", "", "admindata");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Record not found! ID is missing");
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM input WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Record not found in database!");
}

$row = $result->fetch_assoc();

if (isset($_POST['update'])) {

    
    if (!empty($_FILES['photo']['name'])) {
        $photo = $_FILES['photo']['name'];
        $target = "images/" . basename($photo);

        move_uploaded_file($_FILES['photo']['tmp_name'], $target);

        $updateQuery = "UPDATE input SET photo='$photo' WHERE id=$id";

        if ($conn->query($updateQuery)) {
            echo "<script>alert('Image updated successfully'); window.location='showall.php';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "<script>alert('Please select a new image');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Image</title>

<style>
form {
    width: 50%;
    margin: auto;
    margin-top: 40px;
    padding: 20px;
    background: beige;
    border-radius: 8px;
}
input[type='file'], input[type='submit']{
    width: 100%;
    padding: 12px;
    margin-top: 12px;
}
img{
    width:150px;
    margin-bottom:15px;
}
</style>

</head>
<body>

<h2 style="text-align:center;">Update Image</h2>

<form method="POST" enctype="multipart/form-data">

    <label>Current Image:</label><br>
    <img src="images/<?php echo $row['photo']; ?>" alt="No image"><br>

    <label>Upload New Image:</label>
    <input type="file" name="photo" required>

    <input type="submit" name="update" value="Update Image">

</form>

</body>
</html>
