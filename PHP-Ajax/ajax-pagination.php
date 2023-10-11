<?php
$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$limit_pre_page = 5;
$page = "";
if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
}else{
    $page = 1;
}
$offset = ($page - 1) * $limit_pre_page;

$sql = $conn->prepare("SELECT * FROM `student` ORDER BY id DESC LIMIT {$offset},{$limit_pre_page}");
$sql->execute();
$output = "";
$row = $sql->fetchAll();
if (count($row)) {
$output .='
<table class="table table-primary mt-2">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Number</th>
            <th scope="col">Email ID</th>
        </tr>
    </thead>';
    foreach ($row as $data) {
        $output .= "
        <tbody>
            <tr>
                <td scope='row'>{$data["id"]}</td>
                <td>{$data["name"]}</td>
                <td>{$data["city"]}</td>
                <td>{$data["phone"]}</td>
                <td>{$data["email"]}</td>
            </tr>
        </tbody>";
    }
$output .="</table>";

$output .='
<nav aria-label="Page navigation example">
    <ul class="pagination" id="paginationinfo">
    <li class="page-item"><a class="page-link" href="">Previous</a></li>';

    $sql_total = $conn->prepare("SELECT * FROM `student`");
    $sql_total->execute();
    $total_record = $sql_total->rowCount();
    $total_pages = ceil($total_record/$limit_pre_page);

    for($i=1; $i <= $total_pages; $i++){
        if($i == $page){
            $class_name = "active";
        } else{
            $class_name = "";
        }
        $output .="<li class='page-item {$class_name}'><a class='page-link' href='' id='{$i}'>{$i}</a></li>";
    }

$output .='
        <li class="page-item"><a class="page-link" href="">Next</a></li>
    </ul>
</nav>';

    echo $output;
} else {
    echo "<h3>Error - DATA Not Found !</h3>";
}
?>