<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Homepage</title>
</head>

<body>
    
<?php include '../standard/header.php';?>

<div class="submitdiv" >
    <h1 class="headline">Stel een vraag over een vak</h1>
    <div class="titelvraagdiv">
        <div class="titelvraagtextdiv">

            <a class="titelvraagtext"> Wat is de titel van uw vraag </a>
        </div>
        <div class="titelvraaginvuldiv">
            <input type="text" id="titelvraag" name="vraagnaam" placeholder="Hier de titel van uw vraag"><br>
        </div>

    </div>
    <div class="vraagdiv">
        <div class="vraagtextdiv">

            <a class="vraagtext"> Wat is uw volledige vraag? </a>
        </div>
        <div class="vraaginvuldiv">
                <textarea id="vraagvolledig" placeholder="Vul hier de geformuleerde vraag in" name="vraagcontent" rows="9" cols="230"></textarea>
    </div>
   

    </div>
<div class="dropdownjaardiv">

    <div class="jaartextdiv">

        <a class="jaartext"> In welk jaar wordt het vak van uw vraag gegeven</a>
    </div>
    <select name="jaarvanvak" id="jaardrop">
        <option value="select" disabled selected>Selecteer een jaar</option>
        <option value="jaar 1">Jaar 1</option>
        <option value="jaar 2">Jaar 2</option>
        <option value="jaar 3">Jaar 3</option>
      </select>
    </div>

    <div class="dropdownvakdiv">

        <div class="vaktextdiv">
    
            <a class="vaktext"> Over welk vak stelt u een vraag?</a>
        </div>
        <select name="vakQ" id="vakdrop">
            <option value="select" disabled selected>Selecteer een Vak</option>
            <option value="Prolog">Prolog</option>
            <option value="Inleiding KI">Inleiding KI</option>
            <option value="Inleiding logica">Inleidin logica</option>
          </select>
        </div>
      
        <div class="submitQbuttondiv">
            <button class="submitQbutton" type="submit">Submit</button>
            </div> 
</div>  




</body>
</html>