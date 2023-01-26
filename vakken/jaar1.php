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
<select id="dropdownvakkenjaar1" onchange="ShowInfoJaar1()">
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

<div id='Pro' style='color:red;display:none'>
Prolog
</div>

<div id='Iki' style='color:red;display:none'>
Inleiding KI
</div>

</body>
</html>