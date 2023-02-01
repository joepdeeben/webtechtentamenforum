<!DOCTYPE html>
<html lang="en">
<head>
  <script src="../javascript/vakkenfuncties.js"></script>
    <link rel="stylesheet" href="../css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    
    <title>Vakken</title>

</head>

<script>
function ShowYearOne(){
    document.getElementById('framejaar1').style.display='block';
    document.getElementById('framejaar3').style.display='none';
    document.getElementById('framejaar2').style.display='none';
    document.getElementById('buttonjaar1').style.background='white';
    document.getElementById('buttonjaar1').style.color='#304ba3';
    document.getElementById('buttonjaar2').style.background='#304ba3';
    document.getElementById('buttonjaar2').style.color='white';
    document.getElementById('buttonjaar3').style.background='#304ba3';
    document.getElementById('buttonjaar3').style.color='white'
}

function ShowYearTwo(){
    document.getElementById('framejaar2').style.display='block';
    document.getElementById('framejaar3').style.display='none';
    document.getElementById('framejaar1').style.display='none';
    document.getElementById('buttonjaar2').style.background='white';
    document.getElementById('buttonjaar2').style.color='#304ba3';
    document.getElementById('buttonjaar1').style.background='#304ba3';
    document.getElementById('buttonjaar1').style.color='white';
    document.getElementById('buttonjaar3').style.background='#304ba3';
    document.getElementById('buttonjaar3').style.color='white';
}

function ShowYearThree(){
    document.getElementById('framejaar3').style.display='block';
    document.getElementById('framejaar1').style.display='none';
    document.getElementById('framejaar2').style.display='none';
    document.getElementById('buttonjaar3').style.background='white';
    document.getElementById('buttonjaar3').style.color='#304ba3';
    document.getElementById('buttonjaar2').style.background='#304ba3';
    document.getElementById('buttonjaar2').style.color='white';
    document.getElementById('buttonjaar1').style.background='#304ba3';
    document.getElementById('buttonjaar1').style.color='white'
    }






</script>

<body>
  <?php include '../standard/header.php'?>

  <div style="text-align:center;padding:20px">
    <button id="buttonforum" class="vakkennavbutton" onclick="document.getElementById('buttonforum').style.background='white';document.getElementById('buttonforum').style.color='#304ba3';document.getElementById('knoppenjaren').style.display='block'">Ga naar het forum</button>
    <a href="../forum/randomproblem.php"><button class="vakkennavbutton">Maak oefenopgaves</button></a>
  </div>

  <div id="knoppenjaren" style="margin: 0 auto; text-align: center;display:none">
    <button id="buttonjaar1" class="vakkennavbutton" onclick="ShowYearOne()" width="200px">Jaar 1</button>
    <button id="buttonjaar2" class="vakkennavbutton" onclick="ShowYearTwo()" width="200px">Jaar 2</button>
    <button id="buttonjaar3" class="vakkennavbutton" onclick="ShowYearThree()" width="200px">Jaar 3</button>
  </div>

  <div id='framejaar1' style='display:none'>
  <?php include 'jaar1.php'?>
  </div>
  <div id='framejaar2' style='display:none'>
  <?php include 'jaar2.php'?>
  </div>
  <div id='framejaar3' style='display:none'>
  <?php include 'jaar3.php'?>
  </div>

  <?php include '../standard/footer.php'?>
</body>
</html>
