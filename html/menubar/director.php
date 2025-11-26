<?php include 'menu1.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Director of Real Estate Management</title>

<style>
    html, body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f1ea;
        color: #333;
    }

    .banner {
        width: 100%;
        height: 260px;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('estate.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .banner h1 {
        color: white;
        font-size: 38px;
        letter-spacing: 1px;
        text-shadow: 0px 2px 10px black;
    }

    .profile-section {
        width: 85%;
        margin: 40px auto;
        display: flex;
        gap: 40px;
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .profile-image {
        flex: 1;
        min-width: 250px;
        text-align: center;
    }

    .profile-image img {
        width: 260px;
        height: 260px;
        object-fit: cover;
        border-radius: 50%;
        border: 6px solid #0B092A;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .profile-details {
        flex: 2;
        min-width: 300px;
        color: black;
    }

    .profile-details h2 {
        margin-top: 0;
        font-size: 28px;
        color: #0B092A;
        margin-bottom: 10px;
    }

    .profile-details h4 {
        margin-top: 0;
        margin-bottom: 20px;
        font-size: 18px;
        color: #555;
    }

    .profile-details p {
        font-size: 20px;
        line-height: 1.7;
        color: #000 !important;
    }

    .extra-content {
        width: 85%;
        margin: 30px auto;     
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 3px 12px rgba(0,0,0,0.15);
        border-left: 5px solid #0B092A;
    }

    
    .extra-content:last-of-type {
        margin-bottom: 10px !important;
    }

    .extra-content h3 {
        margin-top: 0;
        color: #0B092A;
        font-size: 22px;
        margin-bottom: 15px;
    }

    .extra-content p {
        font-size: 16px;
        line-height: 1.65;
        color: #444;
        text-align: justify;
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

<div class="banner">
    <h1>Director of House & Life</h1>
</div>

<div class="profile-section">
    <div class="profile-image">
        <img src="bm.jpg" alt="Director Photo">
    </div>

    <div class="profile-details">
        <h2>Mr. Robert Mathews</h2>
        <h4>Director, House & Life</h4>
        <p>
            Mr. Robert Mathews is a visionary leader with over 20 years of experience in real estate 
            development, commercial property management, and large-scale infrastructure strategy. 
            Known for his innovative thinking and deep industry insight, he has played a key role in 
            transforming the real estate standards across multiple cities.
        </p>
    </div>
</div>

<div class="extra-content">
    <h3>Message from the Director</h3>
    <p>
        At H&L Real Estate, our mission is to build trust, deliver excellence, and create properties 
        that blend innovation with long-term value. Each project is crafted with precision, ensuring 
        both sustainability and customer satisfaction. We aim not just to construct buildings, but to 
        shape communities that thrive for generations.
    </p>
</div>

<div class="extra-content">
    <h3>About His Leadership</h3>
    <p>
        Under his strategic direction, the company has expanded operations across India, built 
        award-winning residential and commercial developments, and established a strong reputation 
        for transparency and quality. His leadership combines sharp business acumen with a strong focus 
        on ethics, making him a respected figure in the industry.
    </p>
</div>

<div class="footer">
    <p>2025 House & Life &copy; All Rights Reserved</p>
</div>

</body>
</html>
