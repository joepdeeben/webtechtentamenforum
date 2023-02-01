<?php
    $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";

    session_start();
    $username = $_SESSION["user_id"];


    $threadId = "";
    if (isset($_GET['thread_id'])) {
        $threadId = mysqli_real_escape_string($db, $_GET['thread_id']);
    }
    $sql = "SELECT * FROM Comment WHERE Thread_thread_Id = '$threadId'";
    $result = mysqli_query($db, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);


      if(isset($_POST['submit'])){
            if (!isset($_SESSION['user_id'])) {
                echo "<script>alert('You must log in first!')</script>";
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
</head>
<body>
  <?php
      if (isset($_GET['thread_id'])) {
        $thread_id = $_GET['thread_id'];
        $thread_title = mysqli_query($db, "SELECT threadtitle FROM Thread WHERE thread_id = '$thread_id'");
        $thread_title = mysqli_fetch_assoc($thread_title)['threadtitle'];
    ?>
    <?php
          if (isset($_GET['thread_id'])) {
            $thread_id = $_GET['thread_id'];
            $thread_content= mysqli_query($db, "SELECT threadcontent FROM Thread WHERE thread_id = '$thread_id'");
            $thread_content = mysqli_fetch_assoc($thread_title)['threadcontent'];
        ?>
        <h4><?php echo $thread_content; ?></h4>
    <?php
      }
    ?>
  <div id="maindiv">


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

    <form action="" method="post">
          <h6>Plaats jouw comment!:</h6>
          <textarea name="content" id="content"></textarea>
          <br>
          <button type="submit" name="submit">Posten</button>
        </form>

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


    <?php include '../standard/footer.php';?>
</body>
</html>
