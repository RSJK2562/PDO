<?php
require 'DBConnection.php';
$name = "Swati";
$email = "swati@gmail.com";
$pass = "2002";

// $ins = $conn->prepare("INSERT INTO form (name, email, password) VAlUES (?, ?, ?)");
// $ins->execute(array($name, $email, $pass));

// Last Insert ID Check: //
$ins = $conn->prepare("INSERT INTO form (name, email, password) VAlUES (?, ?, ?)"); 
$ins->execute(["RS RAVI", "rsravi@gmail.com", "rs@172"]);
echo $conn->lastInsertId();
?>