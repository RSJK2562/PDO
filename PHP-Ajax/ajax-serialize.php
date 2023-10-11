<?php
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gnd'];
$city = $_POST['city'];

$ins = $conn->prepare("INSERT INTO `serialize`(`name`, `age`, `gender`, `city`) VALUES ('$name', '$age', '$gender', '$city')");
$ins->execute();
if($ins){
    echo "Hello {$name} your record is saved !";
} else{
    echo "Error !";
}
?>