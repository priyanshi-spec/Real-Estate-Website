<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu with Submenu</title>
<style>
body 
{
  font-family: Arial, sans-serif;
  margin: 0;
}
nav{
	background-color:#0B092A;
}

nav ul 
{
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
}

nav ul li
 {
  position: relative;
}

nav ul li a 
{
  display: block;
  padding: 14px 20px;
  color: white;
  text-decoration: none;
}

nav ul li a:hover
 {
  background-color: #555;
}


nav ul li ul 
{
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color:black;
  padding: 0;
  margin: 0;
  list-style: none;
}

nav ul li ul li a 
{
  padding: 12px 16px;
}

nav ul li:hover ul
{
  display: block; 
}
</style>
</head>
<body>
<nav>
  <ul>
    <li><a href="#">home</a></li>
    <li>
      <a href="#">company&emsp;&nabla;</a>
      <ul>
        <li><a href="#">director</a></li>
        <li><a href="#">location</a></li>
        <li><a href="#">site office</a></li>
      </ul>
    </li>
    <li>
      <a href="#">about &emsp; &nabla;</a>
      <ul>
        <li><a href="#">Our Team</a></li>
        <li><a href="#">our history</a></li>
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
</body>
</html>