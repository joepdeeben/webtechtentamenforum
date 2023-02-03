<?php
session_start();

$db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); } ;

if (!isset($_SESSION['user_id'])) {
    header("Location: ../accounts/login.php");
}

$user_id = $_SESSION['user_id'];
$is_admin = mysqli_query($db, "SELECT is_admin FROM User WHERE user_id = '$user_id'");
$is_admin = mysqli_fetch_assoc($is_admin)['is_admin'];

if (!$is_admin) {
    header("Location: forumthreads.php");
}

if (isset($_GET['thread_id'])) {
    $thread_id = $_GET['thread_id'];
    $delete_comments = mysqli_query($db, "DELETE FROM Comment WHERE Thread_thread_id = '$thread_id'");
    $delete_thread = mysqli_query($db, "DELETE FROM Thread WHERE thread_id = '$thread_id'");


    if ($delete_thread && $delete_comments) {
        header("Location: forumthreads.php");
    } else {
        echo "Error deleting thread.";
    }
}

?>



