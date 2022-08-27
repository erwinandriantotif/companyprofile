(function ($) {
    "use strict";
    // for sticky navbar
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $(".navbar-area").addClass("sticky");
        } else {
            $(".navbar-area").removeClass("sticky");
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $(".navbar-area .main-nav").addClass("sticky");
        } else {
            $(".navbar-area .main-nav").removeClass("sticky");
        }
    });

    // Mean Menu
    $(".mean-menu").meanmenu({
        meanScreenWidth: "1199",
    });

    // popup button
    $('.popup-button').click(function () {
        $('.popup').css('visibility', 'visible');
        $('.popup-content').addClass('hi');
    })
    $('#popup-close').click(function () {
        $('.popup').css('visibility', 'hidden');
        $('.popup-content').removeClass('hi');
    })

    $(".team-slider-area").owlCarousel({
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        dots: false,
        margin: 30,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          992: {
            items: 3,
          }
        },
    });
    
    $(".testimonial-slider-area").owlCarousel({
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        dots: false,
        margin: 30,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        responsive: {
          0: {
            items: 1,
          },
          992: {
            items: 2,
          }
        },
      });
    
      $(".brand-slider-area").owlCarousel({
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        dots: false,
        nav: false,
        responsive: {
          0: {
                items: 2,
                margin: 30,
            },
            600: {
                items: 3,
                margin: 70,
            },
            992: {
                items: 4,
                margin: 70,
            },
            1200: {
                items: 5,
                margin: 70,
            }
        },
    });
    
    $(".case-study-slider").owlCarousel({
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        dots: false,
        margin: 30,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          992: {
            items: 3,
          }
        },
    });

    $(".service-slider-area-3").owlCarousel({
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        dots: false,
        margin: 30,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          992: {
            items: 3,
          }
        },
    });

    $(".testimonial-slider-area-3").owlCarousel({
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        dots: false,
        margin: 30,
        nav: true,
        items: 1,
        navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>']
    });
    $(".banner-slider-area-3").owlCarousel({
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        dots: false,
        nav: true,
        items: 1,
        navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>']
    });
    
    // pricing tab
    let el = document.getElementById("filt-monthly");
        if (el) {
            let e = document.getElementById("filt-monthly"),
                d = document.getElementById("filt-yearly"),
                t = document.getElementById("switcher"),
                m = document.getElementById("monthly"),
                y = document.getElementById("yearly");
            e.addEventListener("click", function () {
                t.checked = false;
                e.classList.add("toggler--is-active");
                d.classList.remove("toggler--is-active");
                m.classList.remove("hide");
                y.classList.add("hide");
            });
            d.addEventListener("click", function () {
                t.checked = true;
                d.classList.add("toggler--is-active");
                e.classList.remove("toggler--is-active");
                m.classList.add("hide");
                y.classList.remove("hide");
            });
            t.addEventListener("click", function () {
                d.classList.toggle("toggler--is-active");
                e.classList.toggle("toggler--is-active");
                m.classList.toggle("hide");
                y.classList.toggle("hide");
            });
        }


    $(".video-popup").magnificPopup({
        type: "iframe",
    });
    //   $(".image-popup").magnificPopup({
    //     type: "image",
    //   });
    //   $('.gallery-item').magnificPopup({
    //     type: 'image',
    //     gallery:{
    //       enabled:true
    //     }
    //   });

    // language select
    $(".language-select select").niceSelect();

    // Go to Top
    $(function () {
        // Scroll Event
        $(window).on("scroll", function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $(".go-top").addClass("active");
            if (scrolled < 600) $(".go-top").removeClass("active");
        });
        // Click Event
        $(".go-top").on("click", function () {
            $("html, body").animate({ scrollTop: "0" }, 500);
        });
    });


    $(".odometer").appear(function (e) {
        var odo = $(".odometer");
        odo.each(function () {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });

    // WOW Animation JS
    if ($(".wow").length) {
        var wow = new WOW({
            mobile: false,
        });
        wow.init();
    }

})(jQuery);