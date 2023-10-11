<?php
$search_value = $_POST["search"];

$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$sql = $conn->prepare("SELECT * FROM `student` WHERE name LIKE '%{$search_value}%' OR city LIKE '%{$search_value}%' OR phone LIKE '%{$search_value}%' OR email LIKE '%{$search_value}%'");
$sql->execute();
$output = "";
$row = $sql->fetchAll();
if (count($row)) {

    foreach ($row as $data) {
        $output .= "
        <tr>
            <td scope='row'>{$data["id"]}</td>
            <td>{$data["name"]}</td>
            <td>{$data["city"]}</td>
            <td>{$data["phone"]}</td>
            <td>{$data["email"]}</td>
            <td class='text-center'>  
                <button type='submit' class='btn btn-success' id='edit-dtn' data-editid='{$data["id"]}' data-bs-toggle='modal' data-bs-target='#modalId'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </button> 
            </td>
            <td class='text-center'>  
                <button type='submit' class='btn btn-danger' id='delete-dtn' data-deleteid='{$data["id"]}'>
                    <i class='fa-solid fa-eraser'></i>
                </button> 
            </td>
            
        </tr>";
    }
    echo $output;
} else {
    echo "<h3>Error - DATA Not Found !</h3>";
}
?>