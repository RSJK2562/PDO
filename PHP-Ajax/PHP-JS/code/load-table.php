<?php
// BDConnction
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$sql = $conn->prepare("SELECT students.id, students.f_name, students.l_name, students.city, class.class_name FROM students LEFT JOIN class ON class.id = students.class");
$sql->execute();
$output = [];
$row = $sql->fetchAll();

if ($row > 0) {
    foreach ($row as $data) {
        $output [] = $data;
    }
}else {
    $output ['empty'] = ['empty'];
}
echo json_encode($output);
