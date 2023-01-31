<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Submit een opgave</title>
</head>

<body>



<div class="subex">
    <span class="titel-vraag">Stel een Vraag!</span>
    <form action="../submit/submitQ.inc.php">
    <div class="info-vraag">
        <div class="jaar-vraag">
            <select name="jaar" id="jaar">
                <option value="" disabled selected>Kies een jaar</option>
                <option value="Algemeen">Algemeen</option>
                <option value="jaar1">Jaar 1</option>
                <option value="jaar2">Jaar 2</option>
                <option value="jaar3">Jaar 3</option>
            </select>
        </div>
        <div class="vak-vraag">
            <select id="vakken" name="vakken">
            <option value="" disabled selected>Kies een vak</option>
            </select>
        </div>
    </div>

    <div class="titel-opgave-sub">
        <input type="text" id="titelvraag" name="titelvraag" placeholder="Wat is de titel van uw vraag?">
    </div>
    <div class="opgave">
            <textarea id="vraagvolledig" placeholder="Vul hier een geformuleerde vraag in" name="vraagcontent" rows="9" cols="230"></textarea>
  
    </div>
    
    <div class="afbeelding">
        Upload een afbeelding bij de opgave: <br>
        <input type="file" accept="image/*" name="vraagimage">
    </div>
    <div class="submitbtn">
    <input  type="submit" value="Stel uw vraag!" onclick="return validateForm()">
</div>
       </form>
</div>



<script>
var options = {
  "jaar1": ["Prolog", "Inleiding KI", "Inleiding Logica", "Introductie in programmeren", "Webtechnologie", "Lineare algebra", "Inleiding Cognitieve Psychologie", "Calculus en Optimalisatie", "Taaltheorie en taalverwerking", "Informatievisualisatie", "PAV", "Algemeen jaar 1"],
  "jaar2": ["Bayesian Statistics for Machine Learning", "Computersystemen", "Computationele logica", "Leren", "Leren en Beslissen", "Datastructuren en Algoritmen", "Natuurlijke taalmodellen en interface", "Cognitive modelling","Introduction to computer vision","Tweedejaarsproject BSc KI", "Oriëntatie op studie en loopbaan", "Algemeen jaar 2"  ],
  "jaar3": ["Keuzevakken", "Filosofie en AI", "Keuzevak", "Afstudeerproject BSc KI", "Algemeen jaar 3"],
  "Algemeen": ["Algemeen jaar 1", "Algemeen jaar 2", "Algemeen jaar 3", "Algemeen studie" ]
};

$("#jaar").change(function() {
  var selected = $(this).val();
  var vakken = $("#vakken");
  vakken.html("");
  options[selected].forEach(function(opt) {
    vakken.append($("<option>").text(opt));
  });
});
</script>



</body>
</html>