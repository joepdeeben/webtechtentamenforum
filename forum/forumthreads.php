<?php
    $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');

    $threadId = mysqli_real_escape_string($db, $_POST['Thread_thread_Id']);
    $sql = "SELECT * FROM Comment WHERE Thread_thread_Id = '$threadId'";
    $result = mysqli_query($db, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($_POST['submit'])){
        $content = mysqli_real_escape_string($db, $_POST['comment_Id']);
        $username = mysqli_real_escape_string($db, $_POST['User_user_Id']);
        $datum = mysqli_real_escape_string($db, $_POST['datum']);

        $sql = "INSERT INTO Comment (comment_Id, User_user_Id, datum, Thread_thread_Id) VALUES ('$content', '$username', '$datum', '$threadId')";
        mysqli_query($db, $sql);
    }
?>
<html>
<head>
<?php include '../standard/header.php';?>
    <title>Forum</title>
</head>          
<body>
    <link rel="stylesheet" type="text/css" href="../css/forumphp.css">
    <iframe src="header.html" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe> <!-- include veranderen joep-->
    <div id="sidebar">
            <form action="" method="get">
                <h5>Selecteer vak:</h>
                <select name="vakken">
                <?php
                        $sql = "SELECT DISTINCT threadcourse FROM Thread";
                        $result = mysqli_query($db, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['vakken'] . "'>" . $row['vakken'] . "</option>";
                        }
                    ?>
                </select>
                <ul>
                    <?php
                        $sql = "SELECT Thread_thread_Id, threadtitle FROM Threads WHERE threadcourse = '$vakken'";
                        $result = mysqli_query($db, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<li><a href='?thread_id=" . $row['thread_id'] . "'>" . $row['thread_name'] . "</a></li>";
                        }
                    ?>
                </ul>
            </form>
        </div>
    <form action="" method="post">
            <h5>Username:</h>
            <input type="text" name="username" id="username">
            <br>
            <h6>Content:</h>
            <textarea name="content" id="content"></textarea>
            <br>
            <button type="submit" name="submit">Posten</button>
        </form>

    <div id="thread-posts">
        <?php foreach($posts as $post): ?>
            <div class="post">
                <div class="post-info">
                    <div id="username"><b><?php echo $post['username']; ?></b></div>
                    <div id="datum"><b><?php echo $post['datum']; ?></b></div>
                </div>
                <div class="post-content">
                    <h4><?php echo $post['content']; ?></h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php include '../standard/footer.php';?>
</body>
</html>