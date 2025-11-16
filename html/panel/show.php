<?php
$conn = new mysqli("localhost", "root", "", "realdb");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM data");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submitted Properties</title>
    <style>
        body{
            font-family: Arial;
            padding:40px;
            background:#f2f2f2;
        }
        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
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

<a href="user.php">Add New Entry</a>
<h2>All Submitted Property Details</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Property Image</th>
    </tr>

<?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['contact']; ?></td>
        <td><img src="images/<?= $row['photo']; ?>"></td>
    </tr>
<?php } ?>

</table>

</body>
</html>
