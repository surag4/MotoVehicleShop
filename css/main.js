function hideNseek(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

function confirm(){
var btn1 = document.getElementById("submitVec");
if(btn1.disabled==false){
btn1.disabled=true;
}
else{btn1.disabled=false;}
}

function start(){
}
document.addEventListener('DOMContentLoaded', start);