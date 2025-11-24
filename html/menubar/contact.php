<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us | House & Life</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #f8f8f8;
}


.contact-hero {
    width: 100%;
    height: 300px;
    background-image:url('../../images/estate.jpg');
               
      background-size: cover;
    background-position: center;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.contact-hero h1 {
    font-size: 50px;
    margin: 0;
    letter-spacing: 1px;
}

.contact-hero p {
    font-size: 20px;
    opacity: .9;
    margin-top: 10px;
}


.contact-container {
    width: 85%;
    margin: 60px auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 35px;
}

.contact-card {
    background: white;
    padding: 30px;
    border-radius: 22px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    text-align: center;
    transition: .3s;
}

.contact-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 14px 32px rgba(0,0,0,0.18);
}

.contact-card img {
    width: 70px;
    margin-bottom: 15px;
}

.contact-card h3 {
    margin: 8px 0;
    font-size: 22px;
}

.contact-card p {
    font-size: 16px;
    color: #555;
}

.big-info {
    width: 85%;
    margin: 50px auto;
    padding: 40px;
    background: linear-gradient(to right, #0B092A, #1f1c59);
    border-radius: 25px;
    color: white;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.big-info h2 {
    font-size: 34px;
    margin: 0 0 15px 0;
}

.big-info p {
    margin: 6px 0;
    font-size: 20px;
    opacity: .9;
}

.map-box {
    width: 85%;
    margin: 55px auto;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 8px 22px rgba(0,0,0,0.15);
}

.footer {
    background: #0B092A;
    padding: 30px 0;
    text-align: center;
    color: white;
    margin-top: 50px;
}

.footer p {
    opacity: .7;
    margin: 0;
}
.form{
	background-color:beige;
	border:2px solid black;
	padding:15%;
	margin-left:20%;
	padding-left:20%;
	width:30%;
	height:40px;
}
</style>
</head>

<body>

<?php include 'menu1.php';?>

<div class="contact-hero">
    <div>
        <h1>Contact Us</h1>
        <p>We are here to help you find your dream home</p>
    </div>
</div>

<div class="contact-container">

    <div class="contact-card">
        <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png">
        <h3>Phone</h3>
        <p>+91 98765 43210</p>
        <p>Mon- Sat | 10 AM - 7 PM</p>
    </div>

    <div class="contact-card">
        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png">
        <h3>Email</h3>
        <p>support@houseandlife.com</p>
        <p>We reply within 24 hours</p>
    </div>

    <div class="contact-card">
        <img src="https://cdn-icons-png.flaticon.com/512/484/484167.png">
        <h3>Office Address</h3>
        <p>Sector 12, Main Market</p>
        <p>New Delhi, India</p>
    </div>

</div>

<div class="big-info">
    <h2>Visit Our Office Anytime</h2>
    <p>House & Life Real Estate Pvt. Ltd.</p>
    <p>Trusted by 10,000+ Happy Families</p>
</div>

<form class="form">
  <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Contact:</label>
    <input type="text" name="contact" required>

    <button type="submit" name="submit">Submit</button>

</form>
<div class="footer">
    <p>2025 House & Life &copy; All Rights Reserved</p>
</div>

</body>
</html>
