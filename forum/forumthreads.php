<?php
    $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); } ;


    session_start();
    $username = $_SESSION["user_id"];
    error_reporting(0);

     if (isset($_SESSION['user_id'])) {
              $user_id = $_SESSION['user_id'];
              $is_admin = mysqli_query($db, "SELECT is_admin FROM User WHERE user_id = '$user_id'");
              $is_admin = mysqli_fetch_assoc($is_admin)['is_admin'];
          }


    $threadId = "";
    if (isset($_GET['thread_id'])) {
        $threadId = mysqli_real_escape_string($db, $_GET['thread_id']);
    }
    $sql = "SELECT * FROM Comment WHERE Thread_thread_Id = '$threadId'";
    $result = mysqli_query($db, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);


      if(isset($_POST['submit'])){
            if (!isset($_SESSION['user_id'])) {
                echo "<script>alert('Je moet eerst inloggen!')</script>";
            } else {
                $content = mysqli_real_escape_string($db, $_POST['content']);
                $datum = date("Y-m-d H:i:s");
                $sql = "INSERT INTO Comment (commentcontent, User_user_Id, dateofcomment, Thread_thread_Id) VALUES ('$content', '$username', '$datum', '$threadId')";
                mysqli_query($db, $sql);
            }
        }
?>
<html>
<head>
<?php include '../standard/header.php';?>
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="../css/forumphp.css">
    <link rel="stylesheet" type="text/css" href="../css/stylemain.css">
</head>
<body>

<?php
            if (isset($_GET['thread_id'])) {
                $posts = mysqli_query($db, "SELECT * FROM Thread WHERE thread_id = '".$_GET['thread_id']."'");
                $post = mysqli_fetch_assoc($posts);
                    $username = mysqli_query($db, "SELECT username FROM User WHERE user_id = '".$post['User_user_id']."'");
                    $username = mysqli_fetch_assoc($username)['username'];
        ?>
        <h1><?php echo $username; ?>:</h1>

            <?php
              }
            ?>

  <?php
      if (isset($_GET['thread_id'])) {
        $thread_id = $_GET['thread_id'];
        $thread_title = mysqli_query($db, "SELECT threadtitle FROM Thread WHERE thread_id = '$thread_id'");
        $thread_title = mysqli_fetch_assoc($thread_title)['threadtitle'];


    ?>
        <h1><?php echo $thread_title; ?></h1>

    <?php
      }
    ?>

    <?php
          if (isset($_GET['thread_id'])) {
            $thread_id = $_GET['thread_id'];
            $thread_content = mysqli_query($db, "SELECT threadcontent FROM Thread WHERE thread_id = '$thread_id'");
            $thread_content = mysqli_fetch_assoc($thread_content)['threadcontent'];
        ?>
            <h4><?php echo $thread_content; ?></h4>
        <?php
          }
        ?>


  <div id="maindiv">

    <?php
    if (isset($_GET['thread_id'])) {
        $check_query = "SELECT * FROM likes WHERE thread_id = '$thread_id' AND user_id = '$user_id'";
        $check_result = mysqli_query($db, $check_query);
        if (mysqli_num_rows($check_result) == 0) {
              echo '
                        <form action="" method="post">
                              <input type="hidden" name="thread_id" value="' . $thread_id . '">
                              <input type="submit" name="like" value="Like">
                        </form>';
            } else {
              echo '<h4 style="color:green;">geliket!</h4>';
            } }
            ?>

    <?php
      $thread_id = $_GET['thread_id'];
      $user_id = $_SESSION['user_id'];

      if (isset($_POST['like'])) {

        $check_query = "SELECT * FROM likes WHERE thread_id = '$thread_id' AND user_id = '$user_id'";
        $check_result = mysqli_query($db, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            echo "<h1>Je hebt deze thread al geliket!</h1>";
            exit();
        }
        if (isset($_GET['thread_id'])) {
                        $posts = mysqli_query($db, "SELECT * FROM Thread WHERE thread_id = '".$_GET['thread_id']."'");
                        $post = mysqli_fetch_assoc($posts);
                            $username = mysqli_query($db, "SELECT user_id FROM User WHERE user_id = '".$post['User_user_id']."'");
                            $username = mysqli_fetch_assoc($username)['user_id'];

        $update_query = "UPDATE Thread SET threadlikes = threadlikes + 1 WHERE thread_id = '$thread_id'";
        $update_result = mysqli_query($db, $update_query);

        $update_query = "UPDATE User SET userexp = userexp+ 1 WHERE user_id = '$username'";
        $update_result = mysqli_query($db, $update_query);

        $insert_query = "INSERT INTO likes (thread_id, user_id) VALUES ('$thread_id', '$user_id')";
        $insert_result = mysqli_query($db, $insert_query);

        header("Refresh:0");

        echo "Geliket!";
        }
      }
    ?>
<?php include 'reportthreadwindow.php' ?>
    <div id="thread-posts">
            <?php
                if (isset($_GET['thread_id'])) {
                    $posts = mysqli_query($db, "SELECT * FROM Comment WHERE Thread_thread_id = '".$_GET['thread_id']."'");
                    while ($post = mysqli_fetch_assoc($posts)):
                        $username = mysqli_query($db, "SELECT username FROM User WHERE user_id = '".$post['User_user_id']."'");
                        $username = mysqli_fetch_assoc($username)['username'];
            ?>
                        <div class="post">
                            <div class="post-info">
                                <div id="username"><b><?php echo $username; ?></b></div>
                                <div id="datum"><b><?php echo $post['dateofcomment']; ?></b></div>
                                <?php
                                    if (isset($_SESSION['user_id']) && $is_admin == 1) {
                                ?>
                                    <div class="delete-post">
                                        <a href="delete_post.php?post_id=<?php echo $post['comment_id']; ?>">Delete</a>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="post-content">
                                <h4><?php echo $post['commentcontent']; ?></h4>
                            </div>
                        </div>
            <?php
                    endwhile;
                }
            ?>
        </div>
    <?php
    if (empty($_GET['thread_id'])) {
      echo '<div class="username"><h1>Selecteer een thread in de sidebar</h1></div>';
    } else {
      $thread_id = $_GET['thread_id'];
      echo '
      <form action="" method="post">
        <h6>Antwoorden:</h6>
        <textarea name="content" id="content" placeholder="Begin hier met typen..."></textarea>
        <br>
        <button type="submit" name="submit">Posten</button>
      </form>
      ';
    }
    ?>

        <?php
            if (isset($_SESSION['user_id']) && $is_admin == 1) {
        ?>
            <div class="delete-post">
                <a href="delete_thread.php?thread_id=<?php echo $_GET['thread_id']; ?>">Delete</a>
            </div>
        <?php
            }
        ?>

    <div id="sidebar">
            <form action="" method="post">
                <select name="threadcourse">
                    <?php
                    $sql = "SELECT DISTINCT threadcourse FROM Thread";
                    $result = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['threadcourse'] . "'>" . $row['threadcourse'] . "</option>";
                    }
                    ?>
                </select>
                <input type="submit" name="submit1" value="Laat threads zien">
            </form>
            <ul>
                <?php
                if (isset($_POST['submit1'])) {
                    $threadcourse = $_POST['threadcourse'];
                    $sql = "SELECT thread_id, threadtitle FROM Thread WHERE threadcourse = '$threadcourse'";
                    $result = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<li><a href='?thread_id=" . $row['thread_id'] . "'>" . $row['threadtitle'] . "</a></li>";
                    }
                }
                ?>
            </ul>
            </form>
        </div>


</body>
<?php include '../standard/footer.php';?>
</html>