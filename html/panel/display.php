<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
    </style>
</head>

<body>
       <table>
        <h2 style="text-align:center;">Uploaded User Details</h2>


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
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>

    <br><br>
    <center>
        <a href="uploaddetails.php">Go Back</a>
    </center>

</body>
</html>

<?php
$conn->close();
?>
