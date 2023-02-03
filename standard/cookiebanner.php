<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>cookies</title>

</head>
<body>

<div id='cookiepopup' class="cookiesbanner">
Deze website maakt gebruik van cookies. Door gebruik te maken van deze website ga je akkoord met ons <a href='#' onclick="document.getElementById('statement').style.display='block'">cookiebeleid</a>.<br>
    <button class="cookiebtnaccept" onclick='cookiesAccept();'>Accepteer</button>
    <button class="cookiebtndecline" onclick='cookiesDecline();'>Weiger</button>
</div>

<iframe src='statement.html' id="statement" style="display:none; height:300px; width:300px;">
</body>
</html>