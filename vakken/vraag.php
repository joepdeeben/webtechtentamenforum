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
$vraagtitel = "dit is de titel van de vraag";
$vraagintro = "hier komen dan de eerste 200 char van de vraag te staan ofzo? even kijken hoe dat gaat met phpaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaadddddddddddddddddddd dddddddddddddddddddddfffffffffffffffffffffffffffffffffffffffffgggggggggggggggggggggggggggggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhsssssssss";
?>
<body>
  <div class="vraagtemplate">
    <div class="titelvraagtemplate">
      <?php
      echo $vraagtitel;
      ?>
    </div>
    <div class="vraagintro">
      <?php
      echo substr($vraagintro, 0, 200), '...';
      ?>
    </div>
  </div>
  <div style='color:orange;font-size:50px;text-align:center'>
 
  </div>



</body>
</html>