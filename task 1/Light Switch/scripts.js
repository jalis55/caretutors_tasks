function turnOnOff() {

    var img = document.getElementById('img');
    if (img.src.match("bulb_on")) {
      img.src = "img/bulb_off.gif";
    } else {
      img.src = "img/bulb_on.gif";
    }
  }