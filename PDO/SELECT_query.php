<?php
require 'DBConnection.php';
$sql = $conn->query("SELECT * FROM student");
while($row = $sql->fetch()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // Importent
$sql = $conn->query("SELECT * FROM student");
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
if(count($result)) {
    foreach($result as $row) {
        echo "{$row['id']} - {$row['name']} , {$row['email']}<br>";
    }
}
else {
    echo "No Record Found";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
            // Array //
$sql = $conn->query("SELECT * FROM student");
while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
$sql = $conn->query("SELECT * FROM student");
while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "{$row['id']} - {$row['name']}, {$row['phone']} <br>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
            // Index Array //
$sql = $conn->query("SELECT * FROM student");
while($row = $sql->fetch(PDO::FETCH_NUM)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
$sql = $conn->query("SELECT * FROM student");
while($row = $sql->fetch(PDO::FETCH_NUM)) {
    echo "{$row[0]} - {$row[1]}, {$row[4]} <br>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
            // stdClass Object //
$sql = $conn->query("SELECT * FROM student");
while($row = $sql->fetch(PDO::FETCH_OBJ)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
$sql = $conn->query("SELECT * FROM student");
while($row = $sql->fetch(PDO::FETCH_OBJ)) {
    echo "{$row->id} - {$row->name}, {$row->city} <br>";
}


?>