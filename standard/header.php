<?php
session_start();
?>
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
    <script src="javascript/vakkenfuncties.js"></script>
    <title>Homepage</title>

</head>

<header>
    <a href="../index.php" class="logo"><img src="../images/uva-logo2.png" alt="uva-logo" height=50px, border-radius="1px"></i>&nbsp;&nbsp;<span><button class="homebtn" type="button">Home</button></span></a>
        

    <ul class="navigatie">
    <div class="dropdown">
          <a href="../forum/forumthreads.php"><button class="dropbtn">Forum</button></a> 
        </div>
        <div class="dropdown">
          <a href="../vakken/vakken.php"><button class="dropbtn">Vakken</button></a> 
        </div>
        <div class="dropdown">
          <a href="../submit/submitQ.php"><button class="dropbtn" >Stel je vraag</button></a>
        </div>
        <div class="dropdown">
        <a href="../submit/submitex.php"><button  class="dropbtn">Submit een opgave<i class="ri-add-circle-line"></i></button></a>        
      </div>
        
    </ul>

        <?php
          if(isset($_SESSION["user_id"])) {
        ?>
          <div class="main">
            <li><a href="#" class="user"><i class="ri-inbox-line"></i>Inbox</a></a></li>
            <li class="account-menu">
              <a href="#" class="user account-toggle"><i class="ri-user-3-line"></i>Account</a>
              <ul class="account-options">
                <li><a href="../accounts/logout.php">Log Out</a></li>
                <li><a href="../accounts/changeinfo.php">Change Info</a></li>
              </ul>
            </li>
          </div>
          <script>
          const accountToggle = document.querySelector(".account-toggle");
          const accountOptions = document.querySelector(".account-options");

          accountToggle.addEventListener("click", function(event) {
            event.preventDefault();
            accountOptions.classList.toggle("show");
          });

          document.addEventListener("click", function(event) {
            if (!event.target.closest(".account-menu")) {
              accountOptions.classList.remove("show");
            }
          });
          </script>
          <style>
          .account-options {
              display: none;
              position: absolute;
              background-color: #304ba3;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
              border-radius: 8px;
          }

          .account-options.show {
              display: block;
          }
          </style>

        <?php
          } else {
        ?>
          <div class="main">
            <li><a href="#" class="user"><i class="ri-inbox-line"></i>Inbox</a></a></li>
            <li><a href="../accounts/newloginwindow.php" class="user"><i class="ri-user-3-line"></i>Account</a></li>
          </div>
        <?php
          }
        ?>
        <script type="text/javascript" src="javascript/scriptnav.js"></script>

</header>
</body>
</html>