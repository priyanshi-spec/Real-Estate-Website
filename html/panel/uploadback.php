<?php
$servername="localhost";
$username="root";
$password="";
$dbname="datadb";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

if(isset($_POST['submit'])){
    
    $target_dir = "../uploads/";
    if(!is_dir($target_dir)){
        mkdir($target_dir,0777,true);
    }

    $photo_name = basename($_FILES["photo"]["name"]);
    $new_name = time() . "_" . $photo_name;
    $target_file = $target_dir . $new_name;

    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check == false){
        die("File is not an image");
    }

    if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){

        $saved_path = "uploads/" . $new_name;

        $sql = "INSERT INTO users(photo) VALUES('$saved_path')";
        
        if($conn->query($sql) === TRUE){
            echo "Photo uploaded successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading file.";
    }
}
$conn->close();
?>
