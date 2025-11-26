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

/* DELETE */
if(isset($_POST["delete"]))
{
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"admin");
    $id = $_POST["id"];
    mysqli_query($link,"DELETE FROM data WHERE id='$id'");
    echo "Record Deleted";
}

/* UPDATE SHOW FORM */
if(isset($_POST["update"]))
{
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"admin");

    $r = $_POST["id"];

    $res = mysqli_query($link, "SELECT * FROM data WHERE id='$r'");
    $row = mysqli_fetch_assoc($res);

    if(!$row){
        echo "<p style='color:red;'>Invalid ID!</p>";
        exit();
    }
    ?>

    <h3>Update Record (ID: <?= $r ?>)</h3>

    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $r ?>">

        <label>Photo:</label><br>
        <input type="file" name="photo"><br><br>

        <label>Property Type:</label><br>
        <input type="text" name="type" value="<?= $row['type'] ?>"><br><br>

        <label>Location:</label><br>
        <input type="text" name="location" value="<?= $row['location'] ?>"><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option <?= ($row['status']=="Available"?"selected":"") ?>>Available</option>
            <option <?= ($row['status']=="Sold"?"selected":"") ?>>Sold</option>
            <option <?= ($row['status']=="Booked"?"selected":"") ?>>Booked</option>
        </select><br><br>

        <input type="submit" name="save_update" value="Save Changes">
    </form>

    <?php
}

if(isset($_POST["save_update"]))
{
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"admin");

    $id = $_POST["id"];
    $type = $_POST["type"];
    $location = $_POST["location"];
    $status = $_POST["status"];

    $photo_sql = "";

    if(!empty($_FILES["photo"]["name"])) {
        $photo = $_FILES["photo"]["name"];
        move_uploaded_file($_FILES["photo"]["tmp_name"], "images/".$photo);
        $photo_sql = ", photo='$photo'";
    }

    $query = "UPDATE data SET 
                type='$type',
                location='$location',
                status='$status'
                $photo_sql
              WHERE id='$id'";

    mysqli_query($link, $query);

    echo "<p style='color:green;'>Record Updated Successfully!</p>";
}

/* SHOW ALL */
if(isset($_POST["showall"])){
    echo "<script>window.location.href='show.php';</script>";
}
?>
</div>


<!-- FIXED UPLOAD SECTION -->
<div class="form-box">
<h2>Upload Property</h2>

<form method="POST" enctype="multipart/form-data">

<label>Photo:</label>
<input type="file" name="photo" required>

<label>Property Type:</label>
<input type="text" name="type" required>

<label>Location:</label>
<input type="text" name="location" required>

<label>Status:</label>
<select name="status">
<option value="Available">Available</option>
<option value="Sold">Sold</option>
<option value="Booked">Booked</option>
</select>

<input type="submit" name="upload" value="Upload">
</form>

<?php

/* FIXED UPLOAD HANDLER */
if(isset($_POST['upload'])){

    $type = $_POST['type'];
    $location = $_POST['location'];
    $status = $_POST['status'];

    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];

    $upload_path = __DIR__ . "/images/" . $photo_name;

    if(move_uploaded_file($photo_tmp, $upload_path)){
        
        $sql = "INSERT INTO data (photo, type, location, status)
                VALUES ('$photo_name', '$type', '$location', '$status')";

        if($conn->query($sql)){
            echo "<script>alert('Uploaded Successfully');</script>";
        } else {
            echo "<script>alert('Database Insert Failed');</script>";
        }

    } else {
        echo "<script>alert('Image Upload Failed');</script>";
    }
}

?>

</div>

</div>
</body>
</html>
