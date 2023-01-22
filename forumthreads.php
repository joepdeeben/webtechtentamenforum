<?php
    $db = mysqli_connect('hostname','username','password','dbname');

    $threadId = mysqli_real_escape_string($db, $_POST['thread-id']);
    $sql = "SELECT * FROM posts WHERE thread_id = '$threadId'";
    $result = mysqli_query($db, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($_POST['submit'])){
        $content = mysqli_real_escape_string($db, $_POST['content']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $datum = mysqli_real_escape_string($db, $_POST['datum']);

        $sql = "INSERT INTO posts (content, username, datum, thread_id) VALUES ('$content', '$username', '$datum', '$threadId')";
        mysqli_query($db, $sql);
    }
?>
<html>
<head>
    <link rel="stylesheet" href="css/stylemain.css">
    <title>Forum</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="css/forumphp.css">
    <iframe src="header.html" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>
    <div id="sidebar">
            <form action="" method="get">
                <h5>Select Thread:</h>
                <ul>
                    <?php
                        $sql = "SELECT thread_id, thread_name FROM threads";
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
    <iframe src="footer.html" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>
</body>
</html>