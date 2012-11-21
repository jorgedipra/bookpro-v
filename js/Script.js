var mouseDown   = false, // Esto var se utiliza para detectar el momento en que podamos actualizar la barra de volumen
    Video       = document.querySelector("video"),
    Play        = document.querySelector(".Play"),
    ProgressBar = document.querySelector(".ProgressBar span"),
    Volume      = document.querySelector(".Volume"),
    VolumeDrag  = document.querySelector(".Volume span"),
    VolumeStat  = document.querySelector(".Volume div"),
    Pause       = document.querySelector(".Pause");


var play = function () {
  Video.play();
};

var pause = function () {
  Video.pause();
};

var updateProgressBar = function () {
    var percentage = (Video.currentTime / Video.duration) * 100;
    ProgressBar.style.width = percentage + "%";
};
var updateVolume = function ( volumeValue ) {
  VolumeDrag.style.left   = volumeValue * 100 + "%";
  VolumeStat.style.width  = volumeValue * 100 +  "%";

  Video.volume = volumeValue;
};

var setVolume = function ( e ) {

  e.preventDefault();

  if(mouseDown) {
    var mouseX = e.pageX,
        realX  = e.pageX - Volume.offsetLeft,
        volumePosition = realX + "px",
        volume = ((100 / Volume.offsetWidth) * realX) / 100;

        if (volume < 1 && volume > 0) {
          updateVolume( volume );
        }
  }
};

updateVolume ( 0.5 );

Play.addEventListener("click", play, false);
Pause.addEventListener("click", pause, false);
Video.addEventListener("timeupdate",updateProgressBar, false);
Volume.addEventListener("mousedown", function () {mouseDown = true}, false);
Volume.addEventListener("click", function (e) {mouseDown = true; setVolume(e);mouseDown = false;}, false);
window.addEventListener("mouseup", function () {mouseDown = false}, false);
window.addEventListener("mousemove", setVolume, false);