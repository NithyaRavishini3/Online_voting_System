
  function myFunction() {
    var x = document.getElementById("password");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");
    if (x.type === "password") {
      x.type = "text";
      y.style.display = "block";
      z.style.display = "none";
    } else {
      x.type = "password";
      y.style.display = "none";
      z.style.display = "block";
    }
  }

 
  function myFunction1(){
    var w = document.getElementById("password1");
    var x = document.getElementById("password2");
    var y = document.getElementById("hide3");
    var z = document.getElementById("hide4");
    if (w.type === "password" & x.type === "password"){
    w.type = "text";
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
    }
     else {
      w.type = "password";
      x.type = "password";
      y.style.display = "none";
      z.style.display = "block";
    }
  }

function myFunction3(){
  document.location.href="forgot.html";
}