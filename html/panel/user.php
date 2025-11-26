<!DOCTYPE html>
<html>
<head>
    <title>Become a Property Seller</title>
    <style>
    	.form-box {
            width: 650px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow:0 0 15px rgba(0,0,0,0.2);
        }
    
           input, button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            font-size: 15px;
        }
        button{
        background-color:black;
                color:white;
            border:none;
            cursor:pointer;
        }
        button:hover{
            background:beige;
            color:black;
            border:1px solid black;
        }
    </style>
</head>
<body>

<div class="form-box">
<h2>Become a Property Seller</h2>

<form action="/intern/Real-Estate-Website/html/panel/userdetail.php" 
      method="post" enctype="multipart/form-data">

    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Contact:</label>
    <input type="text" name="contact" required>

    <label>Upload Property Image:</label>
    <input type="file" name="photo" accept="image/*" required>

    <button type="submit" name="submit">Submit</button>
    
</form>
</div>

</body>
</html>
