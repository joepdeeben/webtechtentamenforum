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
    <title>Jaar 3</title>
</head>

<body>

  <div class="main-div-head">
    Jaar 3
  </div>

  <div class="vaktextdiv" style='text-align:center'>

    <a class="vaktext"> Over welk vak wil je meer informatie zien?</a>
</div>
<div  style='text-align:center'>
<select id="dropdownvakkenjaar3" onchange="ShowInfoJaar3()">
    <option value="select" disabled selected>Selecteer een Vak</option>
    <option value="Keuzevakken">Keuzevakken</option>
    <option value="Filosofie en AI">Filosofie en AI</option>
    <option value="Keuzevak">Keuzevak</option>
    <option value="Afstudeerproject BSc KI">Afstudeerproject BSc KI</option>
    <option value="Algemeen jaar 3">Algemene vragen jaar 3</option>
    
  </select>
</div>

<div id='vaktekstjaar3' style='color:red'>
</div>

</body>
</html>