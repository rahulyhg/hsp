jQuery(function () {

    //function brands() {
    //    var i = 10;
    //    interval = setInterval(function () {
    //        //if (i == 300) {
    //        //alert("clear");
    //        //    clearInterval(interval);
    //        //}
    //        $('#brand_count').text(i);
    //        var brand_limit = $('#brand_count').text();
    //        if (brand_limit > 290) { clearInterval(interval); }
    //        i = i + 10;
    //        return i;
    //    }, 40);

    //}


    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() != 0) {
            //var x = $('header').offset();
            ////var st = $(document).scrollTop();
            //var head_position = x.top;
            //head_position = head_position - 40;

            jQuery('#toTop, #backtotop').fadeIn();
            if ($(this).scrollTop() > 700) {
                $('#quick-info').css('position', 'fixed');
                $('#wrapper').css('position', 'fixed');
                $('#quick-info').css('top', '0');
                $('#wrapper').css('top', '40px');
                $('#quick-info').css('z-index', '99');

               
            }
            else {
                $('#wrapper').css('position', 'relative');
                $('#quick-info').css('position', 'relative');
                $('#wrapper').css('top', '0');
                //$('#wrapper').css('top', '0');

            }



        } else {
            jQuery('#toTop, #backtotop').fadeOut();
        }





    });
    jQuery('#toTop').click(function () {
        jQuery('body,html').animate({ scrollTop: 0 }, 800);
    });
});