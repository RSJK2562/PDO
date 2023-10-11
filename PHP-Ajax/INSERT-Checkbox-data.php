<?php
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$name = $_POST["name"];
$language =$_POST["language"];

$ins = $conn->prepare("INSERT INTO `name&lang`(`name`, `languages`) VALUES ('$name', '$language')");
$ins->execute();

if($ins){
    echo "Successfully Saved !";
}else{
    echo "Can't Saved Form Data.";
}
?>