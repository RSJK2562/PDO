<?php
$user_id = $_POST["Id"];
$name = $_POST["Name"];
$city = $_POST["City"];
$number = $_POST["Number"];
$email = $_POST["Email"];

// BDConnction
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$up = "UPDATE `student` SET `name`='$name',`city`='$city',`phone`='$number',`email`='$email' WHERE id = $user_id";
$sql = $conn->exec($up);
if($sql){
    echo 1;
} else {
    echo 0;
}
?>