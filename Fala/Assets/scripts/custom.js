var AOS = require('aos');
AOS.init();

$(document).ready(() => {
    $('#thankYouModal').modal('show');
    $('.event-slider').slick({
        adaptiveHeight: false,
        slidesToShow: 1,
        arrows: true,
        prevArrow: $('.prev-event-slider'),
        nextArrow: $('.next-event-slider')
    });
    //load-more gallery
    $('#container-list').on('click', '#load-more', function (e) {
        let button = $(this)
        let loader = $('#loader img')
        let action = button.data('action')
        button.parent().remove()
        loader.toggleClass('d-none')
        $.get(action)
            .done((res) => {
                $('#container-list').append(res)
            })
            .always(() => {
                loader.toggleClass('d-none')
            })
    })

    //menu on hover
    $('ul.navbar-nav li.nav-item').hover(function () {
        $(this).find('.nav-link').addClass('active');
        $(this).find('.caret-nav').addClass('active');
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {
        $(this).find('.nav-link').removeClass('active');
        $(this).find('.caret-nav').removeClass('active');
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });

    //scroll to list
    $('.open-filters').click(function () {
        $('.filters').toggleClass('open');
    });
    $('.open-list-to').click(function () {
        $('.list-to').toggleClass('open');
    });

    //homepage main carousel hide arrows and dots
    $('#mainCarousel .carousel-inner').each(function () {
        if ($(this).children('div').length === 1) $(this).siblings('.carousel-indicators, .carousel-control-prev, .carousel-control-next').hide();
    });
    //what fa carousel hide arrows and dots
    $('#carouselWhatFa .carousel-inner').each(function () {
        if ($(this).children('div').length === 1) $(this).siblings('.carousel-indicators, .carousel-control-prev, .carousel-control-next').hide();
    });



    //slick slider diagnosed
    $('.sliderEvents').slick({
        adaptiveHeight: false,
        slidesToShow: 4,
        arrows: true,
        prevArrow: $('.prev-event'),
        nextArrow: $('.next-event'),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                }
            },
            {
                breakpoint: 425,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: $('.prev-event'),
                    nextArrow: $('.next-event'),
                }
            }
        ]
    });

    $('.sliderDiagnosed').slick({
        adaptiveHeight: false,
        slidesToShow: 4,
        arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 425,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.sliderDiagnosedPage').slick({
        adaptiveHeight: false,
        slidesToShow: 3,
        arrows: true,
        prevArrow: $('.prev-diagnosed'),
        nextArrow: $('.next-diagnosed'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 425,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('.sliderResourcesStudies').slick({
        adaptiveHeight: false,
        slidesToShow: 4,
        arrows: true,
        prevArrow: $('.prev-studies'),
        nextArrow: $('.next-studies'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 425,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //slider family about
    if ($(window).width() < 767) {
        $('.family-slider').slick({
            adaptiveHeight: false,
            slidesToShow: 1,
            arrows: true,
            prevArrow: $('.prev-family'),
            nextArrow: $('.next-family')
        });
    }

    $('[data-fancybox]').fancybox({
        thumbs : {
            autoStart   : true,
            hideOnClose : true
        },
        buttons : [
            'slideShow',
            'fullScreen',
            'thumbs',
            'zoom',
            'close'
        ]
    });

});
