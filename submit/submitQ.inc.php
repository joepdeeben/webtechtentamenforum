
<?php
$db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";

session_start();
    $user_id = $_SESSION["user_id"];

$vraagjaar = $_POST['jaar'];
$vraagvak = $_POST['vakken'];
$vraagtitel = $_POST['titelvraag'];
$vraagcontent = $_POST['email'];
$vraagimage = $_POST['w'];
date_default_timezone_set('Europe/Amsterdam');
$date = date("d-m-Y");

$sql = "INSERT INTO  (User_user_id, threadtitle, threadcontent, threadschoolyear, threadcourse, threadlikes, dateofpost, image) VALUES ('$user_id', '$vraagtitel', '$vraagcontent', '$vraagjaar', '$vraagvak', 0, '$date', '$vraagimage)";
$result = mysqli_query($db, $sql);

?>