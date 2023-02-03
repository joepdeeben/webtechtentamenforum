
<?php
include("../includes/dbh.inc.php");

session_start();
    $user_id = $_SESSION["user_id"];
echo ($user_id);
$vraagjaar = $_POST['jaar'];
$vraagvak = $_POST['vakken'];
$vraagtitel = $_POST['titelvraag'];

$max_length = 250;
$vraagcontent = $_POST['vraagcontent'];
$truncated_content = substr($vraagcontent, 0, $max_length);
$vraaganswer = $_POST['vraaganswer'];
date_default_timezone_set('Europe/Amsterdam');
$date = date("Y-m-d");

$stmt = $db->prepare('INSERT INTO Exercise (User_user_id, exercisetitle, exercisecontent, exerciseanswer, exercisejaar, exercisecourse, exerciselikes) VALUES ( ?, ?, ?, ?, ?, ?, ?)');
$stmt->bindValue(1, $user_id, PDO::PARAM_INT);
$stmt->bindValue(2, $vraagtitel, PDO::PARAM_STR);
$stmt->bindValue(3, $truncated_content, PDO::PARAM_STR);
$stmt->bindValue(4, $vraaganswer, PDO::PARAM_STR);
$stmt->bindValue(5, $vraagjaar, PDO::PARAM_STR);
$stmt->bindValue(6, $vraagvak, PDO::PARAM_STR);
$stmt->bindValue(7, 0, PDO::PARAM_INT);
$stmt->execute();



header("Location: submitex.php");

?>