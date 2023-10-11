<?php
require 'DBConnection.php';
$data = $conn->prepare("SELECT * FROM `student`");
$data->execute();
$show = $data->fetchAll(PDO::FETCH_COLUMN, 2);
echo "<pre>";
print_r($show);
echo "</pre>";
/////////////////////////////////////////////////////////////////////
$data = $conn->prepare("SELECT city,name,email FROM `student`");
$data->execute();
$show = $data->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
echo "<pre>";
print_r($show);
echo "</pre>";
///////////////////////////////////////////////////////////////////////
$data = $conn->prepare("SELECT name,email FROM `student`");
$data->execute();
$show = $data->fetchAll(PDO::FETCH_KEY_PAIR);
echo "<pre>";
print_r($show);
echo "</pre>";
////////////////////////////////////////////////////////////////
$data = $conn->prepare("SELECT * FROM `student` WHERE city= 'Jaunpur'");
$data->execute();
echo $data->rowCount();
?>