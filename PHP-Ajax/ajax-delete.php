<?php
$student_id = $_POST["id"];

$db_name =  "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password); 

$del = "DELETE FROM `student` WHERE id = $student_id";
$sql = $conn->exec($del);
if($sql){
    echo 1;
} else {
    echo 0;
}
?>