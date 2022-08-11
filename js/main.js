$(document).ready(function(){

    $('.hamburger').click(function () {
        $('.mm_menu').toggleClass('open');
        $('html').toggleClass('page-noscroll');

        $('.main_menu .mm_close').click(function () {
            $('.mm_menu').removeClass('open');
            $('html').removeClass('page-noscroll');
        });
        return false;
    });

    $('.faq_item_header').click(function(){
        $(this).toggleClass('act').next().slideToggle();
    });


    if($('.slider_txt > div').length > 1){
        $('.slider_txt').slick({
            slidesToShow:1,
            slidesToScroll: 1,
            dots: true,
            vertical: true,
            verticalSwiping: true,
            arrows: false,
            infinite: false,
            focusOnSelect: true,
            asNavFor: '.slider_image',
            responsive: [

                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        vertical: false,
                        verticalSwiping: false,
                    }
                },

            ]
        });
    }


    if($('.slider_image > div').length > 1){
        $('.slider_image').slick({
            slidesToShow:1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            fade: true,
            asNavFor: '.slider_txt',
            responsive: [

                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1
                    }
                },

            ]
        });
    }



    $(window).resize(function(){
        var header_height = $('header').outerHeight();
        $('.page').css({
            'padding-top':header_height+'px'
        });
        $(window).scroll(function(){
            if ($(this).scrollTop() > header_height) {
                $('header').addClass('fixed');
            } else {
                $('header').removeClass('fixed');
            }
        });

    });
    $(window).resize();


    $('.menu a[href^="#"]').click(function(e){
        e.preventDefault();
        var target=$(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1500);
        if($(window).innerWidth()< 991){
            $('body').removeClass('mm_act');
        }
    });


    $('.modal_toggle').click(function(){
        var target=$(this).attr('href');
        $(target).addClass('show');
        $("html").addClass('page_noscroll');

        $('.modal_close').click(function(){
            $(this).closest('.modal').removeClass('show');
            $("html").removeClass('page_noscroll');
        });
        return false;
    });

    $(document).click(function (e){
        if (!$(e.target).closest(".modal_content").length) {
            $(".modal.show").removeClass('show');
            $("html").removeClass('page_noscroll');
        }
        e.stopPropagation();

    });


    $(function () {
        $('.form_control').each(function () {
            $(this).focus(function () {
                $(this).addClass('not_empty');
            });
            $(this).blur(function(){
                if(!this.value){
                    $(this).removeClass('not_empty');
                }
                else{
                    $(this).addClass('not_empty');
                }
            });
            if ( !this.value ) {
                $(this).removeClass('not_empty');
            }
            else{
                $(this).addClass('not_empty');
            }
        });
    });


});





