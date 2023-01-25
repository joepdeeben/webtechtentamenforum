<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/stylemain.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <title>Give me a problem</title>
</head>
<body>

<iframe src="header.html" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

<div class="opgave_form">

    <link rel="stylesheet" href="../css/stylerandomproblem.css">

    <button id="giveprob">geef me een oefening</button>
    <p id="dothis"></p>
    <input id="numb">
    <p id="feedback"></p>

    <button type="button" id="checkans">beantwoorden</button>
    <button type="button" id="showanswer">antwoord</button>

    <p id="ans"></p>
</div>

<iframe src="footer.html" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

<?php
        //connect to the database
        $db = mysqli_connect('hostname','username','password','dbname');

        //query to select a random question from the database
        $sql = "SELECT * FROM questions ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($db, $sql);
        $question = mysqli_fetch_assoc($result);

        //get the answer for the selected question
        $answer = $question['answer'];
    ?>

<script>
        var question = <?php echo json_encode($question['question']); ?>;
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
</script>


</body>

</html>


