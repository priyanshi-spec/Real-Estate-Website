<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <style>
        body{
            font-family: Arial;
            text-align:center;
            padding:50px;
        }
        a{
            display:inline-block;
            padding:12px 20px;
            background:#0B092A;
            color:white;
            text-decoration:none;
            border-radius:5px;
            margin-top:20px;
        }
        a:hover{
            background:#16134A;
        }
        .contact-form {
    width: 70%;
    margin: 60px auto;
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}

.contact-form h2 {
    text-align: center;
    margin-bottom: 25px;
    font-size: 30px;
}

.input-box {
    margin-bottom: 20px;
}

.input-box label {
    font-weight: bold;
}

.input-box input,
.input-box textarea {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: 1px solid #ccc;
    margin-top: 8px;
    font-size: 16px;
}

textarea {
    height: 130px;
    resize: none;
}

.contact-form button {
    width: 100%;
    padding: 14px;
    background: #0B092A;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 18px;
    cursor: pointer;
    transition: .3s;
}

.contact-form button:hover {
    background: white;
    color: black;
    border: 1px solid black;
}


    </style>
</head>
<body>

<h1>Submitted Successfully!</h1>
<p>Your property details have been saved.</p>

<a href="usershow1.php">View Submitted Details</a>
<br><br>
<a href="user.php">Submit Another Entry</a>

<h2>request</h2>
<form class="contact-form" action="usershow.php" method="POST">
 <div class="input-box">
        <label>Your Message:</label>
        <textarea name="message" required></textarea>
    </div>
  <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>
