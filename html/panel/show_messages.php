<?php
$conn = new mysqli("localhost", "root", "", "admin");

$result = $conn->query("SELECT * FROM messages");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Messages</title>
    <style>
        table{
            width:100%;
            border-collapse:collapse;
        }
        th,td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }
        th{
            background:#333;
            color:white;
        }
    </style>
</head>
<body>

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

</body>
</html>
