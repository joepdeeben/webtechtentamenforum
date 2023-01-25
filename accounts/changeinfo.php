<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/stylemain.css">
    <link rel="stylesheet" href="../css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Account info</title>
    <script src="../javascript/login.js"></script>
</head>

<body>
    <div>
        <div class="page-titel">
          Verander uw gegevens
        </div>
        <div class="detail-box">
           <div class="profile-pic">
              <img src="../images/uva-logo2.png" alt="uva-logo" > 
            
                <input type="file" accept="image/*">
          
              
            </div>
            <div class="details">
                <label for="name" ></label>
                  <input type="text" id="changename" placeholder="Verander uw naam" name="name">
                  <br>
                  <label for="geslacht"></label>
                  <select id="changegeslacht"  name="geslacht" >
                    <option value="" disabled selected>geslacht</option>
                    <option value="man">Man</option>11
                    <option value="vrouw">Vrouw</option>
                    <option value="non-binair">Non-binair</option>
                    <option value="anders">Anders</option>
                  </select>
                  <br>
                  <label for="username"></label>
                  <input type="text" id="changelogingebruikersnaam" placeholder="Gebruikersnaam" name="gebruikersnaam" >
                  <br>
                  <label for="email"></label>
                  <input type="email" id="changeemail" placeholder="E-mail" name="email" >
                  <br>
                  <label for="password"></label>
                  <input type="password" id="changewachtwoord" placeholder="Wachtwoord" name="wachtwoord" >
                  <br>
                  <div class="sumbitchange" width="300px">
                  <input type="submit" value="Opslaan">
                </div>
        </div>
       </div>
       
      </div>
</body>
</html>