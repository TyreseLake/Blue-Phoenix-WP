(function ($) {
    "use strict";

    console.log("this is working!");

    $(".navbar-nav > .menu-item").addClass("nav-item");
    $(".navbar-nav > .menu-item a").addClass("nav-link");
    $(".navbar-nav > .menu-item-has-children").addClass("dropdown");
    $(".navbar-nav > .menu-item-has-children > a").addClass("dropdown-toggle");
    $(".navbar-nav > .menu-item-has-children > a").attr('data-bs-toggle', 'dropdown');
    $(".navbar-nav > .menu-item-has-children .sub-menu").addClass("dropdown-menu");
    $(".navbar-nav > .menu-item-has-children .sub-menu .menu-item a").addClass("dropdown-item");



})(jQuery);