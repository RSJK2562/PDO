<?php
$checkbox_id = $_POST["Id"];

$str  = implode($checkbox_id, ",");

// echo $str;
// die();

$db_name =  "mysql:host=localhost;dbname=db2";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password); 

$del = "DELETE FROM `test` WHERE ID IN ({$str})";
$sql = $conn->exec($del);
if($sql){
    echo 1;
} else {
    echo 0;
}
?>