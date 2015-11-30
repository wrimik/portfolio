
function scrollTo(target) {
    var t = $(target).offset().top;
    $("html, body").animate({scrollTop: t}, 700)
}