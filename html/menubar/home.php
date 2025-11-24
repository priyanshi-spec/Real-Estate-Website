<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>House & Life | Real Estate</title>

<style>

/* ---------------- GLOBAL STYLES ---------------- */
body {
    margin: 0;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #f4f4f4;
}

/* ---------------- HERO SECTION ---------------- */
.hero {
    width: 100%;
    height: 90vh;
    background: linear-gradient(rgba(0,0,0,0.50), rgba(0,0,0,0.70)),
                 url('estate.jpg'); /* ← add your image */
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 20px;
}

.hero h1 {
    font-size: 60px;
    margin: 0;
    letter-spacing: 1px;
}

.hero p {
    font-size: 22px;
    margin-top: 10px;
}

.hero button {
    margin-top: 30px;
    padding: 12px 28px;
    border-radius: 30px;
    border: none;
    font-size: 18px;
    background: #ffcc00;
    cursor: pointer;
    transition: .3s;
}

.hero button:hover {
    background: #e6b800;
}

/* ---------------- FEATURES SECTION ---------------- */
.features {
    width: 85%;
    margin: 60px auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
}

.feature-box {
    background: white;
    padding: 30px;
    border-radius: 18px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    transition: .3s;
    text-align: center;
}

.feature-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.feature-box img {
    width: 60px;
    margin-bottom: 15px;
}

/* ---------------- FOOTER ---------------- */
.footer {
    background: #0B092A;
    color: white;
    text-align: center;
    padding: 25px 0;
    margin-top: 40px;
}

.footer h2 {
    margin: 0;
    font-size: 22px;
    letter-spacing: 1px;
}

.footer p {
    opacity: .7;
    margin-top: 5px;
}

</style>
</head>

<body>

<?php include 'menu1.php';?>

<!-- HERO SECTION -->
<div class="hero">
    <div>
        <h1>Welcome to House & Life</h1>
        <p>Your trusted partner for luxury, comfort & modern living.</p>
           </div>
</div>

<!-- FEATURES SECTION -->
<div class="features">
    <div class="feature-box">
        <img src="https://cdn-icons-png.flaticon.com/512/809/809957.png" />
        <h3>Premium Properties</h3>
        <p>We offer top-quality apartments, villas and luxury homes.</p>
    </div>

    <div class="feature-box">
        <img src="https://cdn-icons-png.flaticon.com/512/893/893299.png" />
        <h3>Verified Owners</h3>
        <p>No brokers! Transparent and verified property listings only.</p>
    </div>

    <div class="feature-box">
        <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" />
        <h3>Best Locations</h3>
        <p>Find your home in the most prime residential areas.</p>
    </div>

    <div class="feature-box">
        <img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" />
        <h3>24/7 Support</h3>
        <p>We are always available to assist you with any queries.</p>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    <h2>House & Life</h2>
    <p>© 2025 All Rights Reserved</p>
</div>

</body>
</html>
