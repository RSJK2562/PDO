<?php
$name = $_POST["Name"];
$city = $_POST["City"];
$number = $_POST["Number"];
$email = $_POST["Email"];

// BDConnction
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$ins = $conn->prepare("INSERT INTO `student`(`name`, `city`, `phone`, `email`) VALUES ('$name','$city','$number','$email')");
$ins->execute();
if($ins){
    echo 1;
} else {
    echo 0;
}
?>