<?php
try {
    require 'DBConnection.php';
    $sql = $conn->prepare("SELECT * FROM form");
    $sql->execute();
    //show error in sql comand
    $error = $sql->errorInfo();
    if($error[1]){
        echo "<pre>";
        print_r($error);
        echo "And error code this " . $sql->errorCode();
    }else{
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}
} catch (PDOException $th) {
    echo $th->getMessage();
}
?>