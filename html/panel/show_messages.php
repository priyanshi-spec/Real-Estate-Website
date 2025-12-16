<?php
$conn = new mysqli("localhost", "root", "", "admin");

$result = $conn->query("SELECT * FROM messages");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Messages</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* FIXED SIDEBAR */
        .sidebar {
            width: 200px;
            height: 100vh;
            background: #222;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
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

        /* CONTENT AREA (MOVES RIGHT) */
        .content {
            margin-left: 220px; /* Space for sidebar */
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #333;
            color: white;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="admindashboard.php">Dashboard</a>
    <a href="show.php">Show All</a>
    <a href="logout.php">Logout</a>
    <a href="usershow.php">Seller</a>
    <a href="show_messages.php">Contact Messages</a>
</div>

<!-- CONTENT SECTION -->
<div class="content">

<h2>Contact Form Messages</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Message</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['contact'] ?></td>
            <td><?= $row['message'] ?></td>
        </tr>
    <?php } ?>
</table>

</div>

</body>
</html>