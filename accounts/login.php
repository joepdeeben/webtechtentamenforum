<?php
session_start();

$db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');


if (isset($_POST["gebruikersnaam"]) && isset($_POST["wachtwoord"])) {
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $wachtwoord = $_POST["wachtwoord"];

        $query = "SELECT * FROM User WHERE username='$gebruikersnaam' OR email='$gebruikersnaam'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) > 0) {
           $user = mysqli_fetch_assoc($result);
           if ($wachtwoord == $user["password"]) {
               $_SESSION["user_id"] = $user["user_id"];
               $_SESSION["username"] = $user["username"];
               header("Location: ../index.php");
           } else {
               echo "Incorrect password";
           }
        } else {
           echo "Incorrect username";
        }
}
?>