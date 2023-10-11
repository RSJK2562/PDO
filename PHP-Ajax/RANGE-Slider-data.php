<?php
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

if(isset($_POST["range1"]) && isset($_POST["range2"])){
    $min = $_POST["range1"];
    $max = $_POST["range2"];
    $sql = $conn->prepare("SELECT * FROM `serialize` WHERE age BETWEEN {$min} AND {$max}");
    $sql->execute();

} else{
    $min = "";
    $max = "";
    $sql = $conn->prepare("SELECT * FROM `serialize`");
    $sql->execute();
}

$output = "";
$row_count = $sql->rowCount();
if($row_count > 0){
    $data = $sql->fetchAll();
    foreach ($data as $row){
        $output .= "<tr>
        <td scope='row'>{$row["id"]}</td>
        <td>{$row["name"]}</td>
        <td>{$row["age"]}</td>
        <td>{$row["gender"]}</td>
        <td>{$row["city"]}</td>
    </tr>";
    }
    echo $output;
} else{
    echo "<h2>No Record Found.</h2>";
} 
?>