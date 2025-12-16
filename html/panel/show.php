<?php
$conn = new mysqli("localhost", "root", "", "admin");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM data");
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Properties</title>
    <style>
        body{
            font-family: Arial;
            margin:0;
            background:#f2f2f2;
        }

       
        .sidebar {
            width: 200px;
            height: 100vh;
            background: #000;  
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            padding: 12px;
            text-decoration: none;
            color: white;
            margin-top: 10px;
        }

        .sidebar a:hover {
            background: #333;
        }

      
        .content {
            margin-left: 220px; 
            padding: 20px;
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
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="admindashboard.php">Dashboard</a>
    <a href="show.php">Show All</a>
    <a href="logout.php">Logout</a>
    <a href="usershow.php">Seller</a>
    <a href="show_messages.php">Contact Messages</a>
</div>

<div class="content">
    <h2 style="text-align:center;">All Uploaded Properties</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Type</th>
            <th>Location</th>
            <th>Status</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><img src="images/<?= $row['photo']; ?>"></td>
                <td><?= $row['type']; ?></td>
                <td><?= $row['location']; ?></td>
                <td><?= $row['status']; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>