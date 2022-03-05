function myFunction() {
  var x = document.getElementById("dropdown");
  if (x.style.display === "block") {

  } else {
    x.style.display = "block";
  }

  var x = document.getElementById("dropdown-content");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function nav() {
  document.getElementById("nav-user-cont").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (e) {
  if (!e.target.matches('.userbtn')) {
    var myDropdown = document.getElementById("nav-user-cont");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}


var notif;
function setNotif(noti) {
  notif = noti;
  alert(notif);
}
function getNotif() {
  return notif;
}

function start() {
}
document.addEventListener('DOMContentLoaded', start);

// edit profile Enable button
var firstname, lastname, email, update;
var bol = 0;
function disable() {
  if (bol == 0) {
    firstname = document.getElementById("firstname");
    lastname = document.getElementById("lastname");
    email = document.getElementById("email");
    update = document.getElementById("update");
    firstname.disabled = true;
    lastname.disabled = true;
    email.disabled = true;
    update.disabled = true;
    bol = 1;
  }
}

function enable() {
  if (bol == 1) {
    document.getElementById("firstname").disabled = false;
    document.getElementById("lastname").disabled = false;
    document.getElementById("email").disabled = false;
    update = document.getElementById("update").disabled = false;
    bol = 0;
  }
  else {
    disable();
  }
}