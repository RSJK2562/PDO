<?php
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$sql = $conn->prepare("SELECT * FROM `serialize`");
$sql->execute();
$row = $sql->fetchAll(PDO::FETCH_ASSOC);

$json_data = json_encode($row, JSON_PRETTY_PRINT);

$file_name = "My-" .time(). ".json";

if(file_put_contents("JSON/$file_name", $json_data)){
    echo $file_name . "File created.";
} else {
    echo "Can't Insert data in JSON file";
}
?>