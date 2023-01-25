<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/stylemain.css">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <script src="javascript/vakkenfuncties.js"></script>
    <title>Homepage</title>

</head>

<header>
    <a href="../index.php" class="logo"><img src="../images/uva-logo2.png" alt="uva-logo" height=50px, border-radius="1px"></i>&nbsp;&nbsp;<span><button class="homebtn" type="button">Home</button></span></a>
        

    <ul class="navigatie">
        
        <div class="dropdown">
          <a href="vakken.php"><button class="dropbtn" onclick="FormJarenOpen()">Vakken</button></a> 
          <div class="dropdown-content">
            <a href="vakken.php"><button class="dropdown-contentbutton" onclick="ShowYearOne();">Jaar 1</button></a>
            <a href="vakken.php"><button class="dropdown-contentbutton" onclick="ShowYearTwo();">Jaar 2</button></a>
            <a href="vakken.php"><button class="dropdown-contentbutton" onclick="ShowYearThree();">Jaar 3</button></a>
          </div>
        </div>
        
        <div class="dropdown">
          <a href="submitQ.html"><button class="dropbtn" onclick="document.getElementById('testid').innerHTML = 'Stel je vraag'">Stel je vraag</button></a>
          <div class="dropdown-content">
            <a href="#"><button class="dropdown-contentbutton" onclick="document.getElementById('testid').innerHTML = 'Algemene vraag'">Algemene vraag</button></a>
            <a href="#"><button class="dropdown-contentbutton" onclick="document.getElementById('testid').innerHTML = 'Vak specifiek'">Vak specifiek</button></a>
          </div>
          
        </div>
        <div class="dropdown">
        <a href="index.php"><button  class="dropbtn">Submit een opgave<i class="ri-add-circle-line"></i></button></a>
        <div class="dropdown-content">
          <!-- <a href="index.html"><button class="dropdown-contentbutton" onclick="document.getElementById('testid').innerHTML = 'Algemene vraag'">Algemene vraag</button></a>
          <a href="index.html"><button class="dropdown-contentbutton" onclick="document.getElementById('testid').innerHTML = 'Vak specifiek'">Vak specifiek</button></a>
     -->   </div> 
        
      </div>
        
    </ul>

        <div class="main">
            <li><a href="#" class="user"><i class="ri-inbox-line"></i>Inbox</a></a></li>
            <li><a href="../account.php" class="user"><i class="ri-user-3-line"></i>Account</a></li>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
        <script type="text/javascript" src="javascript/scriptnav.js"></script>

</header>
</body>
</html>