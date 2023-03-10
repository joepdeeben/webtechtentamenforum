
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="../../javascript/vakkenfuncties.js">
  </script>
    <link rel="stylesheet" href="../css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Jaar 1</title>

</head>

<body>

  <div class="main-div-head" >
    Jaar 1
  </div>

<div class="vaktextdiv" style='text-align:center'>

    <a class="vaktext"> Over welk vak wil je meer informatie zien?</a>
</div>
<div  style='text-align:center'>
<select id="dropdownvakkenjaar1" onclick="ShowInfoJaar1()">
    <option value="select" disabled selected>Selecteer een Vak</option>
    <option value="Prolog">Prolog</option>
    <option value="Inleiding KI">Inleiding KI</option>
    <option value="Inleiding Logica">Inleiding logica</option>
    <option value="Introductie in programmeren">Introductie in programmeren</option>
    <option value="Webtechnologie">Webtechnologie</option>
    <option value="Lineare algebra">Lineaire algebra</option>
    <option value="Inleiding Cognitieve Psychologie">Inleiding cognitieve psychologie</option>
    <option value="Calculus en Optimalisatie">Calculus en optimalisatie</option>
    <option value="Taaltheorie en taalverwerking">Taaltheorie en taalverwerking</option>
    <option value="Informatievisualisatie">Informatievisualisatie</option>
    <option value="PAV">Practicum academische vaardigheden</option>
    <option value="Algemeen jaar 1">Algemene vragen jaar 1</option>
  </select>
</div>


<div class='vakInfo' id='Prolog' style='display:none'>
<?php include 'Vakkenjaar1/prolog.php' ?>
</div>

<div class='vakInfo' id='Inleiding KI' style='display:none'>
<?php include 'Vakkenjaar1/inleiding_ki.php' ?>
</div>

<div class='vakInfo' id='Inleiding Logica' style='display:none'>
<?php include 'Vakkenjaar1/inleiding_logica.php' ?>
</div>

<div class='vakInfo' id='Introductie in programmeren' style='display:none'>
<?php include 'Vakkenjaar1/intro_programmeren.php' ?>
</div>

<div class='vakInfo' id='Webtechnologie' style='display:none'>
<?php include 'Vakkenjaar1/webtech.php' ?>
</div>

<div class='vakInfo' id='Lineare algebra' style='display:none'>
<?php include 'Vakkenjaar1/linalg.php' ?>
</div>

<div class='vakInfo' id='Inleiding Cognitieve Psychologie' style='display:none'>
<?php include 'Vakkenjaar1/inleiding_cogpsy.php' ?>
</div>

<div class='vakInfo' id='Calculus en Optimalisatie' style='display:none'>
<?php include 'Vakkenjaar1/calculus.php' ?>
</div>

<div class='vakInfo' id='Taaltheorie en taalverwerking' style='display:none'>
<?php include 'Vakkenjaar1/taaltheorie.php' ?>
</div>

<div class='vakInfo' id='Informatievisualisatie' style='display:none'>
<?php include 'Vakkenjaar1/infovis.php' ?>
</div>

<div class='vakInfo' id='PAV' style='display:none'>
<?php include 'Vakkenjaar1/PAV.php' ?>
</div>

<div class='vakInfo' id='Algemeen jaar 1' style='display:none'>
<?php include 'Vakkenjaar1/algjaar1.php' ?>
</div>

</body>
</html>