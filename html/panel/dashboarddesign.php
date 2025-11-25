<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style>
body {
    margin: 0;
    font-family: Arial;
    background: #f4f4f4;
}

.login-box {
    width: 300px;
    margin: 120px auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
}

.login-box input {
    width: 90%;
    padding: 10px;
    margin: 8px 0;
}

button {
    width: 95%;
    padding: 10px;
    background: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}

/* Dashboard Layout */
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
}

.card {
    background: white;
    padding: 20px;
    width: 200px;
    border-radius: 5px;
    box-shadow: 0 0 5px grey;
}
</style>
</head>

<body>
<?php
session_start();

// Block access if not logged in
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
    <h1>Welcome, <?php echo $_SESSION['admin']; ?>!</h1>
    <p>This is your admin dashboard.</p>

   <div class="sidebar">
<h2>Admin Panel</h2>
<a href="admindashboard.php">Dashboard</a>
<a href="show.php">Show All</a>
<a href="logout.php">Logout</a>
<a href="usershow.php">seller</a>
<a href="show_messages.php">Contact Messages</a>

</div>
</div>
</body>
</html>
</body>

</html>
