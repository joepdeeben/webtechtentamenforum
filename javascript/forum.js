//let vakList = document.querySelectorAll('.vakken ul li'); // pakt alle vakken in de html van forum
//vakList.forEach(function(vak) {
//    category.addEventListener('click', function() {
//        let vakId = this.id;
//        fetch(vakUrl + vakId) // hier moeten we de link naar de database invoeren en kunnen zo de threads per vak ophalen en weergeven.
//
//        }
//    }

function addComment() {
  let threadPosts = document.getElementById("thread-posts");
  let textArea = document.querySelector(".content");
  let postContent = textArea.value;
  let newPost = document.createElement("div");
  newPost.classList.add("post");
  newPost.innerHTML = '<div class="post-info"><div id="username"><b>Username</b></div><div id="datum"><b>Datum</b></div></div><div class="post-content"><h4>Post Titel</h4><p>' + postContent + '</p></div><div class="post-acties"><a href="#">Beantwoorden</a></div>';
  threadPosts.appendChild(newPost);
  textArea.value = "";
}


function nextyear() {
   let sectionVak = document.getElementsByClassName("vakken")[0].id;
   if (sectionVak === "Jaar1") {
        document.getElementById(sectionVak).remove();
        wrapperyear.insertAdjacentHTML("afterbegin", '<section id="Jaar2" class="vakken"><button onclick="lastyear()" type="button" class="year-selector">jaar 1</button><h2>Vakken jaar 2</h2><ul ><li><a href="#">Bayesian statistics</a></li><li><a href="#">Computer vision</a></li><li><a href="#">Psychology</a></li></ul><button onclick="nextyear()" type="button" class="year-selector">jaar 3</button></section>');
   }
   else if (sectionVak === "Jaar2") {
        document.getElementById(sectionVak).remove();
        wrapperyear.insertAdjacentHTML("afterbegin", '<section id="Jaar3" class="vakken"><button onclick="lastyear()" type="button" class="year-selector">jaar 2</button><h2>Vakken jaar 3</h2><ul ><li><a href="#">Alumni KI</a></li><li><a href="#">Project</a></li><li><a href="#">Minor</a></li></ul></section>');
   }
}

function lastyear() {
   let sectionVak = document.getElementsByClassName("vakken")[0].id;
   if (sectionVak === "Jaar3") {
        document.getElementById(sectionVak).remove();
        wrapperyear.insertAdjacentHTML("afterbegin", '<section id="Jaar2" class="vakken"><button onclick="lastyear()" type="button" class="year-selector">jaar 1</button><h2>Vakken jaar 2</h2><ul ><li><a href="#">Bayesian statistics</a></li><li><a href="#">Computer vision</a></li><li><a href="#">Psychology</a></li></ul><button onclick="nextyear()" type="button" class="year-selector">jaar 3</button></section>');
   }
   else if (sectionVak === "Jaar2") {
        document.getElementById(sectionVak).remove();
        wrapperyear.insertAdjacentHTML("afterbegin", '<section id="Jaar1" class="vakken"><h2>Vakken jaar 1</h2><ul ><li><a href="#">Python</a></li><li><a href="#">Calculus</a></li><li><a href="#">Problem Solving and search</a></li></ul><button onclick="nextyear()" type="button" class="year-selector">jaar 2</button></section>');
   }
}