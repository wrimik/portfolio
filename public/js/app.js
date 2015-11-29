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

if(typeof(console) != undefined){
    console.log("Hey, if you're using the console to check out my work, "+
                "be sure to do a traditional 'view source' so you can see "+
                "the comments. Thanks!")
}