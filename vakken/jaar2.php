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
<select id="dropdownvakkenjaar2" onchange="ShowInfoJaar2()">
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

<div id='vaktekstjaar2' style='color:red'>
</div>

</body>
</html>