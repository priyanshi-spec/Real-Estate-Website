<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f4f4;
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

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .cards {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            width: 200px;
            border-radius: 5px;
            box-shadow: 0 0 5px grey;
        }

        .operation-btn {
            margin-top: 30px;
            padding: 12px 20px;
            background: black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .operation-btn:hover {
            background: white;
            color: black;
            border: 1px solid black;
        }
    </style>

    <script>
        function goToUpload() {
            window.location.href = "uploaddetails.php";
        }
    </script>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="#">Users</a>
    <a href="#">Products</a>
    <a href="#">Reports</a>
    <a href="logout.php">Logout</a>
</div>

<!-- Main Content -->
<div class="content">
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is your admin dashboard.</p>

    <div class="cards">
        <div class="card">Total Users: 120</div>
        <div class="card">Orders: 50</div>
        <div class="card">Revenue: &#8377;75,000</div>
    </div>

    <!-- Custom button -->
    <button class="operation-btn" onclick="goToUpload()">
        Upload Details
    </button>

</div>

</body>
</html>
