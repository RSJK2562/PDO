<?php
require 'DBConnection.php';
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ATTR_ERRMODE);
$sql = $conn->prepare("SELECT name, phone FROM `student`");
$sql->execute();

// $sql->bindColumn('name', $sname);
// $sql->bindColumn('phone', $snumber);
$sql->bindColumn(1, $sname);
$sql->bindColumn(2, $snumber);

while($row = $sql->fetch()){
    echo "{$sname} - {$snumber} <br>";
}
?>