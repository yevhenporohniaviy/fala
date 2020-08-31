$(document).ready(() => {
    var widthWindow = $(window).width();
    var pixelsSizeClick = '';
    if(widthWindow < 525){
        pixelsSizeClick = 130
    }else{
        pixelsSizeClick = 185
    }
    $('#widget-scroll-to a[href*="#"]').click(function(){
        var target = $(this).attr("href");
        $('html, body').animate({
            scrollTop: $(target).offset().top - pixelsSizeClick
        }, 1000);
    });
});



$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop();
    var widthWindow = $(window).width();
    var pixelsSize = '';
    if(widthWindow < 525){
        pixelsSize = 130
    }else{
        pixelsSize = 190
    }
    $('.page-section').each(function(i) {
        if ($(this).position().top - pixelsSize  <= scrollDistance) {
            $('#widget-scroll-to .list-to ul li a.active').removeClass('active');
            $('#widget-scroll-to .list-to ul li a').eq(i).addClass('active');
        }
    });

}).scroll();

