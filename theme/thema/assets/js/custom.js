$(document).ready(function() {
    "use strict";
    var map;
    var top_bar;
    var nav_bar;
    var secondary_bar;
    /*----------------------------------------------
	 -----------Mobile Nav Function  --------------------
	 -------------------------------------------------*/
	 var menu_js = $("#menu");
    menu_js.on('click', function() {
        if ($(window).width() <= 767) {
            $('.navigation').slideToggle('normal');
        }
        return false;
    })
    $('.navigation>ul> li >a').on('click', function() {
        if ($(window).width() <= 767) {
            $('.navigation>ul> li').removeClass('on');
            $('.navigation>ul> li> ul').slideUp('normal');
            if ($(this).next().next('ul').is(':hidden') == true) {
                $(this).parent('li').addClass('on');
                $(this).next().next('ul').slideDown('normal');
            }
        }
    });
    /*----------------------------------------------
     -----------Submenu Function  --------------------
     -------------------------------------------------*/
    $('.sub-menu >a').on('click', function() {
        if ($(window).width() <= 767) {
            $('.sub-menu').removeClass('on');
            $('.sub-menu> ul').slideUp('normal');
            if ($(this).next().next('ul').is(':hidden') == true) {
                $(this).parent('li').addClass('on');
                $(this).next().next('ul').slideDown('normal');
            }
        }
    });
    /*----------------------------------------------
     -----------Carousel Function  --------------------
     -------------------------------------------------*/
    var project_owl = $("#project");
    project_owl.owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 4
            }
        },
        navText: ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]
    })
	 //	Releted Project slider
    var block_slider = $(".block_slider");
	block_slider.owlCarousel({
	loop:true,
    nav:true,
    dots:false,
    margin:30,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:2
        },
         992:{
            items:2
        },
         1200:{
            items:2
        }
    },
    navText:["<i class='ion-ios-arrow-back'></i>","<i class='ion-ios-arrow-forward'></i>"]
		
		
	})
    //	Releted Project slider
    var related_project = $("#related-project");
    related_project.owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        },
        navText: ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]


    })
    //OwlCarousel Silder
    var block_slider = $("#related-project");
    block_slider.owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        },
        navText: ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]
    })
	
    //OwlCarousel Silder
    var team_member = $("#team-member");
    team_member.owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            992: {
                items: 3,
                nav: true
            },
            1200: {
                items: 4,
                nav: false
            }
        },
        navText: ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]


    })
    //OwlCarousel Silder
    var testimonial = $("#testimonial");
    testimonial.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        center: true,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 3
            },
            992: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    })
    //OwlCarousel Silder
    var testimonial_2 = $("#testimonial-2");
    testimonial_2.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        center: true,
        navText: ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    })
    //OwlCarousel Silder
    var blog_carousel = $("#blog-carousel");
    blog_carousel.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        //responsiveClass:true,
        center: true,
        responsive: {
            0: {
                items: 1,

            },
            600: {
                items: 1,

            },
            1000: {
                items: 1


            }
        },
        navText: ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]
    })
    //==============Gallery=================
    var gallery_js = $('#gallery');
    if (gallery_js.length) {
        $(".fancylight").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            helpers: {
                media: {}
            }
        });
    }
    /* Map address pin function*/
    var map_js = $('#map');
    if (map_js.length) {
        var myCenter = new google.maps.LatLng(51.528308, -0.3817765);


        google.maps.event.addDomListener(window, 'load', initialize);
    }
    $(window).load(function() {
        //===============Loader Function========
        $("#preloader").fadeOut();
        //=============== filter Function========
        if ($('#isotope').length) {
            // init Isotope
            var $grid = $('.isotope').isotope({
                itemSelector: 'li	',
                percentPosition: true,
                layoutMode: 'fitRows',
                fitRows: {
                    gutter: 0
                }
            });
            // filter items on button click
            $('.filter-button-group').on('click', 'a', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
                var text_value = $(this).text();
                $('.doctor-specialist span').text(text_value);
            });
        }
        //=============== filter Function========
        if ($('#blog-box').length) {
            // init Isotope
            var $grid = $('.isotope').isotope({
                itemSelector: 'li	',
                percentPosition: true,
                //layoutMode : 'fitRows',
                masonry: {
                    columnWidth: '.grid-sizer'
                }
            });
        }

    });
    //===============header Function============
    var top_bar = $('#top-bar').height();
    var nav_bar = $('.nav-wrap').height();
    var secondary_bar = $('.secondary-header').height();
    var $headerOne = $('.header-1');
    var $headerTwo = $('.header-2');
    if ($('.header-style').hasClass('fix-header')) {
        $('body').addClass('p-top');
    }
    $(window).scroll(function() {
        if ($headerTwo.hasClass('fix-header')) {

            if ($(window).scrollTop() >= secondary_bar + top_bar) {
                $headerTwo.addClass('fix');

            } else {
                $headerTwo.removeClass('fix');
            }

        }

        if ($headerOne.hasClass('fix-header')) {
            if ($(window).scrollTop() >= top_bar) {
                $headerOne.addClass('fix');
            } else {
                $headerOne.removeClass('fix');
            }
        }

    });




});
var myCenter = new google.maps.LatLng(51.528308, -0.3817765);

function initialize() {
    var mapProp = {
        center: myCenter,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("map"), mapProp);

    var marker = new google.maps.Marker({
        position: myCenter,
        icon: {
            url: 'assets/images/map-pin.png',
            size: new google.maps.Size(90, 111), //marker image size
            origin: new google.maps.Point(0, 0), // marker origin
            anchor: new google.maps.Point(35, 86) // X-axis value (35, half of marker width) and 86 is Y-axis value (height of the marker).
        }
    });

    marker.setMap(map);

}

function reloadStylesheets() {
    var queryString = 'reload=' + new Date().getTime();
    $('link[rel="stylesheet"]').each(function() {
        if (this.href.indexOf('?') !== -1) {
            this.href = this.href + '&' + queryString;
        } else {
            this.href = this.href + '?' + queryString;
        }
    });
}