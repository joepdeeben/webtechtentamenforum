let vakList = document.querySelectorAll('.vakken ul li'); // pakt alle vakken in de html van forum
vakList.forEach(function(vak) {
    category.addEventListener('click', function() {
        let vakId = this.id;
        fetch(vakUrl + vakId) // hier moeten we de link naar de database invoeren en kunnen zo de threads per vak ophalen en weergeven.

        }
    }

let addThreadBtn = document.getElementById("addThreadBtn");
let threadList = document.querySelector(".threads");

addThreadBtn.addEventListener("click", function(){
    // Create a new li element
    let newThread = document.createElement("li");
    newThread.innerHTML = '<a href="#">New thread</a><span>Started by: <a href="#">Username</a></span>';

    // Append the new li element to the ul element
    threadList.appendChild(newThread);
});
