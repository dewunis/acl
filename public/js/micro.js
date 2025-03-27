var ismute = true;
document.getElementById("svg_mute").style.display = "none";

function btnsound() {
    var video = document.getElementsByClassName("nectar-video-bg")[0];
    video.muted = !video.muted;
    if (ismute) {
        ismute = false;
        document.getElementById("svg_mute").style.display = "block";
        document.getElementById("svg_unmute").style.display = "none";
    } else {
        ismute = true;
        document.getElementById("svg_mute").style.display = "none";
        document.getElementById("svg_unmute").style.display = "block";
    }
}