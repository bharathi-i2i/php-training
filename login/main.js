function myFunction() {
  var email, pwd, result;
  console.log("hello");
  email = document.getElementById("email").value;
  pwd = document.getElementById("pwd").value;
  submitForm(email, pwd);
  return false;
}

function submitForm(email, password) {
  $.ajax({
    type: "POST",
    url: "loginCheck.php",
    data: {
      email: email,
      pswd: password
    },
    success: function(data) {
      document.getElementById("demo").innerHTML = data;
    }
  });

  // let con = new XMLHttpRequest();
  // con.onreadystatechange = function() {
  //   if (this.readyState == 4 && this.status == 200) {
  //     document.getElementById("demo").innerHTML = this.responseText;
  //     console.log(this.response);
  //     console.log(this.responseText);
  //   }
  // };
  // con.open("POST", "loginCheck.php", true);
  // con.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // con.send(`email=${email}&pswd=${password}`);
}
