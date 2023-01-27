<?php
    include_once '../includes/dbh.inc.php';

$name = $_POST['name'];
$geslacht = $_POST['geslacht'];
$gebruikersnaam = $_POST['gebruikersnaam'];
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

    $sql = "INSERT INTO User (username, fullname, email, password, gender) VALUES ('$gebruikersnaam', '$name', '$email', '$wachtwoord', '$geslacht');";
    mysqli_query($conn, $sql);
header("Location: ../index.php?signup=success");

?>