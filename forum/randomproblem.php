<?php
$db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); }
    echo "Connected successfully";
    ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/stylemain.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <title>Give me a problem</title>
</head>
<body>
<div class="opgave_form">
    <link rel="stylesheet" href="../css/stylerandomproblem.css">
    <select id="exercise-course">
            <option value="">--Select Exercise Course--</option>
            <?php $sql = "SELECT DISTINCT exercisecourse FROM Exercise";
                      $result = mysqli_query($db, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                          echo '<option value="'.$row['exercisecourse'].'">'.$row['exercisecourse'].'</option>';
                      }
                      ?>
    </select>

    <button id="giveprob">geef me een oefening</button>
    <p id="dothis"></p>
    <input id="numb">
    <p id="feedback"></p>

    <button type="button" id="checkans">beantwoorden</button>
    <button type="button" id="showanswer">antwoord</button>

    <p id="ans"></p>
</div>
<?php

    $exercise_course = "math";
    $sql = "SELECT * FROM Exercise WHERE exercisecourse='$exercise_course' ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($db, $sql);
    $question = mysqli_fetch_assoc($result);

    $answer = $question['exerciseanswer'];
?>
<script>
    var question = <?php echo json_encode($question['exercisecontent']); ?>;
    var answer = <?php echo json_encode($answer); ?>;

    document.getElementById("dothis").innerHTML = question;

    document.getElementById("checkans").addEventListener("click", function() {
        var userAnswer = document.getElementById("numb").value;
        if (userAnswer == answer) {
            document.getElementById("feedback").innerHTML = "Correct!";
        } else {
            document.getElementById("feedback").innerHTML = "Incorrect. Please try again.";
            document.getElementById("showanswer").style.visibility = "visible";
        }
    });
    document.getElementById("showanswer").addEventListener("click", function() {
        document.getElementById("ans").innerHTML = answer;
    });

    document.getElementById("giveprob").addEventListener("click", function() {
        location.reload();
    });

    document.getElementById("exercise-course").addEventListener("change", function() {
        var selected_course = this.value;
        if (selected_course == "") {
            return;
        }

        var xhr = new XMLHttpRequest();
xhr.open("POST", "getExercise.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
var response = JSON.parse(this.responseText);
question = response.exercisecontent;
answer = response.exerciseanswer;
document.getElementById("dothis").innerHTML = question;
document.getElementById("ans").innerHTML = "";
document.getElementById("numb").value = "";
document.getElementById("feedback").innerHTML = "";
document.getElementById("showanswer").style.visibility = "hidden";
}
};
xhr.send("exercise_course=" + selected_course);
});
</script>

</body>
</html>


