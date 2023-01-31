<?php
  $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
  if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";
?>
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
<?php include 'standard/header.php';?>
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
    $sql = "SELECT username, userexp FROM `User` ORDER BY userexp DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    $i = 1;
    while($row = mysqli_fetch_assoc($result)) {
        $username = $row["username"];
        $userexp = $row["userexp"];
        ${'user'.$i} = $username;
        ${'userxp'.$i} = $userexp;
        $i++;
    }
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
            echo $user1;
            ?>
            </span>
            <span class="leaderboard-userxp">
            <?php
            echo " $userxp1 XP";
            ?>
            </span>
          </div>
          </div>
      
      <div class="leaderboard-user2">
        <div class="leaderboard-userprofile">
          <img class="leaderboard-userprofile" src="../images/uva-logo2.png" alt="uva-logo" height=50px>
        
        <span class="leaderboard-username">
            <?php
            echo $user2;
            ?>
        </span>
        <span class="leaderboard-userxp">
        <?php
            echo "$userxp2 XP";
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
            echo $user3;
            ?>
    </span>
    <span class="leaderboard-userxp">
    <?php
            echo "$userxp3 XP";
            ?>
    </span>
  </div>
  </div>
  <div class="leaderboard-user45">
    <div class="leaderboard-userprofile">
      <img class="leaderboard-userprofile" src="../images/uva-logo2.png" alt="uva-logo" height=50px>
    
    <span class="leaderboard-username">
    <?php
            echo $user4;
            ?>
    </span>
    <span class="leaderboard-userxp">
    <?php
            echo "$userxp4 XP";
            ?>
    </span>
  </div>
  </div>

  <div class="leaderboard-user45">
    <div class="leaderboard-userprofile">
      <img class="leaderboard-userprofile" src="../images/uva-logo2.png" alt="uva-logo" height=50px>
    
    <span class="leaderboard-username">
    <?php
            echo $user5;
            ?>
    </span>
    <span class="leaderboard-userxp">
    <?php
            echo "$userxp5 XP";
            ?>
    </span>
  </div>
  </div>

  
</div>

    
  
    </div>
</div>   

<div style="color:red"><?php
session_start();
$username = $_SESSION["user_id"];

if (!session_start()) {
  print "Session failed to start!<br />";
}

# note the use of a constant:
print "This is session " . SID . "<p />";
print "This is session " . session_id() . "<p />";

if (isset($_SESSION['views'])) {
  $_SESSION['views']++;
} else {
  $_SESSION['views'] = 0;
}

print $_SESSION['views'];
?></div>


<?php include 'standard/footer.php';?>
  </body>
</html>