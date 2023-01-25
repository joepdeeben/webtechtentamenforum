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
    <title>Submit een opgave</title>
</head>

<body>

<?php include '../standard/header.php';?>

<div class="subex">
    <span class="titel-vraag"> Submit een opgave</span>
    <form>
    <div class="info-vraag">
        <div class="jaar-vraag">
            <select name="jaar" id="options">
                <option value="" disabled selected>Kies een jaar</option>
                <option value="Algemeen">Algemeen</option>
                <option value="Jaar 1">Jaar 1</option>
                <option value="Jaar 2">Jaar 2</option>
                <option value="Jaar 3">Jaar 3</option>
            </select>
        </div>
        <div class="vak-vraag">
            <select id="choices">
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
<?php include '../standard/footer.php';?>


</body>
</html>