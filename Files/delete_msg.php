<?php
   include "connection.php";
    $stmt = $pdo->prepare("DELETE FROM message WHERE Message = :msg");
    $stmt->execute(array(':msg' => $_GET['msg']));
    header('Location:admin_page.php');
?>