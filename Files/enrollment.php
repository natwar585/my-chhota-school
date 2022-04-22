<?php

	include "connection.php";
	if($_POST['class'] == "Pre-Nursery"){
    $insert = $pdo->prepare("INSERT INTO prenursery (ChildName, FatherName, MobileNumber, Address) VALUES (:name, :fname, :mobilenumber, :address)");
    $insert->execute(array(
        ':name' => $_POST['name'],
        ':fname' => $_POST['fname'],
        ':mobilenumber' => $_POST['mobilenumber'],
        ':address' => $_POST['address']));
    }
    else if($_POST['class'] == "Nursery"){
        $insert = $pdo->prepare("INSERT INTO nursery (ChildName, FatherName, MobileNumber, Address) VALUES (:name, :fname, :mobilenumber, :address)");
        $insert->execute(array(
            ':name' => $_POST['name'],
            ':fname' => $_POST['fname'],
            ':mobilenumber' => $_POST['mobilenumber'],
            ':address' => $_POST['address']));
    }
    else if($_POST['class'] == "LKG"){
        $insert = $pdo->prepare("INSERT INTO lkg (ChildName, FatherName, MobileNumber, Address) VALUES (:name, :fname, :mobilenumber, :address)");
        $insert->execute(array(
            ':name' => $_POST['name'],
            ':fname' => $_POST['fname'],
            ':mobilenumber' => $_POST['mobilenumber'],
            ':address' => $_POST['address']));
    }
    else if($_POST['class'] == "UKG"){
        $insert = $pdo->prepare("INSERT INTO ukg (ChildName, FatherName, MobileNumber, Address) VALUES (:name, :fname, :mobilenumber, :address)");
        $insert->execute(array(
            ':name' => $_POST['name'],
            ':fname' => $_POST['fname'],
            ':mobilenumber' => $_POST['mobilenumber'],
            ':address' => $_POST['address']));
    }
?>