<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f4f4;
        }

        .sidebar {
            width: 200px;
            height: 100vh;
            background: #222;
            color: white;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar a {
            display: block;
            padding: 12px;
            text-decoration: none;
            color: white;
            margin-top: 10px;
        }

        .sidebar a:hover {
            background: #444;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .cards {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            width: 200px;
            border-radius: 5px;
            box-shadow: 0 0 5px grey;
        }

        .operation-btn {
            margin-top: 30px;
            padding: 12px 20px;
            background: black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .operation-btn:hover {
            background: white;
            color: black;
            border: 1px solid black;
        }
    </style>

    <script>
        function goToUpload() {
            window.location.href = "uploaddetails.php";
        }
    </script>
</head>

<body>
<div class="sidebar">
<h2>Admin Panel</h2>
<a href="dashboard.php">Dashboard</a>
<a href="show.php">Show All</a>
<a href="upload.php">Upload</a>
<a href="logout.php">Logout</a>
</div>

<div class="content">
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>

<div class="operation-box">
<h2>CRUD Operations</h2>

<form method="POST">
Enter ID:<br>
<input type="text" name="id" required>

<input type="submit" name="delete" value="Delete">
<input type="submit" name="update" value="Update (change image)">
<input type="submit" name="showall" value="Show All">
</form>

<?php
$conn = new mysqli("localhost","root","","admindata");

if(isset($_POST["delete"])){
    $id = $_POST["id"];
    $conn->query("DELETE FROM input WHERE id=$id");
    echo "<p style='color:red;'>Record Deleted</p>";
}

if(isset($_POST["update"])){
    echo "<script>window.location.href='update.php?id=".$_POST['id']."';</script>";
}

if(isset($_POST["showall"])){
    echo "<script>window.location.href='show.php';</script>";
}
?>
</div>

</div>
</body>
<body>

<div class="box">
<h2>Upload Image</h2>

<form method="POST" enctype="multipart/form-data">
<input type="file" name="photo" required><br><br>
<input type="submit" name="upload" value="Upload">
</form>

<?php
$conn = new mysqli("localhost","root","","admindata");

if(isset($_POST['upload'])){
    $photo = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp, "images/".$photo);

    $conn->query("INSERT INTO input(photo) VALUES('$photo')");
    echo "<p style='color:green;'>Uploaded Successfully!</p>";
}
?>
</div>

</body>
</html>

