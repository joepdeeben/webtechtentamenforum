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
<select id="dropdownvakkenjaar1" onclick="ShowInfoJaar1()">
    <option value="select" disabled selected>Selecteer een Vak</option>
    <option value="Pro">Prolog</option>
    <option value="Iki">Inleiding KI</option>
    <option value="Log">Inleiding logica</option>
    <option value="Py">Introductie in programmeren</option>
    <option value="Web">Webtechnologie</option>
    <option value="Lin">Lineaire algebra</option>
    <option value="Cog">Inleiding cognitieve psychologie</option>
    <option value="Calc">Calculus en optimalisatie</option>
    <option value="Taal">Taaltheorie en taalverwerking</option>
    <option value="Inf">Informatievisualisatie</option>
    <option value="Pav">Practicum academische vaardigheden</option>
  </select>
</div>


<div class='vakInfo' id='Pro' style='color:red;display:none'>
Prolog
</div>

<div class='vakInfo' id='Iki' style='color:red;display:none'>
Inleiding KI
</div>

</body>
</html>