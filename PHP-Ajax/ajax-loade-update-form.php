<?php
$student_id = $_POST["id"];

$db_name = "mysql:host=localhost;dbname=rs";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);

$sql = $conn->prepare("SELECT * FROM `student` WHERE id = '$student_id' ORDER BY id desc");
$sql->execute();
$output = "";
$row = $sql->fetchAll();
if (count($row)) {

    foreach ($row as $data) {
        $output .= "
        <form action=''>
            <div class='container-fluid>
                <input type='hidden' class='form-control' id='edit_id' value='{$data["id"]}'>
            
                <label class='form-label'>Name</label>
                <input type='text' class='form-control' id='ename' value='{$data["name"]}'>

                <label class='form-label'>City</label>
                <input type='text' class='form-control' id='ecity' value='{$data["city"]}'>

                <label class='form-label'>Number</label>
                <input type='number' class='form-control' id='enumber' value='{$data["phone"]}'>

                <label class='form-label'>Email</label>
                <input type='email' class='form-control' id='eemail' value='{$data["email"]}'>

            </div>
            <div class='modal-footer mt-3'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <button type='submit' class='btn btn-primary' id='edit-sub'>Save</button>
            </div>
        </div>
        ";
    }
    echo $output;
} else {
    echo "<h1>Error - DATA Not Found !</h1>";
}

?>