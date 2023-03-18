var ctrls = document.getElementsByClassName("audio-control");

for (var i = 0; i < ctrls.length; i++) {
  ctrls[i].onclick = function () {
    var yourAudio = this.previousElementSibling;
    var pause =
      this.innerHTML === '<i class="fa-solid fa-pause play-pause"></i>';
    this.innerHTML = pause
      ? '<i class="fa-solid fa-play play-pause"></i>'
      : '<i class="fa-solid fa-pause play-pause"></i>';

    this.classList.toggle("playing");

    var method = pause ? "pause" : "play";
    yourAudio[method]();

    return false;
  };
}
