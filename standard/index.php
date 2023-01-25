<!DOCTYPE html>
<html lang="en">
<head>
  <script src="javascript/vakkenfuncties.js"></script>
    <link rel="stylesheet" href="css/stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Homepage</title>

</head>

<body>
<?php include 'header.php';?>
  <div class="main-div-head" id="main-div">
       Welkom op  KI forum 
  </div>   
  <div class="main-div" id="main-div">
    <div class="inmain">
      <div class="titel-main">
        Over ons
      </div>
      <div class="message-main">
        florian graag wat typen met link naar de volledige pagina
      </div>
    </div>
    <div class="inmain-mid">
      <div class="titel-main">
        KI forum
      </div>
      <div class="message-main">
        Hier op het <b>KI forum </b>staat de student centraal, deze site is gedisgned om zo 
        gebruikersvriendelijk te zijn voor een student die Kunstmatige Intelligentie studeerd aan de UvA. <br> <br>
        Met functies om te overleggen met medestudenten over vak specefieke vragen of over andere dingen, een funtie om oefenopgaven 
        te creeëren, oefenen en hier feedback op te krijgen. En hierbij een reward-system om op de leaderbord te klimmen naar de top voor 
        de Hall of fame van de studie. 
      </div>
    </div>

    <?php
    $leader = "Joep";
    $leaderXP = 250;
    $second = "Mark";
    $secondXP = 200;
    $third = "Olivier";
    $thirdXP = 150;
    $fourth = "Surja";
    $fourthXP = 100;
    $fifth = "Florian";
    $fifthXP = 0;
    ?>
    <div class="inmain">
      <div class="titel-main">
        Leaderbord 
      </div>
      <div class="message-main">
        <div class="leaderboard"> Top 5:</div>

          <div class="leaderboard-user1">
            <div class="leaderboard-userprofile">
              <img class="leaderboard-userprofile" src="../images/uva-logo2.png" alt="uva-logo" height=50px>
            
            <span class="leaderboard-username">
            <?php
            echo $leader;
            ?>
            </span>
            <span class="leaderboard-userxp">
            <?php
            echo " $leaderXP XP";
            ?>
            </span>
          </div>
          </div>
      
      <div class="leaderboard-user2">
        <div class="leaderboard-userprofile">
          <img class="leaderboard-userprofile" src="../images/uva-logo2.png" alt="uva-logo" height=50px>
        
        <span class="leaderboard-username">
            <?php
            echo $second;
            ?>
        </span>
        <span class="leaderboard-userxp">
        <?php
            echo "$secondXP XP";
            ?>
        </span>
      </div>
      </div>
  </div>
  <div class="leaderboard-user3">
    <div class="leaderboard-userprofile">
      <img class="leaderboard-userprofile" src="../images/uva-logo2.png" alt="uva-logo" height=50px>
    
    <span class="leaderboard-username">
    <?php
            echo $third;
            ?>
    </span>
    <span class="leaderboard-userxp">
    <?php
            echo "$thirdXP XP";
            ?>
    </span>
  </div>
  </div>
  <div class="leaderboard-user45">
    <div class="leaderboard-userprofile">
      <img class="leaderboard-userprofile" src="../images/uva-logo2.png" alt="uva-logo" height=50px>
    
    <span class="leaderboard-username">
    <?php
            echo $fourth;
            ?>
    </span>
    <span class="leaderboard-userxp">
    <?php
            echo "$fourthXP XP";
            ?>
    </span>
  </div>
  </div>

  <div class="leaderboard-user45">
    <div class="leaderboard-userprofile">
      <img class="leaderboard-userprofile" src="../images/uva-logo2.png" alt="uva-logo" height=50px>
    
    <span class="leaderboard-username">
    <?php
            echo $fifth;
            ?>
    </span>
    <span class="leaderboard-userxp">
    <?php
            echo "$fifthXP XP";
            ?>
    </span>
  </div>
  </div>

  
</div>

    
  
    </div>
</div>   


<?php include 'footer.php';?>
  </body>
</html>