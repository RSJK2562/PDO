<?php
$db_name = "mysql:host=localhost;dbname=test";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

if ($_POST['type'] == "") {
    $sql = $conn->prepare("SELECT * FROM `country_tb`");
    $sql->execute();
    $str = "";
    $row = $sql->fetchAll();
    if (count($row)) {
        foreach ($row as $data) {
            $str .= "<option value='{$data["cid"]}'>{$data["cname"]}</option>";
        }
    }
} elseif($_POST['type'] == "stateData"){
    $sql = $conn->prepare("SELECT * FROM `stabe_tb` WHERE country = {$_POST['id']}");
    $sql->execute();
    $str = "";
    $row = $sql->fetchAll();
    if (count($row)) {
        foreach ($row as $data) {
            $str .= "<option value='{$data["sid"]}'>{$data["sname"]}</option>";
        }
    }
}
echo $str;
?>