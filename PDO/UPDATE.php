<?php
require 'DBConnection.php';
$up = "UPDATE student SET city='Jaunpur' WHERE city = 'Lucknow'";
// $data = $conn->prepare($up);
// $data->execute();
// echo $data->rowCount();

// Only user for UPDATE, DELETE, INSERT: //
$vr = $conn->exec($up);
echo $vr;

?>