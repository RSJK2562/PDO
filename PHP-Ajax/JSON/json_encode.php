<?php
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

// $sql = $conn->prepare("SELECT * FROM `serialize`");
// $sql->execute();

$sql = $conn->prepare("SELECT * FROM `serialize`  WHERE id = {$_POST['id']}");
$sql->execute();

$row = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($row);
?>