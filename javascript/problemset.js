var questions = [
                '2 + 5',
                '2y + 4 = 0',
                'x(x+1)',
                '10 - 5'

];

var answers = [
                '7',
                'y = -2',
                'x² + x',
                '5'

];

function checkans(){
          var value = document.getElementById("numb").value;
          if (value == answers[randOptionNum]) {
              document.getElementById("feedback").innerHTML = "correct!";
           } else {
              document.getElementById("feedback").innerHTML = "try again!";
              document.getElementById("showanswer").style.visibility = visible;

           }
         };

function showans(){
     document.getElementById("ans").innerHTML = answers[randOptionNum];


}


function randprob(){
         window.randOptionNum = Math.floor(Math.random() * questions.length);
         document.getElementById("dothis").innerHTML = '';
         document.getElementById("dothis").innerHTML = questions[randOptionNum];


};