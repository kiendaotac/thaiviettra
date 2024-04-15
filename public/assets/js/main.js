/** ==========================================================================================

  Project :   Buildtab - Responsive Multi-purpose HTML5 Template
  Author :    Themetechmount

========================================================================================== */

/** ===============

 .. Preloader
 .. header_search
 .. Fixed-header
 .. Menu
 .. Skillbar
 .. Tab
 .. Accordion
 .. Slick_slider
 .. Back to top 
 .. margin padding

 =============== */


jQuery(function ($) {

    "use strict";
    $('.slider-banner').slick({
        dots: true,
        speed: 300,
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
    });
    $('.slider-blog').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });

      $('.slider-product').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        arrows:false,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });

      $('.slider-stept').slick({
        dots: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: false,
        centerMode: true,
        arrows: true,
        infinite: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
      $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
      });

      $('.slider-for-stept').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav-stept').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
      });
    /*------------------------------------------------------------------------------*/
    /* Preloader
    /*------------------------------------------------------------------------------*/
    // makes sure the whole site is loaded
    $(window).on("load", function () {
        $(".loader-blob").fadeOut(), $("#preloader").delay(300).fadeOut("slow", function () { $(this).remove() })
    })


    /*------------------------------------------------------------------------------*/
    /* header_search
    /*------------------------------------------------------------------------------*/


    $(".header_search").each(function () {
        $(".search_btn", this).on("click", function (e) {

            e.preventDefault();
            e.stopPropagation();

            $(".header_search_content").toggleClass("on");

            if ($('.header_search a').hasClass('open')) {

                $(".header_search a i").removeClass('fa-xmark').addClass('fa-magnifying-glass');

                $(this).removeClass('open').addClass('sclose');

            }

            else {
                $(".header_search a").removeClass('sclose').addClass('open');

                $(".header_search a i").removeClass('fa-magnifying-glass').addClass('fa-xmark');

            }
        });

    });
    /*------------------------------------------------------------------------------*/
    /* header_logo / Nav
    /*------------------------------------------------------------------------------*/

    $(document).ready(function () {

        if (matchMedia('only screen and (min-width: 1200px)').matches) {
            $('.header.logo-change').find('img').attr({ src: './images/logo-light.svg' });
        }

    });

    jQuery(window).resize(function () {

        var retina = window.devicePixelRatio > 1 ? true : false;

        if (matchMedia('only screen and (max-width: 1200px)').matches) {

            $('.header.logo-change .site-branding').find('img').attr({ src: './images/logo-img.svg' });
        }

        else {

            $('.header.logo-change .site-branding').find('img').attr({ src: './images/logo-light.svg' });
        }

    });
    /*------------------------------------------------------------------------------*/
    /* Fixed-header
    /*------------------------------------------------------------------------------*/

    $(window).scroll(function () {


        if (matchMedia('only screen and (min-width: 1200px)').matches) {
            if ($(window).scrollTop() >= 50) {

                $('.ttm-stickable-header').addClass('fixed-header');
                $('.header.logo-change .ttm-stickable-header').addClass('fixed-header').find('img').attr({ src: './images/logo-img.svg' });;

            }
            else {

                $('.ttm-stickable-header').removeClass('fixed-header');
                $('.header.logo-change .ttm-stickable-header').removeClass('fixed-header').find('img').attr({ src: './images/logo-light.svg' });;

            }
        }
    });




    /*------------------------------------------------------------------------------*/
    /* Menu
    /*------------------------------------------------------------------------------*/

    function menuhover_item() {
        var tm_menu_item, tm_leftmenu, tm_menu_width, tm_parentli_width;
        var tm_sepline = jQuery(".ttm-sepline");
        var active_item = jQuery("#site-header-menu .site-navigation .main-menu > ul:not(.social-icons)").children(".active");
        if (active_item.length != 0) {
            tm_sepline.width(active_item.width()).css({ left: active_item.position().left, opacity: 1 }).data("origLeft", tm_sepline.position().left).data("origWidth", tm_sepline.width());
        } else {
            tm_sepline.css("opacity", 0);
        }
        jQuery("#site-header-menu .site-navigation .main-menu > ul:not(.social-icons) > li")
            .children("a")
            .hover(
                function () {
                    tm_menu_item = jQuery(this);
                    tm_leftmenu = tm_menu_item.parent().position().left;
                    tm_menu_width = tm_menu_item.parent().width();
                    tm_sepline.stop().animate({ left: tm_leftmenu, width: tm_menu_width, opacity: 1 });
                },
                function () {
                    tm_sepline.stop().animate({ left: tm_sepline.data("origLeft"), width: tm_sepline.data("origWidth") });
                    if (active_item.length == 0) {
                        tm_sepline.stop().animate({ opacity: 0 });
                    }
                }
            );
        jQuery("#site-header-menu .site-navigation .main-menu ul ul > li")
            .children("a")
            .hover(
                function () {
                    tm_menu_item = jQuery(this);
                    tm_leftmenu = tm_menu_item.parent("ul.menu>.mega-menu-item").closest("li").left;
                    tm_menu_width = tm_menu_item.parent().closest(".main-menu > ul >li").width();
                    tm_sepline.stop().animate({ left: tm_leftmenu, width: tm_menu_width, opacity: 1 });
                },
                function () {
                    tm_sepline.stop().animate({ left: tm_sepline.data("origLeft"), width: tm_sepline.data("origWidth") });
                    if (active_item.length == 0) {
                        tm_sepline.stop().animate({ opacity: 0 });
                    }
                }
            );
    }

    jQuery("header #site-header-menu .site-navigation .main-menu > ul.menu").append("<li class='ttm-sepline'><span class='sep-img'></span></li>");
    menuhover_item();


    var menu = {
        initialize: function () {
            this.Menuhover();
        },

        Menuhover: function () {
            var getNav = $("nav.main-menu"),
                getWindow = $(window).width(),
                getHeight = $(window).height(),
                getIn = getNav.find("ul.menu").data("in"),
                getOut = getNav.find("ul.menu").data("out");

            if (matchMedia('only screen and (max-width: 1200px)').matches) {

                // Enable click event
                $("nav.main-menu ul.menu").each(function () {

                    // Dropdown Fade Toggle
                    $("a.mega-menu-link", this).on('click', function (e) {
                        e.preventDefault();
                        var t = $(this);
                        t.toggleClass('active').next('ul').toggleClass('active');
                    });

                    // Megamenu style
                    $(".megamenu-fw", this).each(function () {
                        $(".col-menu", this).each(function () {
                            $(".title", this).off("click");
                            $(".title", this).on("click", function () {
                                $(this).closest(".col-menu").find(".content").stop().toggleClass('active');
                                $(this).closest(".col-menu").toggleClass("active");
                                return false;
                                e.preventDefault();

                            });

                        });
                    });

                });
            }
        },
    };


    $('.btn-show-menu-mobile').on('click', function (e) {
        $(this).toggleClass('is-active');
        $('.menu-mobile').toggleClass('show');
        return false;
        e.preventDefault();
    });

    // Initialize
    $(document).ready(function () {
        menu.initialize();

    });


    /* side-menu */
    $(".side-menu-container").each(function () {
        $(".side-menu > a", this).on("click", function (e) {
            e.preventDefault();
            $(".side-overlay").toggleClass("on");
            $("body").toggleClass("on-side");
        });
    });
    $(".side .close-side").on("click", function (e) {
        e.preventDefault();
        $(".side-overlay").removeClass("on");
        $("body").removeClass("on-side");
    });

    var $bannerSlider = jQuery('.banner_slider');
    var $bannerFirstSlide = $('div.slide:first-child');

    $bannerSlider.on('init', function (e, slick) {
        var $firstAnimatingElements = $bannerFirstSlide.find('[data-animation]');
        slideanimate($firstAnimatingElements);
    });
    $bannerSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('div.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        slideanimate($animatingElements);
    });
    $bannerSlider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        dots: false,
        swipe: true,
        adaptiveHeight: true,
        responsive: [

            {
                breakpoint: 1200,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: false,
                    autoplaySpeed: 4000,
                    swipe: true
                }
            }]
    });

    function slideanimate(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });

            $this.addClass($animationType).one(animationEndEvents, function () {
                $this.removeClass($animationType);
            });
        });
    }



    /*------------------------------------------------------------------------------*/
    /* Skillbar
    /*------------------------------------------------------------------------------*/
    $('.ttm-progress-bar').each(function () {
        $(this).find('.progress-bar').width(0);
    });

    $('.ttm-progress-bar').each(function () {

        $(this).find('.progress-bar').animate({
            width: $(this).attr('data-percent')
        }, 2000);
    });

    // Part of the code responsible for loading percentages:

    $('.progress-bar-percent[data-percentage]').each(function () {

        var progress = $(this);
        var percentage = Math.ceil($(this).attr('data-percentage'));

        $({ countNum: 0 }).animate({ countNum: percentage }, {
            duration: 2000,
            easing: 'linear',
            step: function () {
                // What todo on every count
                var pct = '';
                if (percentage == 0) {
                    pct = Math.floor(this.countNum) + '%';
                } else {
                    pct = Math.floor(this.countNum + 1) + '%';
                }
                progress.text(pct);
            }
        });
    });


    /*------------------------------------------------------------------------------*/
    /* Tab
    /*------------------------------------------------------------------------------*/

    $('.ttm-tabs > .tabs').children('li').on('click', function (e) {

        var tab = $(this).closest('.ttm-tabs > .tabs > .tab'),

            index = $(this).closest('.ttm-tabs > .tabs > li').index();

        $(this).parents('.ttm-tabs').children('.tabs').children('li.active ').removeClass('active');

        $(this).addClass('active');
        $(this).addClass('active').parents('.ttm-tabs').children('.content-tab').find('.content-inner').not('.content-inner:eq(' + index + ')').slideUp();
        $(this).addClass('active').parents('.ttm-tabs').children('.content-tab').find('.content-inner:eq(' + index + ')').slideDown();

        e.preventDefault();
    });


    /*------------------------------------------------------------------------------*/
    /* Accordion
    /*------------------------------------------------------------------------------*/

    var allPanels = $('.accordion > .toggle').children('.toggle-content').hide();

    $('.toggle-title').on('click', function (e) {

        e.preventDefault();
        var $this = $(this);
        $this.closest(".accordion").find('.toggle-title a').toggleClass('active');
        $this.next(".toggle-content").toggleClass('show');
    });

    /*------------------------------------------------------------------------------*/
    /* Slick_slider
    /*------------------------------------------------------------------------------*/
    $(".slick_slider").slick();


    /*------------------------------------------------------------------------------*/
    /* Back to top
    /*------------------------------------------------------------------------------*/

    // ===== Scroll to Top ==== 
    jQuery('#totop').hide();

    $(window).on("scroll", function () {
        if (jQuery(this).scrollTop() >= 500) {        // If page is scrolled more than 50px
            jQuery('#totop').fadeIn(200);    // Fade in the arrow
            jQuery('#totop').addClass('top-visible');
        } else {
            jQuery('#totop').fadeOut(200);   // Else fade out the arrow
            jQuery('#totop').removeClass('top-visible');
        }
    });

    jQuery('#totop').on("click", function () {      // When arrow is clicked
        jQuery('body,html').animate({
            scrollTop: 0                       // Scroll to top of body
        }, 500);
        return false;
    });



});

/*------------------------------------------------------------------------------*/
/* margin padding
/*------------------------------------------------------------------------------*/

$(function () {
    jQuery('.ttm-expandcontent-yes').each(function () {
        var cmt_column_div = '';
        var scrren_size = jQuery(window).width();
        var box_size = jQuery(this).parent().width();
        var extra_size = ((scrren_size - box_size) / 2);
        if (jQuery(this).hasClass('ttm-right-span')) {
            cmt_column_div = ', .ttm-expandcontent-yes-wrapper > .expandcontent:not(.tm_column_wrapper)';
            jQuery('.ttm-expandcontent-yes-wrapper > .cmt-col-wrapper-bg-layer' + cmt_column_div, jQuery(this)).css('margin-right', '-' + extra_size + 'px');
        } else if (jQuery(this).hasClass('ttm-left-span')) {
            cmt_column_div = ', .ttm-expandcontent-yes-wrapper > .expandcontent:not(.cmt_column_wrapper)';
            jQuery('.ttm-expandcontent-yes-wrapper > .cmt-col-wrapper-bg-layer' + cmt_column_div, jQuery(this)).css('margin-left', '-' + extra_size + 'px');
        }
    });
});

