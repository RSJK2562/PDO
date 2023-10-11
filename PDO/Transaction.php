<?php
try {
    $db_name = "mysql:host=localhost;dbname=rs";
    $username = "root";
    $password = "";

    // array type
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $conn = new PDO($db_name, $username, $password, $options);

    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->beginTransaction();

    $sql1 = $conn->prepare("INSERT INTO student (name, city, phone, email) VALUES (?,?,?,?)");
    $sql2 = $conn->prepare("UPDATE city set cstudent = cstudent + 1 WHERE cname = ?");

    $sql1->execute(["mohan", "kaunpur", "4567899876", "kumar@gmail.com"]);
    $sql2->execute(["kaunpur"]);

    $conn->commit();
    
} catch (Exception $e) {
    $conn->rollBack();
    echo $e->getMessage();
}
