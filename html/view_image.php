<?php
if(!isset($_GET['img'])){
    die("Image not found!");
}

$img = $_GET['img'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Image</title>
    <style>
        body {
            margin:0;
            background:black;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        img {
            max-width:90%;
            max-height:90%;
            border-radius:10px;
            box-shadow:0 0 20px rgba(255,255,255,0.7);
        }
    </style>
</head>
<body>
    <img src="./panel/images/<?php echo $img; ?>">
</body>
</html>
