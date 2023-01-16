let vakList = document.querySelectorAll('.vakken ul li'); // pakt alle vakken in de html van forum
vakList.forEach(function(vak) {
    category.addEventListener('klik', function() {
        let vakId = this.id;
        fetch(vakUrl + vakId) // hier moeten we de link naar de database invoeren en kunnen zo de threads per vak ophalen en weergeven.

        }
    }

