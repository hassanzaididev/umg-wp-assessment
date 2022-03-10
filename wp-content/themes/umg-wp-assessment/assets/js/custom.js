// JavaScript Document
jQuery(document).ready(function($) {


    /*START STICKY CODE*/
    var i = 1;
    $(window).bind("scroll", function() {
        var window_top = $(window).scrollTop();
        var div_top = $('#sticky-anchor').offset().top + 100;
        if (window_top > div_top) {
            if (i == 1) {
                $('#sticky-anchor').height($('.header_wrapper').height());
                $('header').addClass('fixed-header');
                i++;
            }

        } else {
            i = 1;
            $('header').removeClass('fixed-header');
            $('#sticky-anchor').height(0);
        }
    });




    $(".menu_btn").click(function() {
        $("header nav > ul").slideToggle();
    });

   /* if (!$('nav ul li a').hasClass('active')) {
        $('nav ul li a').addClass('active');
    }*/

    $(document).on("scroll", onScroll);



    function onScroll() {
        var scrollPos = $(document).scrollTop();
        $('header nav ul li a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('header nav ul li a').removeClass("active");
                currLink.addClass("active");
            } else {
                // currLink.removeClass("active");
            }
        });
    }
    //smoothscroll
    $('header nav ul li a').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");
		$('header nav ul').slideUp();

        //setTimeout(function(){
        $('header  nav ul li a').removeClass('active');
        $(this).addClass('active');
        //}, 2000);


        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top + 2
        }, 500, 'swing', function() {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });




    $(".data_row").slice(0, 5).show();
    $(".load-more").on("click", function() {
        $(".data_row:hidden").slice(0, 5).show();
        if ($(".data_row:hidden").length == 0) {
            $(".load-more").fadeOut();
        }
    });


});