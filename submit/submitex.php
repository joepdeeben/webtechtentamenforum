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

<?php include '../standard/header.php';?>

<div class="subex">
    <span class="titel-vraag"> Submit een opgave</span>
    <form>
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
        <input type="text" id="titelvraag" name="titelvraag" placeholder="Wat is de titel van uw opgave?">
    </div>
    <div class="opgave">
            <textarea id="vraagvolledig" placeholder="Vul hier de geformuleerde opgave in" name="vraagcontent" rows="9" cols="230"></textarea>
  
    </div>
    <div class="antwoord-opgave">
            <textarea id="vraagvolledig" placeholder="Vul hier het antwoord in" name="vraagcontent" rows="9" cols="230"></textarea>
    </div>
    <div class="afbeelding">
        <input type="file" accept="image/*">
    </div>
       </form>
</div>



<script>
var options = {
  "jaar1": ["Option 1a", "Option 1b", "Option 1c"],
  "jaar2": ["Option 2a", "Option 2b", "Option 2c"],
  "jaar3": ["Option 3a", "Option 3b", "Option 3c"]
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

<?php include '../standard/footer.php';?>


</body>
</html>