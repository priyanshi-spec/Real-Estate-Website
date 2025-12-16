<?php
$conn = new mysqli("localhost", "root", "", "realdb");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM data");


if(isset($_POST["delete_request"]))
{
    $name = $_POST["name"];   

    $del = "DELETE FROM data WHERE name='$name'";
    if($conn->query($del)){
        echo "<p style='color:green;text-align:center;'>Record Deleted Successfully</p>";
    } else {
        echo "<p style='color:red;text-align:center;'>Delete Failed</p>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>All Properties</title>
    <style>
        body{
            font-family: Arial;
            padding:40px;
            background:#f2f2f2;
        }
        table{
            width:80%;
            margin:auto;
            border-collapse:collapse;
            background:white;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        th,td{
            padding:12px;
            border:1px solid #ddd;
            text-align:center;
        }
        th{
            background:#0B092A;
            color:white;
        }
        img{
            width:120px;
            border-radius:5px;
        }
        button{
            padding:8px 12px;
            background:#b30000;
            color:white;
            border:none;
            border-radius:4px;
            cursor:pointer;
        }
        button:hover{
            background:#e60000;
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
    </style>
</head>
<body>

<h2 style="text-align:center;">User Uploaded Properties</h2>
<div class="sidebar">
<h2>Admin Panel</h2>
<a href="admindashboard.php">Dashboard</a>
<a href="show.php">Show All</a>
<a href="logout.php">Logout</a>
<a href="usershow.php">seller</a>
<a href="show_messages.php">Contact Messages</a>

</div>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>

<?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['contact']; ?></td>
        <td><img src="images/<?= $row['photo']; ?>"></td>

        <td>
            <form method="POST">
                <input type="hidden" name="name" value="<?= $row['name']; ?>">
                <button type="submit" name="delete_request">Delete</button>
            </form>
        </td>
    </tr>
<?php } ?>

</table>
<?php include 'db.php'; ?>
</body>
</html>