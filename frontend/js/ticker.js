jQuery(document).ready(function ($) {

    function desktop_ticker() {
        var slideCount = $('#slider ul li').length;
        var slideWidth = $('#slider ul li').width();
        var slide_shift = $('#slider').width();
        var sliderUlWidth = slideCount * slideWidth;

        $('#slider ul').css({ width: sliderUlWidth });
        slideWidth = slideWidth * 2;
        function moveRight() {
            $('#slider ul').animate({
                left: -slide_shift
            }, 1000, function () {
                $('#slider ul li:first-child').appendTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        }
        setInterval(function () {
            moveRight();
        }, 5000);
    }

    function mobile_ticker() {
        var slideCount = $('#slider_m ul li').length;
        var slideWidth = $('#slider_m ul li').width();
        var slide_shift = $('#slider_m').width();
        var sliderUlWidth = slideCount * slideWidth;

        $('#slider_m ul').css({ width: sliderUlWidth });
        slideWidth = slideWidth * 2;
        function moveRight() {
            $('#slider_m ul').animate({
                left: -slide_shift
            }, 1000, function () {
                $('#slider_m ul li:first-child').appendTo('#slider_m ul');
                $('#slider_m ul').css('left', '');
            });
        }
        setInterval(function () {
            moveRight();
        }, 5000);
    }

    var w = $(window).width();
    if (w <= 800) {
        var a = $('.mobile_ticker ul li .ticker_brand').width();
        var b = $('#slider_m').width();
        a = a * 2;
        var c = b - a;
        c = c / 2;
        d = b - c;
        $('#slider_m').css('width', d + 'px');
        $('#slider_m').css('padding-left', c + 'px');
        mobile_ticker();
    }
    else {
        desktop_ticker();
    }

});    