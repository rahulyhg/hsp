jQuery(document).ready(function () {


    jQuery('.trainers, .classes').hover(function () {
        jQuery(this).find('img').stop().animate({
            'opacity': '1'
        }, 200);
    }, function () {
        jQuery(this).find('img').stop().animate({
            'opacity': '1'
        }, 200);
    });


    jQuery('.slider').hover(function () {
        jQuery(this).find('.bg-image').stop().animate({
            'opacity': '1'
        }, 200);
        jQuery(this).find('.bg-text').stop().animate({
            'opacity': '0'
        }, 200);
    }, function () {
        jQuery(this).find('.bg-image').stop().animate({
            'opacity': '1'
        }, 200);
        jQuery(this).find('.bg-text').stop().animate({
            'opacity': '1'
        }, 200);
    });




    jQuery('.trainers, .classes').hover(function () {
        jQuery(this).find('.images .title, .images .subtitle').stop().animate({
            'opacity': '1'
        }, 200);
    }, function () {
        jQuery(this).find('.images .title, .images .subtitle').stop().animate({
            'opacity': '0'
        }, 200);
    });




    jQuery('.images, .bg-image').hover(function () {
        jQuery(this).find('.overlay').stop().animate({
            'bottom': '0'
        }, 200);
    }, function () {
        jQuery(this).find('.overlay').stop().animate({
            'bottom': '0'
        }, 200);
    });


    var w = $(window).height();
    //jQuery('#wrap').css('margin-top', w);
    jQuery('.top_main').css('height', w);








  //  $("body").smoothWheel();


    $('.counter .number').counterUp({
                delay: 5,
                time: 1000
            });


});	





