<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Team</title>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;

       
        background-image: url('estate.jpg');
        background-size: cover;           
        background-repeat: no-repeat;    
        background-position: center;      
        background-attachment: fixed;    
    }

  
    .team-section {
        width: 90%;
        max-width: 1000px;

        margin: 50px auto;
        padding: 30px;

        background: white;                
        border-radius: 14px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.25);

        text-align: center;
    }

    
    .team-photo {
        width: 100%;
        max-width: 820px;
        border-radius: 10px;
        margin-bottom: 20px;

        box-shadow: 0 5px 18px rgba(0,0,0,0.25);
    }

    .team-text h2 {
        font-size: 34px;
        color: #0B092A;
        font-weight: 700;
        margin-bottom: 14px;
    }

    .team-text p {
        font-size: 18px;
        color: #333;
        line-height: 1.7;
        max-width: 760px;
        margin: 0 auto;
    }

</style>
</head>

<body>

<?php include 'menu1.php'; ?>

<div class="team-section">
    <img src="team.jpg" alt="Our Team" class="team-photo">

    <div class="team-text">
        <h2>Meet Our Dedicated Team</h2>
        <p>
            Our team is built on professionalism, trust, and a strong collaborative spirit.
            Every member brings unique skills to the table, helping us deliver the best
            experience for our clients. Together, we work with commitment, passion,
            and a shared vision to achieve excellence.
        </p>
    </div>
</div>

<?php include "../footer1.php"; ?>

</body>
</html>
