<?php
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$sql = $conn->prepare("SELECT * FROM `student` WHERE city = '{$_POST['city']}'");
$sql->execute();
$output = "";
$row_count = $sql->rowCount();
if($row_count > 0){
    $data = $sql->fetchAll();
    foreach ($data as $row){
        $output .= "<tr>
        <td scope='row'>{$row["id"]}</td>
        <td>{$row["name"]}</td>
        <td>{$row["city"]}</td>
        <td>{$row["phone"]}</td>
        <td>{$row["email"]}</td>
    </tr>";
    }
    echo $output;
} else{
    echo "No Record Found";
}
?>