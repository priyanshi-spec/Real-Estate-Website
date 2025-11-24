

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
        a{
            display:inline-block;
            padding:10px 15px;
            background:#0B092A;
            color:white;
            text-decoration:none;
            border-radius:5px;
            margin-bottom:20px;
        }
        a:hover{
            background:#16134A;
        }
    </style>
</head>
<body>

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

</body>
</html>
