<?php
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);
$flag =  $_REQUEST['data'];
switch ($flag) {
    case 1:
        // this is select coman sity
        $sql = $conn->prepare("SELECT DISTINCT(city) FROM student");
        $sql->execute();
        $row_count = $sql->rowCount();
        if ($row_count > 0) {
            $output = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($output);
        } else {
            echo "No Record Found";
        }
    break;
    case 2:
        $search_term = $_POST['city'];
        $sql = $conn->prepare("SELECT DISTINCT(city) FROM student WHERE city LIKE '%{$search_term}%'");
        $sql->execute();

        $row_count = $sql->rowCount();
        
        if ($row_count > 0) {
            $data = $sql->fetchAll();
            foreach ($data as $row){
                echo "<p><a>{$row['city']}</p>";
            }
        }else {
            echo "<p>City Not Found</p>";
        }
    break;
}
