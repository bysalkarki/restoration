require('metismenu');
require('particles.js');
require('owl.carousel');
require('lightslider');
require('lightgallery');
require('bxslider/src/js/jquery.bxslider')
import AOS from 'aos';
import Stats from 'particles.js';
jQuery(document).ready(function($) {

// Search
$(".search-box i").on("click", function(){
    $(".search-overlay").toggleClass("search-overlay-active");
});
$(".search-overlay-close").on("click", function(){
    $(".search-overlay").removeClass("search-overlay-active");
});
// Search End


    // Mobile Nav
    $("#menu1").metisMenu();
    // MObile Nav End


    // Side menubar
    $("#close-btn, .toggle-btn").click(function() {
        $("#mySidenav, body").toggleClass("active");
    });

   // Search Toggle
   $("#search, #search1").click(function(){
      $(".search-toggle").slideToggle('fast');
  });
   // Search Toggle End


// Dropdown
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("fast");
            $(this).toggleClass('open');
        }
        );
});
// Dropdown End



// News
$('#services').owlCarousel({
    loop:true,
    dots:false,
    margin:30,
    autoplay:true,
    autoplayTimeout:3000,
    nav:true,
    navText : ["<i class='las la-angle-left'></i>","<i class='las la-angle-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        992:{
            items:3
        }
    }
})
// News End



// News
$('#partner').owlCarousel({
    loop:true,
    dots:false,
    margin:20,
    autoplay:false,
    autoplayTimeout:3000,
    nav:false,
    navText : ["<i class='las la-angle-left'></i>","<i class='las la-angle-right'></i>"],
    responsive:{
        0:{
            items:2
        },
        768:{
            items:3
        },
        992:{
            items:5
        }
    }
})
// News End



// Header active
var yourNavigation = $(".header");
var stickyDiv = "active";
var yourHeader = $('.header-part').height();

$(window).scroll(function() {
    if( $(this).scrollTop() > yourHeader ) {
        yourNavigation.addClass(stickyDiv);
    } else {
        yourNavigation.removeClass(stickyDiv);
    }
});

// Header Active End


// Scroll Top Js
$(function(){
        // Scroll Event
        $(window).on('scroll', function(){
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $('.go-top').addClass('active');
            if (scrolled < 600) $('.go-top').removeClass('active');
        });
        // Click Event
        $('.go-top').on('click', function() {
            $("html, body").animate({ scrollTop: "0" },  300);
        });
    });

    // WOW Animation JS
    if($('.wow').length){
        var wow = new WOW({
            mobile: false
        });
        wow.init();
    }
// Scroll Top Js ENd



// News
$('#gallery').owlCarousel({
    loop:true,
    dots:false,
    margin:30,
    autoplay:true,
    autoplayTimeout:3000,
    nav:true,
    navText : ["<i class='las la-angle-left'></i>","<i class='las la-angle-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        992:{
            items:1
        }
    }
})
// News End



// H-Gallery
$('#h-gallery').owlCarousel({
    loop:true,
    dots:false,
    margin:30,
    autoplay:true,
    autoplayTimeout:3000,
    nav:false,
    navText : ["<i class='las la-angle-left'></i>","<i class='las la-angle-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:3
        },
        992:{
            items:4
        }
    }
})
// H-Gallery End



// Thumbnail Slider
$('#image-gallery').lightSlider({
    gallery: true,
    item: 1,
    thumbItem: 6,
    slideMargin: 0,
    thumbMargin: 10,
    speed: 500,
    auto: true,
    loop: true,
    keyPress: true,
    controls: true,
    enableTouch: true,
    verticalHeight: 450,
    prevHtml: '<i class="fas fa-angle-left"></i>',
    nextHtml: '<i class="fas fa-angle-right"></i>',
    responsive: [{
        breakpoint: 767,
        settings: {
            thumbItem: 4,
        }
    },
    {
        breakpoint: 575,
        settings: {
            thumbItem: 3,
        }
    }
    ],
    onSliderLoad: function() {
        $('#image-gallery').removeClass('cS-hidden');
    }
});

    // Thumbnail Slider End




    // Gallery
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
  });
// Gallery End



// Date Picker
$( function() {
    $( "#datepicker" ).datepicker();
} );
// Date Picker End


// Header active
var yourNavigation = $("#header");
stickyDiv = "active";
yourHeader = $('#header').height();

$(window).scroll(function() {
    if( $(this).scrollTop() > yourHeader ) {
        yourNavigation.addClass(stickyDiv);
    } else {
        yourNavigation.removeClass(stickyDiv);
    }
});

// Header Active End


// Scroll Top Js
$(function(){
        // Scroll Event
        $(window).on('scroll', function(){
            var scrolled = $(window).scrollTop();
            if (scrolled > 50) $('.go-top').addClass('active');
            if (scrolled < 50) $('.go-top').removeClass('active');
        });
        // Click Event
        $('.go-top').on('click', function() {
            $("html, body").animate({ scrollTop: "0" },  50);
        });
    });

    // WOW Animation JS
    if($('.wow').length){
        var wow = new WOW({
            mobile: false
        });
        wow.init();
    }
// Scroll Top Js ENd



// Skip Ads
$('.skip-ads-btn').on('click', function() {
    $('.skip-ads-col').addClass('active');
});

$(function() {
    setTimeout(function() { $(".skip-ads-col").fadeOut(1000); }, 10000)

})
    // Skip Ads End



    // Animation
    AOS.init();
    // Animation End


// Auto Scroll
$(document).ready(function(){
    $('#slider').bxSlider({
        ticker: true,
        tickerSpeed: 3000,
        tickerHover: true,
    });
});
// Auto Scroll End



// jQuery Ripples
if (typeof $.fn.ripples == 'function') {
    try {
        $('.ripple').ripples({
            resolution: 500,
            perturbance: 0.04
        });
    } catch (e) {
        $('.error').show().text(e);
    }
}
        // Jquery Ripple End




 // Particles Js
 particlesJS("particles-js", {
    particles: {
        number: { value: 160, density: { enable: true, value_area: 800 } },
        color: { value: "#ffffff" },
        shape: { type: "star", stroke: { width: 0, color: "#000000" }, polygon: { nb_sides: 5 }, image: { src: "img/github.svg", width: 100, height: 100 } },
        opacity: { value: 1, random: true, anim: { enable: true, speed: 1, opacity_min: 0, sync: false } },
        size: { value: 3, random: true, anim: { enable: false, speed: 4, size_min: 0.3, sync: false } },
        line_linked: { enable: false, distance: 150, color: "#ffffff", opacity: 0.4, width: 1 },
        move: { enable: true, speed: 1, direction: "none", random: true, straight: false, out_mode: "out", bounce: false, attract: { enable: false, rotateX: 600, rotateY: 600 } },
    },
    interactivity: {
        detect_on: "canvas",
        events: { onhover: { enable: true, mode: "bubble" }, onclick: { enable: true, mode: "repulse" }, resize: true },
        modes: {
            grab: { distance: 400, line_linked: { opacity: 1 } },
            bubble: { distance: 250, size: 0, duration: 2, opacity: 0, speed: 3 },
            repulse: { distance: 400, duration: 0.4 },
            push: { particles_nb: 4 },
            remove: { particles_nb: 2 },
        },
    },
    retina_detect: true,
});
 var count_particles, stats, update;
 stats = new Stats();
 stats.setMode(0);
 stats.domElement.style.position = "absolute";
 stats.domElement.style.left = "0px";
 stats.domElement.style.top = "0px";
 document.body.appendChild(stats.domElement);
 count_particles = document.querySelector(".js-count-particles");
 update = function () {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
        count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
};
requestAnimationFrame(update);

// Particles Js End





});
