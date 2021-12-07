function validateForm() {
    var y = document.forms["myForm"]["username"].value;
    if (y == "") {
      alert("Name must be filled out");
      return false;
    }
  }