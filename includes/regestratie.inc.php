<?php
    $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";

    $name = $_POST['name'];
    $geslacht = $_POST['geslacht'];
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $sql = "INSERT INTO User (username, fullname, email, password, gender) VALUES ('$gebruikersnaam', '$name', '$email', '$wachtwoord', '$geslacht')";
    $result = mysqli_query($db, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    ?>