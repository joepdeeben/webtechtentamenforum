<?php
$db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); }
    echo "Connected successfully";
    ?>


<!DOCTYPE html>
<html>
<head>
    <?php include '../standard/header.php';?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/stylemain.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <title>Give me a problem</title>
</head>
<body>
<div class="opgave_form">
    <link rel="stylesheet" href="../css/stylerandomproblem.css">
    <form action="" method="post">
                    <select name="exercisecourse">
                        <?php
                        $sql = "SELECT DISTINCT exercisecourse FROM Exercise";
                        $result = mysqli_query($db, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['exercisecourse'] . "'>" . $row['exercisecourse'] . "</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" name="submit1" value="Laat vakken zien">
                </form>

    <button id="giveprob">geef me een oefening</button>
    <p id="dothis"></p>
    <input id="numb">
    <p id="feedback"></p>

    <button type="button" id="checkans">beantwoorden</button>
    <button type="button" id="showanswer">antwoord</button>

    <p id="ans"></p>
</div>
<?php
                if (isset($_POST['submit1'])) {
                    $exercise_course= $_POST['exercisecourse'];
                    $sql = "SELECT exercisecontent, exerciseanswer FROM Exercise WHERE exercisecourse = '$exercise_course'";
                    $result = mysqli_query($db, $sql);
                    }
                ?>
    <script>
        let probArr = [];
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "probArr.push({'prob':'".$row['exercisecontent']."', 'ans':'".$row['exerciseanswer']."'});";
        }
        ?>
        let currentProb = {};
        document.getElementById("giveprob").addEventListener("click", function(){
            let randIndex = Math.floor(Math.random()*probArr.length);
            currentProb = probArr[randIndex];
            document.getElementById("dothis").innerHTML = currentProb.prob;
            document.getElementById("ans").innerHTML = "";
            document.getElementById("feedback").innerHTML = "";
            document.getElementById("checkans").style.display = "block";
            document.getElementById("showanswer").style.display = "none";
        });
        document.getElementById("checkans").addEventListener("click", function(){
            let userAns = document.getElementById("numb").value;
            if(userAns == currentProb.ans){
                document.getElementById("feedback").innerHTML = "Correct!";
                document.getElementById("checkans").style.display = "none";
            }else{
                document.getElementById("feedback").innerHTML = "Incorrect";
                document.getElementById("showanswer").style.display = "block";
            }
        });
        document.getElementById("showanswer").addEventListener("click", function(){
            document.getElementById("ans").innerHTML = "The answer is: " + currentProb.ans;
        });
    </script>

    <?php include '../standard/footer.php';?>
</body>
</html>


