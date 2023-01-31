<!DOCTYPE html>
<html lang="en">
<head>
  <script src="../../javascript/vakkenfuncties.js"></script>
    <link rel="stylesheet" href="../../css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <link href="/path/to/dist/jquery-dm-select-show.css" rel="stylesheet" />
	<script src="/path/to/cdn/jquery.slim.min.js"></script>
	<script src="/path/to/dist/jquery-dm-select-show.min.js"></script>
    <title>Jaar 2</title>

</head>

<body>

  <div class="main-div-head">
    Jaar 2
  </div>

  <div class="vaktextdiv" style='text-align:center'>

    <a class="vaktext"> Over welk vak wil je meer informatie zien?</a>
</div>
<div  style='text-align:center'>
<select id="dropdownvakkenjaar2" onclick="ShowInfoJaar2()">
    <option value="select" disabled selected>Selecteer een Vak</option>
    <option value="Bayesian Statistics for Machine Learning">Bayesian statistics for machine learning</option>
    <option value="Computersystemen">Computersystemen</option>
    <option value="Computationele logica">Computationele logica</option>
    <option value="Leren">Leren</option>
    <option value="Leren en Beslissen">Leren en beslissen</option>
    <option value="Datastructuren en Algoritmen">Datastructuren en algoritmen</option>
    <option value="Natuurlijke taalmodellen en interface">Natuurlijke taalmodellen en interfaces</option>
    <option value="Cognitive modelling">Cognitive modelling</option>
    <option value="Introduction to computer vision">Introduction to computer vision</option>
    <option value="Tweedejaarsproject BSc KI">Tweedejaarsproject BSc KI</option>
    <option value="Oriëntatie op studie en loopbaan">Oriëntatie op studie en loopbaan</option>
    <option value="Algemeen jaar 2">Algemen vragen jaar 2</option>
  </select>
</div>

<div class='vakInfo' id='Bayesian Statistics for Machine Learning' style='display:none'>
<?php include 'Vakkenjaar2/baystat.php' ?>
</div>

<div class='vakInfo' id='Computersystemen' style='display:none'>
<?php include 'Vakkenjaar2/compsys.php' ?>
</div>

<div class='vakInfo' id='Computationele logica' style='display:none'>
<?php include 'Vakkenjaar2/complog.php' ?>
</div>

<div class='vakInfo' id='Leren' style='display:none'>
<?php include 'Vakkenjaar2/leren.php' ?>
</div>

<div class='vakInfo' id='Leren en Beslissen' style='display:none'>
<?php include 'Vakkenjaar2/lerbes.php' ?>
</div>

<div class='vakInfo' id='Datastructuren en Algoritmen' style='display:none'>
<?php include 'Vakkenjaar2/data.php' ?>
</div>

<div class='vakInfo' id='Natuurlijke taalmodellen en interface' style='display:none'>
<?php include 'Vakkenjaar2/taalmodellen.php' ?>
</div>

<div class='vakInfo' id='Cognitive modelling' style='display:none'>
<?php include 'Vakkenjaar2/cogmod.php' ?>
</div>

<div class='vakInfo' id='Introduction to computer vision' style='display:none'>
<?php include 'Vakkenjaar2/compvis.php' ?>
</div>

<div class='vakInfo' id='Tweedejaarsproject BSc KI' style='display:none'>
<?php include 'Vakkenjaar2/tweedejaarsproject.php' ?>
</div>

<div class='vakInfo' id='Oriëntatie op studie en loopbaan' style='display:none'>
<?php include 'Vakkenjaar2/orientatie.php' ?>
</div>

<div class='vakInfo' id='Algemeen jaar 2' style='display:none'>
<?php include 'Vakkenjaar2/algjaar2.php' ?>
</div>

</body>
</html>