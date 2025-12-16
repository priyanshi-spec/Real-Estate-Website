<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu with Submenu</title>

<script>
function myfunction() {
  window.location.href = "panel/loginfile.php";
}
</script>

<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
}


nav {
  background-color: #0B092A;
  display: flex;
  align-items: center;
  padding: 0 20px;
}


.logo {
  height: 45px; 
  margin-right: 25px;
  color:white;
}


nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
}

nav ul li {
  position: relative;
}

nav ul li a {
  display: block;
  padding: 14px 20px;
  color: white;
  text-decoration: none;
}

nav ul li a:hover {
  background-color: #555;
}


nav ul li ul {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: black;
  padding: 0;
  margin: 0;
  list-style: none;
}

nav ul li ul li a {
  padding: 12px 16px;
}

nav ul li:hover ul {
  display: block;
}


.login-btn {
  margin-left: auto;
  padding: 4px 10px;
  background-color: beige;
  color: black;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  width:auto;
  height:auto;
}

.login-btn:hover {
  background-color: #e2d9b3;
}
</style>

</head>
<body>

<nav>
  


  
  <ul>
    <li><a href="./menubar/home.php">home</a></li>

    <li>
      <a href="#">company&emsp;&nabla;</a>
      <ul>
        <li><a href="./menubar/director.php">director</a></li>
        <li><a href="./menubar/location.php">location</a></li>
        <li><a href="./menubar/siteoffice.php">site office</a></li>
      </ul>
    </li>

    <li>
      <a href="#">about &emsp; &nabla;</a>
      <ul>
        <li><a href="./menubar/team.php">Our Team</a></li>
        <li><a href="./menubar/history.php">our history</a></li>
      </ul>
    </li>

    <li><a href="./menubar/contact.php">Contact</a></li>
  </ul>


  <button class="login-btn" onclick="myfunction()">Login</button>
</nav>

</body>
</html>
