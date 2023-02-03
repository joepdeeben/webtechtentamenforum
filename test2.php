<?php
include('includes/dbh.inc.php');
    $name = $_POST['name'];
    $geslacht = $_POST['geslacht'];
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $stmt = $db->prepare('INSERT INTO User (username, fullname, email, password, gender) VALUES ( ?, ?, ?, ?, ?)');
$stmt->bindValue(1, $gebruikersnaam, PDO::PARAM_STR);
$stmt->bindValue(2, $name, PDO::PARAM_STR);
$stmt->bindValue(3, $email, PDO::PARAM_STR);
$stmt->bindValue(4, $wachtwoord, PDO::PARAM_STR);
$stmt->bindValue(5, $geslacht, PDO::PARAM_STR);
$stmt->execute();


    header("Location: ../index.php");
    die();

    ?>
    
    