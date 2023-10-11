<?php
$json_string = 'JSON/myjson-data1.json';

$jsondata = file_get_contents($json_string);

$arr = json_decode($jsondata, true);

echo '<table border = "1" cellpadding = "10px" width="80%">
    <h2 style="color:red; text-align: center;">JSON to ARRAY</h2>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr> 
    </thead>';

foreach($arr as list("id" => $id, "name" => $name, "email" => $email)){
    echo "<tbody> <tr> <td>{$id}</td><td>{$name}</td><td>{$email}</td> </tr> </tbody>";
}

echo '</table>';

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
?>