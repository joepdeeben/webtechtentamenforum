<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST)) {
    $content = $_POST['input'];
    $username = $_SESSION["username"];
    $datum = date("Y-m-d");
}

$sql = "INSERT INTO posts (username, datum, content)
VALUES ('$username', '$datum', '$content')";

if ($conn->query($sql) === TRUE) {
  echo "New post created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>