<?php
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$limit = 5;
$page = "";
if(isset($_POST['page_no'])){
    $page = $_POST['page_no'];
}else{
    $page = 0;
}

$start=0;
if($page>0) {
    $start=$limit*$page;
}

$sql = $conn->prepare("SELECT * FROM `student` ORDER BY id desc LIMIT {$start},$limit ");
$sql->execute();
$output = "";
$page=$page+1;
$row = $sql->fetchAll();
if (count($row)) {
    foreach ($row as $data) {
        $output .= "
        <tbody>
            <tr>
                <td>{$data["id"]}</td>
                <td>{$data["name"]}</td>
                <td>{$data["city"]}</td>
                <td>{$data["phone"]}</td>
                <td>{$data["email"]}</td>
            </tr>
        </tbody>";
    }
        $output .="
        <tbody id='pagination'>
            <tr>
                <td colspan='5'><button class='btn btn-primary text-light' id='ajaxbtn' data-id='{$page}'>Load More</button></td>
            </tr>
        </tbody>";
    echo $output;
} else {
    echo "";
}
?>