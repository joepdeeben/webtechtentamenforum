
<?php
$db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";

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

$sql = "INSERT INTO Thread (User_user_id, threadtitle, threadcontent, threadschoolyear, threadcourse, threadlikes, dateofpost) VALUES ('$user_id', '$vraagtitel', '$vraagcontent', '$vraagjaar', '$vraagvak', 0, '$date')";
$result = mysqli_query($db, $sql);

header("Location: submitQ.php");

?>