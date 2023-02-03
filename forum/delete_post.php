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

if (isset($_GET['post_id'])) {
$comment_id = $_GET['post_id'];
$thread_id = mysqli_query($db, "SELECT Thread_thread_id FROM Comment WHERE comment_id = '$comment_id'");
$thread_id = mysqli_fetch_assoc($thread_id)['Thread_thread_id'];
$delete_comment = mysqli_query($db, "DELETE FROM Comment WHERE comment_id = '$comment_id'");
if ($delete_comment) {
    header("Location: thread.php?thread_id=".$thread_id);
} else {
    echo "Error deleting post.";
}
}
?>