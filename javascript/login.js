
function validateForm() {
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var gender = document.getElementById("gender").value;
  var errors = [];

  if (username == "") {
    errors.push("Username is required");
  }
  else if (username.length < 2) {
    errors.push("Username must be at least 2 characters long");
  }
  else if (!/^[a-zA-Z]+$/.test(username)) {
    errors.push("Username must contain only alphabetical letters");
  }

  if (email == "") {
    errors.push("Email is required");
  }
  if (password == "") {
    errors.push("Password is required");
  }
  if (gender == "") {
    errors.push("Gender is required");
  }

  if (errors.length > 0) {
    alert(errors.join("\n"));
    return false;
  } else {
    return true;
  }
}
