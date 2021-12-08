require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.$ = window.jQuery = require('jquery');

require('./slick-1.8.1.min');

jQuery(window).scroll(function() {
    const scroll = jQuery(window).scrollTop();

    if (scroll >= 150) {
        jQuery('.sticky-header').addClass('sticky-header-active');
    } else {
        jQuery('.sticky-header').removeClass('sticky-header-active');
    }
});

jQuery(document).ready(function($) {
    $('.gallery-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        asNavFor: '.thumbnail-slider'
    });

    $('.thumbnail-slider').slick({
        slidesToShow: 10,
        slidesToScroll: 1,
        asNavFor: '.gallery-slider',
        centerMode: true,
        focusOnSelect: true
    });
});