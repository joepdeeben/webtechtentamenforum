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
    <script>

    function cookiesAccept(){
        document.cookie='cookies=accepted;'
        document.getElementById('cookiepopup').style.display='none';
    }

    function cookiesDecline(){
        document.cookie='cookies=declined'
        document.getElementById('cookiepopup').style.display='none';
        setTimeout(cookiePopUp, 10000)
    }

    function cookiePopUp(){
        cookies=getCookie('cookies');
        if (cookies !== 'accepted'){
        document.getElementById('cookiepopup').style.display='block';
    }
    else {
        document.getElementById('cookiepopup').style.display='none';
    }}

    function getCookie(cname){
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }}
    </script>
</head>
<body onload="cookiePopUp()">

<div id='cookiepopup' class="cookiesbanner" style="display:none">
Deze website maakt gebruik van cookies. Door gebruik te maken van deze website ga je akkoord met ons cookiebeleid.
    <button class="cookiebtnaccept" onclick='cookiesAccept();'>Accepteer</button>
    <button class="cookiebtndecline" onclick='cookiesDecline();'>Weiger</button>
</div>
</body>
</html>