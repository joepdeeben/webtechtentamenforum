<?php
    $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";

    $threadId = "";
    if (isset($_GET['thread_id'])) {
        $threadId = mysqli_real_escape_string($db, $_GET['thread_id']);
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <script src="../javascript/vakkenfuncties.js">
  </script>
    <link rel="stylesheet" href="../../css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Inleiding Logica
   
    </title>

</head>

<body>

  <div class="main-div-head">
    Inleiding logica
    
  </div>

  <?php
    $course = 'Inleiding Logica';
    $sql = "SELECT thread_id FROM `Thread` WHERE threadcourse = '$course';";
    $result = mysqli_query($db, $sql);
    $threads = array();
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result)> 0){
      while($row = mysqli_fetch_assoc($result)){
        $threads[] = $row;
      }
    }
    foreach ($threads as $thread) {
       echo $thread['thread_id'];
       include 'vraag.php';
   }
?>
<div>
<?php include 'vraag.php'?>
</div>


</body>
</html>
