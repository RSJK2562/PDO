<?php
if ($_POST['name'] != '' && $_POST['age'] != '' && $_POST['gnd'] != '' && $_POST['city'] != '') {
    if (file_exists('JSON/My-json-form-data.json')) {

        $current_data = file_get_contents('JSON/My-json-form-data.json');
        $array_data = json_decode($current_data, true);

        $new_data = array(
            'id' => $id,
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'gender' => $_POST['gnd'],
            'city' => $_POST['city']
        );

        $array_data[] = $new_data;
        $json_data = json_encode($array_data, JSON_PRETTY_PRINT);

        if (file_put_contents('JSON/My-json-form-data.json', $json_data)) {
            echo "<h3>Successfully saved data in JSON file.</h3>";
            // echo "<script>window.location.href='JSON-save-form-data.php';alert('Successfully saved data in JSON file.');</script>";
        } else {
            echo "<h3>Us_Successfully saved data in JSON file.</h3>";
        }
    } else {
        echo "<h3>JSON file not exist.</h3>";
    }
} else {
    echo "<h3>All form fileds are required !</h3>";
}
?>