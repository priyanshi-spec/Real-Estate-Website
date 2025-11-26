
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Site Offices</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f1ea;    
         }


    .banner {
        width: 100%;
        height: 320px;
        background-image: url('estate.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(0.85);
        position: relative;
    }
    .banner-text {
        position: absolute;
        bottom: 30px;
        left: 40px;
        color: white;
        font-size: 36px;
        font-weight: bold;
        letter-spacing: 1px;
        text-shadow: 0px 2px 8px black;
    }

    
    .heading {
        text-align: center;
        margin: 40px 0px 10px;
        color: #0B092A; 
        font-size: 32px;
        font-weight: bold;
    }

    .sub-text {
        text-align: center;
        color: #555;
        font-size: 16px;
        margin-bottom: 40px;
    }

    
    .container {
        width: 90%;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 50px;
    }

   
    .card {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        border-left: 5px solid #0B092A;
        transition: 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 22px rgba(0,0,0,0.25);
    }

    .card h3 {
        margin: 0;
        color: #0B092A;
        font-size: 22px;
    }

    .card p {
        margin-top: 10px;
        color: #444;
        line-height: 1.55;
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

</style>
</head>
<body>
<?php include 'menu1.php'; ?>
<div class="banner">
    <div class="banner-text">Our Site Offices</div>
</div>

<h1 class="heading">Visit Our Office Locations</h1>
<p class="sub-text">We are available across major regions to assist you with real estate and property needs.</p>

<div class="container">

    
    <div class="card">
        <h3>H&L Real Estate – Main Corporate Office</h3>
        <p>12th Floor, Crystal Tower, MG Road<br>Bengaluru – 560001<br>Phone: +91 98765 43210</p>
    </div>

   
    <div class="card">
        <h3>H&L Real Estate – Pune Branch</h3>
        <p>Office 207, Platinum Square, Viman Nagar<br>Pune – 411014<br>Phone: +91 91234 56789</p>
    </div>

      <div class="card">
        <h3>H&L Real Estate – Mumbai Site Office</h3>
        <p>3rd Floor, Ocean View Chambers, Bandra West<br>Mumbai – 400050<br>Phone: +91 99887 65432</p>
    </div>

    
    <div class="card">
        <h3>H&L Real Estate – Delhi NCR</h3>
        <p>5th Floor, Skyline Plaza, Sector 18<br>Noida – 201301<br>Phone: +91 98112 33445</p>
    </div>

    
    <div class="card">
        <h3>H&L Real Estate – Hyderabad Branch</h3>
        <p>Unit 14, TechPark Towers, Hitech City<br>Hyderabad – 500081<br>Phone: +91 90000 11122</p>
    </div>

    
    <div class="card">
        <h3>H&L Real Estate – Chennai Office</h3>
        <p>2nd Floor, Pearl Business Hub, T Nagar<br>Chennai – 600017<br>Phone: +91 94567 33445</p>
    </div>

    
    <div class="card">
        <h3>H&L Real Estate – Jaipur Site Office</h3>
        <p>Office 08, Royal Business Center, MI Road<br>Jaipur – 302001<br>Phone: +91 88990 55321</p>
    </div>

    
    <div class="card">
        <h3>H&L Real Estate – Nagpur Branch</h3>
        <p>Ground Floor, Diamond Plaza, Dharampeth<br>Nagpur – 440010<br>Phone: +91 97654 22119</p>
    </div>

</div>

<div class="footer">
    <p>2025 House & Life &copy; All Rights Reserved</p>
</div>

</body>
</html>
