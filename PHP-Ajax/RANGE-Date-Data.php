<?php
$db_name = "mysql:host=localhost;dbname=db2";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

if(isset($_POST["date1"]) && isset($_POST["date2"])){
    $min = $_POST["date1"];
    $max = $_POST["date2"];

    $sql = $conn->prepare("SELECT * FROM `2php` WHERE dob BETWEEN {$min} AND {$max}");
    $sql->execute();

} else{
    $sql = $conn->prepare("SELECT * FROM `2php`");
    $sql->execute();
}

$output = "";
// $row_count = $sql->rowCount();
if($row_count = $sql->rowCount() > 0){

    $data = $sql->fetchAll();
    
    foreach ($data as $row){
        
        $dob = date("d M, Y", strtotime($row["dob"]));
        $output .= "<tr>
            <td scope='row'>{$row["ID"]}</td>
            <td>{$row["name"]}</td>
            <td>{$row["city"]}</td>
            <td>{$dob}</td>
        </tr>";
    
    }
    echo $output;
    
} else{
    echo "<h2>No Record Found.</h2>";
} 

?>