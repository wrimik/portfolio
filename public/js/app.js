/**
 * sets the nth link in nav to be "active"
 * @param n
 */
function nav(n) {
    $('.navbar .nav li:eq(' + n + ')').addClass('active');
    $(document).on('click', '.navbar .nav', function () {
        $('.navbar .active').removeClass('active');
        $(this).addClass('active');
    });
}
function scrollTo(target) {
    var t = $(target).offset().top;
    $("html, body").animate({scrollTop: t}, 700)
}