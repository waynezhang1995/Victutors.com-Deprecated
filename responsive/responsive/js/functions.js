function InitialSize() {
    var h = $(window).height();//window height
    var w = $(window).width();
    $("#bg").css("height", h);
    var y = $("#navbar").height();//navbar height
    $("#body").css("height", h - y);//(window - navbar) height
}

function InitialFont() {
}

function responsive() {
    var x = document.getElementById("navbarlist");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

$(document).ready(function () {
    //InitialSize();
    //InitialFont();
})