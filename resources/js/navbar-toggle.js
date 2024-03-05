$(document).ready(function () {
    var navbarState = localStorage.getItem('navbarState');
    if (navbarState === 'open') {
        $(".nav-link").show();
        $(".navMenu").show();
        $("#menu").hide();
        $("nav").removeClass("bg-gray-950").addClass("bg-black");
    } else {
        $(".nav-link").hide();
        $(".navMenu").show();
        $("#menu").show();
        $("nav").removeClass("bg-black").addClass("bg-gray-950");
    }

    $("#navbars").click(function (e) {
        e.preventDefault();
        $(".nav-link").toggle(500, "swing");
        $(".navMenu").toggle(300, "swing");
        $("#menu").toggle(500, "swing", function () {
            $(".navMenu").toggle(300, "swing");
        })
        $("nav").toggleClass("bg-black bg-gray-950", 1000, "easeOutSine");

        if ($("nav").hasClass("bg-black")) {
            localStorage.setItem('navbarState', 'open');
        } else {
            localStorage.setItem('navbarState', 'closed');
        }
    });
});
