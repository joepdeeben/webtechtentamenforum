var options = [
                '2 + 5',
                '2y + 4 = 0',
                'x(x+1)',
                '10 - 5'

];

function randprob(){
         var randOptionNum = Math.floor(Math.random() * options.length);
         document.getElementById("dothis").innerHTML = '';
         document.getElementById("dothis").innerHTML = options[randOptionNum];


}