$(document).ready(() => {
    var btn = $('#scroll-top-button');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });

});



$(document).ready(() => {
    var widthWindow = $(window).width();
    var pixelsSizeClick = '';
    if(widthWindow < 525){
        pixelsSizeClick = 130
    }else{
        pixelsSizeClick= 180
    }
    $(".dropdown-menu a").click(function(){
        var target = $(this).attr("attr-hash");
        console.log($(`#${target}`).offset().top - pixelsSizeClick)
        $('html, body').animate({
            scrollTop: $(`#${target}`).offset().top - pixelsSizeClick
        }, 1000);
    });
    $(".sub-link").click(function(){
        var target = $(this).attr("attr-hash");
        $('html, body').animate({
            scrollTop: $(`#${target}`).offset().top - pixelsSizeClick
        }, 1000);
    });
    setTimeout( function() {
        if ( window.location.hash ) scroll(0,0);
        if(window.location.hash) {
            $('html, body').animate({
                scrollTop: $(window.location.hash).offset().top - pixelsSizeClick
            }, 1000);
        }
    }, 1);
});
