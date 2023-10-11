<?php
$db_name = "mysql:host=localhost;dbname=db2";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$sql = $conn->prepare("SELECT * FROM `test` ORDER BY id desc");
$sql->execute();
$output = "";
$row = $sql->fetchAll();
if (count($row)) {

    foreach ($row as $data) {
        $output .= "
        <tr>
            <td scope='row'>{$data["ID"]}</td>
            <td>{$data["name"]}</td>
            <td>{$data["email"]}</td>
            <td class='text-center'>  
            <input type='checkbox' name='' id='' value='{$data["ID"]}'>
            </td>
        </tr>";
    }
    echo $output;
} else {
    echo "<h3>Error - DATA Not Found !</h3>";
}
?>