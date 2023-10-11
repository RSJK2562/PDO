<?php
require 'DBConnection.php';
$name = "ravi";
$pass = "1234";
$sql = $conn->prepare("SELECT * FROM form WHERE name = ? AND password = ?");
// $sql->bindParam(1, $name, PDO::PARAM_STR);
// $sql->bindValue(2, $pass, PDO::PARAM_INT);
$sql->execute(array($name, $pass));

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
if(count($result)) {
    foreach($result as $row) {
        echo "{$row['ID']} - {$row['name']} , {$row['email']} - {$row['password']} . <br>";
    }
}
else {
    echo "No Record Found";
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
$name = "ravi";
$pass = "ravi@123";
$sql = $conn->prepare("SELECT * FROM form WHERE name = ? AND password = ?");
$sql->execute(array($name, $pass));

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
if(count($result)) {
    foreach($result as $row) {
        echo "{$row['ID']} - {$row['name']} , {$row['email']} - {$row['password']} . <br>";
    }
}
else {
    echo "No Record Found";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
$name = "ravi";
$pass = "1234";
$sql = $conn->prepare("SELECT * FROM form WHERE name = :name AND password = :password");
// $sql->bindParam(':name', $name, PDO::PARAM_STR);
// $sql->bindValue(':password', $pass, PDO::PARAM_INT);
$sql->execute(array(':name' => $name, ':password' => $pass));

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
if(count($result)) {
    foreach($result as $row) {
        echo "{$row['ID']} - {$row['name']} , {$row['email']} - {$row['password']} . <br>";
    }
}
else {
    echo "No Record Found";
}

?>