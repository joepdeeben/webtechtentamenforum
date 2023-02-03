
<?php
include("../includes/dbh.inc.php");


session_start();
    $user_id = $_SESSION["user_id"];
echo ($user_id);
$vraagjaar = $_POST['jaar'];
$vraagvak = $_POST['vakken'];
$vraagtitel = $_POST['titelvraag'];
$vraagcontent = $_POST['vraagcontent'];
$vraagimage = $_POST['vraagimage'];
date_default_timezone_set('Europe/Amsterdam');
$date = date("Y-m-d");
error_reporting(0);

// $sql = "INSERT INTO Thread (User_user_id, threadtitle, threadcontent, threadschoolyear, threadcourse, threadlikes, dateofpost) VALUES ('$user_id', '$vraagtitel', '$vraagcontent', '$vraagjaar', '$vraagvak', 0, '$date')";
// $result = mysqli_query($db, $sql);

$stmt = $db->prepare('INSERT INTO Thread (User_user_id, threadtitle, threadcontent, threadschoolyear, threadcourse, threadlikes, dateofpost) VALUES ( ?, ?, ?, ?, ?, ?, ?)');
$stmt->bindValue(1, $user_id, PDO::PARAM_INT);
$stmt->bindValue(2, $vraagtitel, PDO::PARAM_STR);
$stmt->bindValue(3, $vraagcontent, PDO::PARAM_STR);
$stmt->bindValue(4, $vraagjaar, PDO::PARAM_STR);
$stmt->bindValue(5, $vraagvak, PDO::PARAM_STR);
$stmt->bindValue(6, 0, PDO::PARAM_INT);
$stmt->bindValue(7, $date, PDO::PARAM_STR);
$stmt->execute();

header("Location: submitQ.php");

?>