<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "admin");
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

        .form-box {
            background: white;
            padding: 20px;
            width: 450px;
            border-radius: 5px;
            box-shadow: 0 0 5px grey;
            margin-top: 20px;
        }

        input[type=text], select {
            width: 95%;
            padding: 10px;
            margin-top: 10px;
        }

        input[type=file] {
            margin-top: 10px;
        }

        input[type=submit] {
            padding: 10px 20px;
            background: #0B092A;
            color: white;
            border: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        input[type=submit]:hover {
            background: white;
            color: black;
            border: 1px solid black;
        }
    </style>
</head>

<body>

<div class="sidebar">
<h2>Admin Panel</h2>
<a href="admindashboard.php">Dashboard</a>
<a href="show.php">Show All</a>
<a href="logout.php">Logout</a>
<a href="usershow.php">seller</a> 
<a href="show_messages.php">Contact Messages</a>

</div>

<div class="content">
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>

<!-- DELETE / UPDATE BOX -->
<div class="form-box">
<h2>Admin Operations</h2>

<form method="POST">
Enter ID:<br>
<input type="text" name="id" placeholder="Enter ID for Delete/Update">


<input type="submit" name="delete" value="Delete">
<input type="submit" name="update" value="Update">
<input type="submit" name="showall" value="Show All">
</form>

<?php
if(isset($_POST["delete"])){
    $id = $_POST["id"];
    $conn->query("DELETE FROM data WHERE id=$id");
    echo "<p style='color:red;'>Record Deleted Successfully</p>";
}

if(isset($_POST["update"])){
    echo "<script>window.location.href='update.php?id=".$_POST['id']."';</script>";
}

if(isset($_POST["showall"])){
    echo "<script>window.location.href='show.php';</script>";
}
?>
</div>



<!-- UPLOAD SECTION -->
<div class="form-box">
<h2>Upload Property</h2>

<form method="POST" enctype="multipart/form-data">

<label>Photo:</label>
<input type="file" name="photo" required>

<label>Property Type:</label>
<input type="text" name="type" placeholder="eg: 2BHK, Farmhouse" required>

<label>Location:</label>
<input type="text" name="location" placeholder="eg: Delhi, Mumbai" required>

<label>Status:</label>
<select name="status">
<option value="Available">Available</option>
<option value="Sold">Sold</option>
<option value="Booked">Booked</option>
</select>

<input type="submit" name="upload" value="Upload">
</form>

<?php
if(isset($_POST['upload'])){

    $photo = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];

    // Correct upload path
    $uploadPath = __DIR__ . "/images/" . $photo;

    // Make sure folder exists
    if(!is_dir(__DIR__ . "/images/")){
        mkdir(__DIR__ . "/images/", 0777, true);
    }

    // Move file
    if(move_uploaded_file($tmp, $uploadPath)) {

        $type = $_POST['type'];
        $location = $_POST['location'];
        $status = $_POST['status'];

        // Insert data
        $conn->query("INSERT INTO data (photo, type, location, status)
                      VALUES ('$photo', '$type', '$location', '$status')");

        echo "<p style='color:green;'>Uploaded Successfully!</p>";

    } else {
        echo "<p style='color:red;'>Image upload failed. Check folder permissions.</p>";
    }
}

?>
</div>

</div>
</body>
</html>
