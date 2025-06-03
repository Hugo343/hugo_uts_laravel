// Index of jQuery Active Code

// :: 1.0 PRELOADER ACTIVE CODE
// :: 2.0 TOOLTIP ACTIVE CODE
// :: 3.0 NAVIGATION MENU ACTIVE CODE
// :: 4.0 STICKY HEADER ACTIVE CODE
// :: 5.0 SCROLL TO TOP ACTIVE CODE
// :: 6.0 SCROLL LINK ACTIVE CODE
// :: 7.0 SMOOTH SCROLLING ACTIVE CODE
// :: 8.0 AOS ACTIVE CODE
// :: 9.0 WOW ACTIVE CODE
// :: 10.0 PREVENT DEFAULT ACTIVE CODE
// :: 11.0 DATA CENTER ACTIVE CODE
// :: 12.0 REVIEWS ACTIVE CODE

(function ($) {
    'use strict';

    var $window = $(window);
    var zero = 0;

    // :: 1.0 PRELOADER ACTIVE CODE
    $(window).on("load", function () {
        $("#hostbit-preloader").addClass("loaded");

        if ($("#hostbit-preloader").hasClass("loaded")) {
            $("#preloader").delay(900).queue(function () {
                $(this).remove();
            });
        }
    });

    // :: 2.0 TOOLTIP ACTIVE CODE
    $(document).ready(function(){
      $('.plan-list').tooltip();
    });

    // :: 3.0 NAVIGATION MENU ACTIVE CODE
    jQuery(function ($) {
        'use strict';

        // RESPONSIVE NAVIGATION
        function navResponsive() {

            let navbar = $('.navbar .items');
            let menu = $('#menu .items');

            menu.html('');
            navbar.clone().appendTo(menu);

            $('.menu .fa-angle-right').removeClass('fa-angle-right').addClass('fa-angle-down');
        }

        navResponsive();

        $(window).on('resize', function () {
            navResponsive();
        })

        // PREVENT DROPDOWN
        $('.menu .dropdown-menu').each(function () {
            var children = $(this).children('.dropdown').length;
            $(this).addClass('children-' + children);
        })

        $('.menu .nav-item.dropdown').each(function () {
            var children = $(this).children('.nav-link');
            children.addClass('prevent');
        })

        $(document).on('click', '#menu .nav-item .nav-link', function (e) {

            if ($(this).hasClass('prevent')) {
                e.preventDefault();
            }

            var nav_link = $(this);

            nav_link.next().toggleClass('show');

            if (nav_link.hasClass('smooth-anchor')) {
                $('#menu').modal('hide');
            }
        })
    });

    // :: 4.0 STICKY HEADER ACTIVE CODE
    $window.on('scroll', function () {
        if ($(window).scrollTop() > 100) {
            $('.navbar').addClass('navbar-sticky');
            $('.navbar .navbar-nav.action .btn').addClass('btn-bordered');
            $('.navbar .navbar-nav.action .btn').removeClass('btn-bordered-white');
        } else {
            $('.navbar').removeClass('navbar-sticky');
            $('.navbar .navbar-nav.action .btn').removeClass('btn-bordered');
            $('.navbar .navbar-nav.action .btn').addClass('btn-bordered-white');
        }
    });

    $window.on('scroll', function () {
        $('.navbar-sticky').toggleClass('hide', $(window).scrollTop() > zero);
        zero = $(window).scrollTop();
    });

    // :: 5.0 SCROLL TO TOP ACTIVE CODE
    var offset = 300;
    var duration = 500;

    $window.on('scroll', function () {
        if ($(this).scrollTop() > offset) {
            $("#scrollUp").fadeIn(duration);
        } else {
            $("#scrollUp").fadeOut(duration);
        }
    });

    $("#scrollUp").on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, duration);
    });

    // :: 6.0 SCROLL LINK ACTIVE CODE
    var scrollLink = $('.scroll');

    // :: 7.0 SMOOTH SCROLLING ACTIVE CODE
    scrollLink.on('click', function (e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });

    // :: 8.0 AOS ACTIVE CODE
    AOS.init();

    // :: 9.0 WOW ACTIVE CODE
    new WOW().init();

    // :: 10.0 PREVENT DEFAULT ACTIVE CODE
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // :: 11.0 DATA CENTER ACTIVE CODE
    tippy('[data-tippy-content]', {
      animation: 'scale',
      maxWidth: 250,
      arrow: true
    });

    // :: 12.0 REVIEWS ACTIVE CODE
    $('.client-reviews.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 40,
        autoplay:true,
        nav: false,
        dots: true,
        smartSpeed: 1000
    });

}(jQuery));