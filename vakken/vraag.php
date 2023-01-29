<?php
    $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";

    $threadId = "";
    if (isset($_GET['thread_id'])) {
        $threadId = mysqli_real_escape_string($db, $_GET['thread_id']);
    }

    $sql = "SELECT * FROM Thread WHERE thread_Id = '$threadId'";
    $result = mysqli_query($db, $sql);
    $threads = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $vraagtitelvar = "SELECT threadtitle FROM Thread WHERE thread_id = 3";
    $vraagtitelresult = mysqli_query($db, $vraagtitelvar);
    $vraagtitel = mysqli_fetch_assoc($vraagtitelresult);
    echo $vraagtitel['threadtitle'];

    $vraagtitel  = mysqli_query($db, $vraagtitelvar);
    $vraagintro = "hier komen dan de eerste 200 char van de vraag te staan ofzo? even kijken hoe dat gaat met phpaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaadddddddddddddddddddd dddddddddddddddddddddfffffffffffffffffffffffffffffffffffffffffgggggggggggggggggggggggggggggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhsssssssss";
    $vraagmaker = "Olivier Stam";
    $likes = "23"
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
  <div class="vraagtemplate">
    <div class="titelvraagtemplate">
      <?php
      echo $vraagtitel['threadtitle'];
      ?>
    </div>
    <div class="vraagvan">
    <?php
      echo 'Vraag van: ', $vraagmaker;
      ?>
    </div>
    <div class="vraagintro">
      <?php
      echo substr($vraagintro, 0, 200), '...';
      ?>
    </div>
    <div class="likes">
    <?php
      echo  $likes. " ";
      ?>
      <i class="ri-thumb-up-fill"></i>
    </div>
    <div class="vraaagmeer">
    <a href="#"> Zie hier meer! </a>
  </div>
  </div>



</body>
</html>
