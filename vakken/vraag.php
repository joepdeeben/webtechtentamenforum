<?php
    $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";

    $threadId = "";
    if (isset($_GET['thread_id'])) {
        $threadId = mysqli_real_escape_string($db, $_GET['thread_id']);
    }

    $sql = "SELECT * FROM Thread WHERE thread_Id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "s", $threadId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $threads = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $vraagtitelvar = "SELECT threadtitle FROM Thread WHERE thread_id = ?";
    $stmt2 = mysqli_prepare($db, $vraagtitelvar);
    mysqli_stmt_bind_param($stmt2, "s", $current_thread);
    mysqli_stmt_execute($stmt2);
    $vraagtitelresult = mysqli_stmt_get_result($stmt2);
    $vraagtitel = mysqli_fetch_assoc($vraagtitelresult);
    $vraagtiteloutput = $vraagtitel['threadtitle'];

    

    $vraagcontentvar = "SELECT threadcontent FROM Thread WHERE thread_id = ?";
    $stmt = mysqli_prepare($db, $vraagcontentvar);
    mysqli_stmt_bind_param($stmt, "s", $current_thread);
    mysqli_stmt_execute($stmt);
    $vraagcontentresult = mysqli_stmt_get_result($stmt);
    $vraagcontent = mysqli_fetch_assoc($vraagcontentresult);
    $vraagcontentoutput = $vraagcontent['threadcontent'];


    $vraaguservar = "SELECT User_user_id FROM Thread WHERE thread_id = ?";
    $stmt = mysqli_prepare($db, $vraaguservar);
    mysqli_stmt_bind_param($stmt, "s", $current_thread);
    mysqli_stmt_execute($stmt);
    $vraaguserresult = mysqli_stmt_get_result($stmt);
    $vraaguser = mysqli_fetch_assoc($vraaguserresult);

    $stmt2 = mysqli_prepare($db, "SELECT username FROM User WHERE user_id = ?");
    mysqli_stmt_bind_param($stmt2, "s", $vraaguser['User_user_id']);
    mysqli_stmt_execute($stmt2);
    $usernameresult = mysqli_stmt_get_result($stmt2);
    $username = mysqli_fetch_assoc($usernameresult);
    $usernameoutput = $username['username'];


    $vraaglikesvar = "SELECT threadlikes FROM Thread WHERE thread_id = ?";
    $stmt = mysqli_prepare($db, $vraaglikesvar);
    mysqli_stmt_bind_param($stmt, "s", $current_thread);
    mysqli_stmt_execute($stmt);
    $vraaglikesresult = mysqli_stmt_get_result($stmt);
    $vraaglikes = mysqli_fetch_assoc($vraaglikesresult);
    $vraaglikesoutput = $vraaglikes['threadlikes'];


      
    
    
    ?>


   
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="../javascript/vakkenfuncties.js">
  </script>
    <link rel="stylesheet" href="../css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Vraag</title>

</head>
<?php


?>
<body>
<a href="../forum/forumthreads.php?thread_id=<?php echo $current_thread; ?>">
  <div class="vraagtemplate">
    <div class="titelvraagtemplate">
      <?php
      echo $vraagtiteloutput;
      ?>
    </div>
    <div class="vraagvan">
    <?php
      echo 'Vraag van: ', $usernameoutput;
      ?>
    </div>
    <div class="vraagintro">
      <?php
      if (strlen($vraagcontentoutput) > 150) {
        echo substr($vraagcontentoutput, 0, 150), '...';
      }
      else {
        echo $vraagcontentoutput;
      }
      ?>
    </div>
    <div class="likes">
    <?php
      echo  $vraaglikesoutput. " ";
      ?>
      <i class="ri-thumb-up-fill"></i>
    </div>
    <h>Klik voor meer</h>
  </div>

 </a>

</body>
</html>
