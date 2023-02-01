<?php
    $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $geslacht = $_POST['geslacht'];
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $sql = "INSERT INTO User (username, fullname, email, password, gender) VALUES ('$gebruikersnaam', '$name', '$email', '$wachtwoord', '$geslacht')";
    $result = mysqli_query($db, $sql);
    }

    header("Location: ../index.php");
    die();

    ?>