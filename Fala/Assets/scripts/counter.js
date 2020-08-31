

    var stopCount = 0;
    $(window).scroll(() => {
        if($('#widget-account').length > 0) {
            var oTop = $('#widget-account').offset().top - window.innerHeight;
            if (stopCount == 0 && $(window).scrollTop() > oTop) {
                $('.count').each(function () {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 5500,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(commaSeparateNumber(Math.ceil(now)));
                        }
                    });
                });

                function commaSeparateNumber(val) {
                    return val.toLocaleString()
                }

                stopCount = 1;
            }
        }
    });

