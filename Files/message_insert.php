<?php
    include "connection.php";
    $insert = $pdo->prepare("INSERT INTO message (Name, MobileNumber, Message) VALUES (:name, :mobilenumber, :message)");
    $insert->execute(array(
        ':name' => $_POST['name'],
        ':mobilenumber' => $_POST['mobilenumber'],
        ':message' => $_POST['message']));
?>