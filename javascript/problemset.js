var options = [
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
              window.alert("correct!");
           } else {
              window.alert("try again");
           }
         };




function randprob(){
         window.randOptionNum = Math.floor(Math.random() * options.length);
         document.getElementById("dothis").innerHTML = '';
         document.getElementById("dothis").innerHTML = options[randOptionNum];


};