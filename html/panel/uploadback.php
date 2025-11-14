<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
$servername="localhost";
$username="root"; //your DB username
$password=""; //your DB password
$dbname="datadb"; //your database
name
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];

//file upload settings
$target_dir="uploads/";
if(!is_dir($target_dir)){
mkdir($target_dir,0777,true);
}
$photo_name=
basename($_FILES["photo"]["name"]);
$target_file=$target_dir.time()."_".$photo_name;

$check=getimagesize($_FILES["photo"]["tmp_name"]);
if($check==false){
die("file  is not an image");
}
if(move_uploaded_file($_FILES["photo"]
["tmp_name"],$target_file)){
$sql="INSERT INTO users(name,email,photo)VALUES('$name','$email','$target_file')";
if($conn>query($sql)===TRUE){
echo "data and photo uploaded successfully!<br>";
echo <a href='$target_file'><img src='$target_file' width='150'></a>";
}
else{
echo "error:" .$sql."<br>".$conn->error;
}
}
else{
echo "error uploading file.";
}
}
$conn->close();
?>


</body>
</html>
