$(window).on('load', function () {
    $("#status").fadeOut();
    $("#preloader").fadeOut(800);
});
window.onscroll = function () {
    myFunction()
};

var navbar = document.getElementById("flex1");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
$(function () {
    $("#aa").owlCarousel({
        items: 1,
        autoplay: false,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navtext: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
    });
});
