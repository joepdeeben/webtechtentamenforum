<!DOCTYPE html>
<html lang="en">
<head>
    <script src="javascript/formopen.js"></script>
    <link rel="stylesheet" href="../css/stylemain.css">
    <link rel="stylesheet" href="../css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Login</title>
    <script src="../javascript/login.js"></script>
</head>

<body>
    

<div class="logindiv" >
    <form action="changeinfo.php">
        
        <div class="logintextdiv">
            <h1 class="logintext">KI Forum</h1>
        </div>
        <label for="username"></label>
        <input type="text" id="logingebruikersnaam" name="gebruikersnaam" placeholder=" Gebruikersnaam of E-mail"><br>
        
        <label for="password"></label>
        <input type="password" id="wachtwoord" name="wachtwoord" placeholder=" Wachtwoord"><br>
       <br>
        
        <input type="submit" value="Log in!" onclick="return validateForm()">
      </form>
      <div class="registeraanraaddiv">
        <a href="regestratie.php" class="registeraanraadtext" target="_blank">Nog geen account? registreer je nu!</a>
        </div>   
    </div>
    



</body>
</html>