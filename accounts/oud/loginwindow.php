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
    <title>Login</title>
    <script src="submitQ.js"></script>
</head>
 <script>
        function changeIframe() {
            var iframe = document.getElementById("my-iframe");
            iframe.src = "accounts\changeinfo.html";
        }
    </script>
<body>
   

<div class="logindiv" >
    <div class="logintextdiv">
        <h1 class="logintext">KI Forum</h1>
    </div>
    <div class="usernamediv">
        <label for="username"></label>
        <input type="text" id="logingebruikersnaam" name="gebruikersnaam" placeholder=" Gebruikersnaam of E-mail"><br>
        </div>
    <div class="wachtwoorddiv">
        <input type="password" id="loginwachtwoord" name="wachtwoord" placeholder=" Wachtwoord"><br>
        </div>
    <div class="loginbuttondiv">
        <button class="loginbutton" type="submit" onclick="changeIframe()">Log in</button> <!---asl dit goed gaat dan account pagina-->
        </div> 
    <div class="registeraanraaddiv">
        <a href="accounts/regestratie.html" class="registeraanraadtext" target="_blank">Nog geen account? registreer je nu!</a>
        </div>   
    </div>
    



</body>
</html>