let visibleLogo = true;

let fadeSpeed = 250;
let fadeSpace = 85;

window.onscroll = function (e) {
    scrollLength = window.scrollY;

    if (scrollLength > 300 && visibleLogo == true) {

        visibleLogo = false;


        $('.letter-logo-animation.p').delay(fadeSpace * 0).animate({ opacity: 0, left: "10px" }, fadeSpeed);
        $('.letter-logo-animation.i').delay(fadeSpace * 1).animate({ opacity: 0, left: "10px" }, fadeSpeed);
        $('.letter-logo-animation.v').delay(fadeSpace * 2).animate({ opacity: 0, left: "10px" }, fadeSpeed);
        $('.letter-logo-animation.o').delay(fadeSpace * 3).animate({ opacity: 0, left: "10px" }, fadeSpeed);
        $('.letter-logo-animation.t').delay(fadeSpace * 4).animate({ opacity: 0, left: "10px" }, fadeSpeed);
        $('.letter-logo-animation.a').delay(fadeSpace * 5).animate({ opacity: 0, left: "10px" }, fadeSpeed);
        $('.letter-logo-animation.l').delay(fadeSpace * 6).animate({ opacity: 0, left: "10px" }, fadeSpeed);
        $('#logoIcon').delay(fadeSpace * 8).animate({ opacity: 1 }, fadeSpeed);
    }

    else if (scrollLength < 100 && visibleLogo == false) {

        visibleLogo = true;

        $('#logoIcon').delay(fadeSpace * 0).animate({ opacity: 0 }, fadeSpeed);
        $('.letter-logo-animation.p').delay(fadeSpace * 0).animate({ opacity: 1, left: "0px" }, fadeSpeed);
        $('.letter-logo-animation.i').delay(fadeSpace * 1).animate({ opacity: 1, left: "0px" }, fadeSpeed);
        $('.letter-logo-animation.v').delay(fadeSpace * 2).animate({ opacity: 1, left: "0px" }, fadeSpeed);
        $('.letter-logo-animation.o').delay(fadeSpace * 3).animate({ opacity: 1, left: "0px" }, fadeSpeed);
        $('.letter-logo-animation.t').delay(fadeSpace * 4).animate({ opacity: 1, left: "0px" }, fadeSpeed);
        $('.letter-logo-animation.a').delay(fadeSpace * 5).animate({ opacity: 1, left: "0px" }, fadeSpeed);
        $('.letter-logo-animation.l').delay(fadeSpace * 6).animate({ opacity: 1, left: "0px" }, fadeSpeed);


    }

}