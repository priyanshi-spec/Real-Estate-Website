<?php
if (!isset($_GET['img'])) {
    die("Image not found!");
}

$img = $_GET['img'];

// Connect to database
$conn = new mysqli("localhost", "root", "", "admin");

// Fetch property details using image name
$sql = "SELECT * FROM data WHERE photo = '$img' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("No property found for this image.");
}

$row = $result->fetch_assoc();

// Assign values
$type = $row['type'];
$location = $row['location'];
$price = $row['price'];
$status = $row['status'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Property Details</title>
    <style>
        body {
            margin:0;
            background:#000;
            color:white;
            font-family:Arial, sans-serif;
            padding:20px;
        }
        .container {
            max-width:900px;
            margin:0 auto;
            text-align:center;
        }
        .image-box img {
            max-width:90%;
            border-radius:10px;
            box-shadow:0 0 20px rgba(255,255,255,0.7);
        }
        .details-box {
            margin-top:25px;
            text-align:left;
            background:#111;
            padding:20px;
            border-radius:12px;
        }
        .wishlist-btn {
            margin-top:15px;
            background:#e63946;
            border:none;
            padding:12px 20px;
            color:white;
            cursor:pointer;
            font-size:16px;
            border-radius:8px;
        }
        .wishlist-btn:hover {
            background:#c92735;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- IMAGE -->
    <div class="image-box">
        <img src="./panel/images/<?php echo $img; ?>" alt="Property Image">
    </div>

    <!-- DETAILS -->
    <div class="details-box">
        <h2><?php echo $type; ?></h2>
        
        <p><strong>Location:</strong> <?php echo $location; ?></p>
        <p><strong>Price:</strong> &#8377;
<?php 
    echo is_numeric($price) ? number_format((float)$price) : htmlspecialchars($price);
?>
</p>

                <p><strong>Status:</strong> <?php echo $status; ?></p>

        <!-- Wishlist Button -->
        <button class="wishlist-btn" onclick="addToWishlist()">&#10084; Add to Wishlist</button>

        <p id="msg" style="margin-top:10px;color:#00ff88;font-weight:bold;"></p>
    </div>

</div>

<script>
function addToWishlist() {
    document.getElementById("msg").innerHTML = "Added to wishlist!";
}
</script>

</body>
</html>