
function scrollTo(target) {
    var t = $(target).offset().top;
    //stop prevents queueing
    $("html, body").stop().animate({scrollTop: t}, 700)
}