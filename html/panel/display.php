<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['deleteBtn'])) {
    $name = $_POST['username'];

    $del = "DELETE FROM users WHERE name='$name'";
    if ($conn->query($del)) {
        echo "<p style='color:red; text-align:center;'>User '$name' deleted successfully.</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Delete failed!</p>";
    }
}


if (isset($_POST['updateBtn'])) {
    $name = $_POST['username'];
    $newemail = $_POST['newemail'];

    $update = "UPDATE users SET email='$newemail' WHERE name='$name'";
    if ($conn->query($update)) {
        echo "<p style='color:green; text-align:center;'>Email updated for '$name'.</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Update failed!</p>";
    }
}


$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Uploaded Details</title>
    <style>
body{
	font-family:Garamond;
	background-color:beige;
	padding:20px;
}
table {
    width: 80%;
    margin: auto;
    border-collapse: collapse;
    background: white;
}
th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
}
th {
    background:#0B092A;
    color:white;
}
img {
    width: 120px;
    height: auto;
}
.form-box {
    width: 50%;
    margin: 30px auto;
    background: white;
    padding: 20px;
    border: 2px solid black;
}
    </style>
</head>

<body>

<h2 style="text-align:center;">Uploaded User Details</h2>

<div class="form-box">
<form method="POST">

    <h3>Admin Controls</h3>

    <label>Enter Name:</label><br>
    <input type="text" name="username" required><br><br>

    <label>New Email (for update only):</label><br>
    <input type="email" name="newemail"><br><br>

  
    <button type="submit" name="deleteBtn">Delete User</button>
    <button type="submit" name="updateBtn">Update User Email</button>
    <button type="submit" name="showBtn">Show All Users</button>

</form>
</div>



<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Photo</th>
    </tr>

    <?php
   
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo "<tr>
                    <td>".$row['name']."</td>
                    <td>".$row['email']."</td>
                    <td><img src='images/".$row['photo']."' alt='Photo'></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No data found</td></tr>";
    }
    ?>
</table>

<br><br>
<center><a href="uploaddetails.php">Go Back</a></center>

</body>
</html>

<?php
$conn->close();
?>
