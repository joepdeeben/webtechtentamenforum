<!DOCTYPE html>
<html lang="en">
<head>
  <script src="javascript/vakkenfuncties.js"></script>
    <link rel="stylesheet" href="css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Vakken</title>

</head>

<body>
  <?php include 'header.php'?>

  <div class="test-div" id="testid">
    Vakken
  </div>
  
  <div id="selectiejaren" style="color:red; text-align: center;">
    Selecteer hier in welk jaar je zit
  </div>

  <div style="margin: 0 auto; text-align: center;">
    <button id="buttonjaar1" class="vakkennavbutton" onclick="ShowYearOne()" width="200px">Jaar 1</button>
    <button id="buttonjaar2" class="vakkennavbutton" onclick="ShowYearTwo()" width="200px">Jaar 2</button>
    <button id="buttonjaar3" class="vakkennavbutton" onclick="ShowYearThree()" width="200px">Jaar 3</button>
  </div>

  <div id='framejaar1' style='display:none'>
  <?php include 'jaar1.html'?>
  </div>
  <div id='framejaar2' style='display:none'>
  <?php include 'jaar2.html'?>
  </div>
  <div id='framejaar3' style='display:none'>
  <?php include 'jaar3.html'?>
  </div>

  <?php include 'footer.php'?>
</body>
</html>