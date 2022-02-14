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

// filter dropdown menu for brand/models

function modellist(listindex) {

  document.formname.model.options.length = 0;
  switch (listindex) {

    case "aprilia":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Dorsoduro 750 ABS", "dorsoduro750");
      document.formname.model.options[2] = new Option("ETX 150 Enduro", "etx150enduro");
      document.formname.model.options[3] = new Option("RS4 125", "rs4");
      document.formname.model.options[4] = new Option("RSV4 RR", "rsv4");
      document.formname.model.options[5] = new Option("RX 125", "rx125");
      document.formname.model.options[6] = new Option("Shiver Sport 750 ABS", "shiversport");
      document.formname.model.options[7] = new Option("SR 125", "sr125");
      document.formname.model.options[8] = new Option("SR 150", "sr150");
      document.formname.model.options[9] = new Option("Storm 125", "storm125");
      document.formname.model.options[10] = new Option("STX 150 Road", "stx150");
      document.formname.model.options[11] = new Option("SX 125", "sx125");
      document.formname.model.options[12] = new Option("SXR 160", "sxr160");

      break;

    case "bajaj":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Avenger 160 Street", "avenger160street");
      document.formname.model.options[2] = new Option("Avenger 220 Cruise", "avenger220cruise");
      document.formname.model.options[3] = new Option("Discover 125 Disc", "discover125disc");
      document.formname.model.options[4] = new Option("Discover 125 Drum", "discover125drum");
      document.formname.model.options[5] = new Option("Discover 125 ST", "discover 125 ST");
      document.formname.model.options[6] = new Option("Dominar D250", "dominarD250");
      document.formname.model.options[7] = new Option("Dominar D400", "dominarD400");
      document.formname.model.options[8] = new Option("Platina 100 ES", "platina100ES");
      document.formname.model.options[9] = new Option("Pulsar 125", "pulsar125");
      document.formname.model.options[10] = new Option("Pulsar 150", "pulsar150");
      document.formname.model.options[11] = new Option("Pulsar 150 Twin Disc", "pulsar150TwinDisc");
      document.formname.model.options[12] = new Option("Pulsar 180", "pulsar180");
      document.formname.model.options[13] = new Option("Pulsar 220 F", "pulsar220F");
      document.formname.model.options[14] = new Option("Pulsar NS 160 ABS", "pulsarNS160ABS");
      document.formname.model.options[15] = new Option("Pulsar NS 160 Twin Disc", "pulsarNS160TwinDisc");
      document.formname.model.options[16] = new Option("Pulsar NS 200 With ABS", "pulsarNS200ABS");
      document.formname.model.options[17] = new Option("Pulsar NS 200 With Fi ABS", "pulsarNS200FiABS");

      break;

    case "benelli":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Benelli 180S", "benell180S");
      document.formname.model.options[2] = new Option("Benelli 302R", "benell302R");
      document.formname.model.options[3] = new Option("Benelli 302S", "benell302S");
      document.formname.model.options[4] = new Option("Benelli 752S", "benell752S");
      document.formname.model.options[5] = new Option("Benelli BN 251", "benellB251");
      document.formname.model.options[6] = new Option("Benelli Leoncino", "benellLeoncino");
      document.formname.model.options[7] = new Option("Benelli Leoncino 250", "benellLeoncin250");
      document.formname.model.options[8] = new Option("Benelli Leoncino Trial", "benellLeoncinTrial");
      document.formname.model.options[9] = new Option("Benelli Panarea 125", "benellPanare125");
      document.formname.model.options[10] = new Option("Benelli TNT 135", "benellTN135");
      document.formname.model.options[11] = new Option("Benelli TNT 15", "benellTN15");
      document.formname.model.options[12] = new Option("Benelli TNT 150I", "benellTN150I");
      document.formname.model.options[13] = new Option("Benelli TNT 600 GT", "benellTN60GT");
      document.formname.model.options[14] = new Option("Benelli TNT 600I", "benellTN600I");
      document.formname.model.options[15] = new Option("Benelli TRK 251", "benellTR251");
      document.formname.model.options[16] = new Option("Benelli TRK 502", "benellTR502");
      document.formname.model.options[17] = new Option("Benelli TRK 502X", "benellTR502X");

      break;

    case "bmw":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("BMW G310GS", "bmwG310GS");
      document.formname.model.options[2] = new Option("BMW G310R", "bmwG310R");

      break;

    case "cfmoto":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("CF Moto 250NK", "cfmoto250NK");
      document.formname.model.options[2] = new Option("CF Moto 400NK", "cfmoto400NK");
      document.formname.model.options[3] = new Option("CF Moto 650MT", "cfmoto650MT");
      document.formname.model.options[4] = new Option("CF Moto 650NK", "cfmoto650NK");
      document.formname.model.options[5] = new Option("CF Moto 150NK", "cfmoto150NK");

      break;

    case "crossfire":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Crossfire CF Twin 250 EFI", "Crossfire CF Twin 250 EFI");
      document.formname.model.options[2] = new Option("Crossfire GR7", "Crossfire GR7");
      document.formname.model.options[3] = new Option("Crossfire XZ250RR (Dirt)", "Crossfire XZ250RR (Dirt)");

      break;

    case "ducati":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Ducati 1299 Panigale", "Ducati 1299 Panigale");
      document.formname.model.options[2] = new Option("Ducati Hypermotard 939", "Ducati Hypermotard 939");
      document.formname.model.options[3] = new Option("Ducati HyperStrada 939", "Ducati HyperStrada 939");
      document.formname.model.options[4] = new Option("Ducati Monster 797", "Ducati Monster 797");
      document.formname.model.options[5] = new Option("Ducati Monster 821", "Ducati Monster 821");
      document.formname.model.options[6] = new Option("Ducati Multistrada 950", "Ducati Multistrada 950");
      document.formname.model.options[7] = new Option("Ducati Panigale R", "Ducati Panigale R");
      document.formname.model.options[8] = new Option("Ducati Scrambler Café Racer", "Ducati Scrambler Café Racer");
      document.formname.model.options[9] = new Option("Ducati Scrambler Desert Sled", "Ducati Scrambler Desert Sled");
      document.formname.model.options[10] = new Option("Ducati Scrambler Italia Independent", "Ducati Scrambler Italia Independent");
      document.formname.model.options[11] = new Option("Ducati Scrambler Sixty 2", "Ducati Scrambler Sixty 2");
      document.formname.model.options[12] = new Option("Ducati Super Sport", "Ducati Super Sport");
      document.formname.model.options[13] = new Option("Ducati SuperSport", "Ducati SuperSport");
      document.formname.model.options[14] = new Option("Scrambler Desert Sled", "Scrambler Desert Sled");

      break;

    case "haojue":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Haojue NK150", "Haojue NK150");

      break;

    case "hero":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Hero Achiever", "Hero Achiever");
      document.formname.model.options[2] = new Option("Hero Destini", "Hero Destini");
      document.formname.model.options[3] = new Option("Hero Duet", "Hero Duet");
      document.formname.model.options[4] = new Option("Hero Glamour", "Hero Glamour");
      document.formname.model.options[5] = new Option("Hero Glamour IBS", "Hero Glamour IBS");
      document.formname.model.options[6] = new Option("Hero HF Deluxe", "Hero HF Deluxe");
      document.formname.model.options[7] = new Option("Hero Maestro Edge", "Hero Maestro Edge");
      document.formname.model.options[8] = new Option("Hero Passion Pro", "Hero Passion Pro");
      document.formname.model.options[9] = new Option("Hero Pleasure", "Hero Pleasure");
      document.formname.model.options[10] = new Option("Hero Pleasure Plus", "Hero Pleasure Plus");
      document.formname.model.options[11] = new Option("Hero Splendor", "Hero Splendor");
      document.formname.model.options[12] = new Option("Hero Splendor Ismart 110", "Hero Splendor Ismart 110");
      document.formname.model.options[13] = new Option("Hero Splendor+", "Hero Splendor+");
      document.formname.model.options[14] = new Option("Hero Super Splendor", "Hero Super Splendor");
      document.formname.model.options[15] = new Option("Hero XPulse 200", "Hero XPulse 200");
      document.formname.model.options[16] = new Option("Hero XPulse 200T", "Hero XPulse 200T");
      document.formname.model.options[17] = new Option("Hero Xtreme 160R", "Hero Xtreme 160R");
      document.formname.model.options[18] = new Option("Hero Xtreme 200R", "Hero Xtreme 200R");
      document.formname.model.options[19] = new Option("Hero Xtreme 200S", "Hero Xtreme 200S");
      document.formname.model.options[20] = new Option("Hero Xtreme Sports", "Hero Xtreme Sports");

      break;

    case "honda":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Honda DIO", "Honda DIO");
      document.formname.model.options[2] = new Option("Honda Activa 125", "Honda Activa 125");
      document.formname.model.options[3] = new Option("Honda Aviator", "Honda Aviator");
      document.formname.model.options[4] = new Option("Honda CB Hornet 160R", "Honda CB Hornet 160R");
      document.formname.model.options[5] = new Option("Honda CB Shine", "Honda CB Shine");
      document.formname.model.options[6] = new Option("Honda CB Shine SP", "Honda CB Shine SP");
      document.formname.model.options[7] = new Option("Honda CB Unicorn 150", "Honda CB Unicorn 150");
      document.formname.model.options[8] = new Option("Honda CB Unicorn 160", "Honda CB Unicorn 160");
      document.formname.model.options[9] = new Option("Honda CBR 250R", "Honda CBR 250R");
      document.formname.model.options[10] = new Option("Honda CBR 600R", "Honda CBR 600R");
      document.formname.model.options[11] = new Option("Honda CBR 650F", "Honda CBR 650F");
      document.formname.model.options[12] = new Option("Honda CD 110 Dream", "Honda CD 110 Dream");
      document.formname.model.options[13] = new Option("Honda CRF 250", "Honda CRF 250");
      document.formname.model.options[14] = new Option("Honda CRF 250L Rally", "Honda CRF 250L Rally");
      document.formname.model.options[15] = new Option("Honda CRF Africa Twin 1100", "Honda CRF Africa Twin 1100");
      document.formname.model.options[16] = new Option("Honda Grazia", "Honda Grazia");
      document.formname.model.options[17] = new Option("Honda Navi", "Honda Navi");
      document.formname.model.options[18] = new Option("Honda Tornado XR250", "Honda Tornado XR250");
      document.formname.model.options[19] = new Option("Honda X-Blade", "Honda X-Blade");
      document.formname.model.options[20] = new Option("Honda XR 150L", "Honda XR 150L");
      document.formname.model.options[21] = new Option("Honda XR 190L", "Honda XR 190L");

      break;

    case "husqvarna":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Husqvarna FE 350", "Husqvarna FE 350");
      document.formname.model.options[2] = new Option("Husqvarna FE 501", "Husqvarna FE 501");
      document.formname.model.options[3] = new Option("Husqvarna FE 701", "Husqvarna FE 701");

      break;

    case "jawa":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Jawa 42", "Jawa 42");
      document.formname.model.options[2] = new Option("Jawa Perak", "Jawa Perak");
      document.formname.model.options[3] = new Option("Jawa Standard", "Jawa Standard");

      break;

    case "kawasaki":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("Kawasaki Versys 650", "Kawasaki Versys 650");

      break;

    case "ktm":
      document.formname.model.options[0] = new Option("Select Model", "");
      document.formname.model.options[1] = new Option("KTM 200 Duke", "KTM 200 Duke");
      document.formname.model.options[2] = new Option("KTM ", "KTM ");
      document.formname.model.options[3] = new Option("KTM ", "KTM ");
      document.formname.model.options[4] = new Option("KTM ", "KTM ");
      document.formname.model.options[5] = new Option("KTM ", "KTM ");
      document.formname.model.options[6] = new Option("KTM ", "KTM ");
      document.formname.model.options[7] = new Option("KTM ", "KTM ");
      document.formname.model.options[8] = new Option("KTM ", "KTM ");

      break;

  }
  return true;
}