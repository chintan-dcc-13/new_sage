import domReady from '@roots/sage/client/dom-ready';
import 'jquery';
import lozad from 'lozad';
import Swiper from 'swiper/bundle';
import lity from '../../node_modules/lity/dist/lity.min.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...

  jQuery(document).ready(function ($) {
    (function ($) {
      $.fn.menumaker = function (options) {
        var cssmenu = $(this),
          settings = $.extend(
            {
              format: 'dropdown',
              sticky: false,
            },
            options
          );
        return this.each(function () {
          $(this)
            .find('.navbar-toggler')
            .on('click', function () {
              $(this).toggleClass('menu-opened');
              var mainmenu = $(this).next('#menu-main-menu');
              if (mainmenu.hasClass('open')) {
                mainmenu.slideToggle().removeClass('open');
              } else {
                mainmenu.slideToggle().addClass('open');
                if (settings.format === 'dropdown') {
                  mainmenu.find('#menu-main-menu').show();
                }
              }
            });
          cssmenu.find('li ul.sub-menu').parent().addClass('has-sub');
          function multiTg() {
            cssmenu
              .find('.has-sub')
              .prepend(
                '<span class="submenu-button"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M-3.49691e-07 8C-1.56561e-07 3.58171 3.58171 1.56561e-07 8 3.49691e-07C12.4182 5.42816e-07 16 3.58171 16 8C16 12.4183 12.4182 16 8 16C3.58171 16 -5.42821e-07 12.4183 -3.49691e-07 8ZM8.54181 10.4378C8.5808 10.3988 8.61376 10.356 8.6424 10.3115L11.6448 7.30907C11.7907 7.16325 11.8636 6.97211 11.8636 6.78096C11.8636 6.58981 11.7907 6.39877 11.6448 6.25285C11.3531 5.96112 10.88 5.96112 10.5884 6.25285L8.00085 8.84L5.42672 6.26587C5.13483 5.97413 4.66192 5.97413 4.37029 6.26587C4.07856 6.5576 4.07872 7.03056 4.37013 7.32229L7.35909 10.3114C7.38773 10.3559 7.42064 10.3987 7.45968 10.4375C7.6088 10.5867 7.80523 10.6586 8.0008 10.6553C8.19627 10.6588 8.39259 10.587 8.54181 10.4378Z"fill="#38B157"/></svg></span>'
              );
            cssmenu.find('.submenu-button').on('click', function () {
              if ($(this).hasClass('submenu-opened')) {
                cssmenu.find('.submenu-button').removeClass('submenu-opened');
              } else {
                cssmenu.find('.submenu-button').removeClass('submenu-opened');
                $(this).addClass('submenu-opened');
              }

              if ($(this).siblings('ul').hasClass('open')) {
                cssmenu
                  .find('.submenu-button')
                  .siblings('ul')
                  .removeClass('open');
                cssmenu
                  .find('.submenu-button')
                  .siblings('a')
                  .removeClass('active');
              } else {
                cssmenu
                  .find('.submenu-button')
                  .siblings('ul')
                  .removeClass('open');
                cssmenu
                  .find('.submenu-button')
                  .siblings('a')
                  .removeClass('active');
                $(this).siblings('ul').addClass('open');
                $(this).siblings('a').addClass('active');
              }
            });
            cssmenu.find('a').on('click', function () {
              if ($(this).attr('href') == '#') {
                $(this).siblings('span').toggleClass('submenu-opened');
                if ($(this).siblings('ul').hasClass('open')) {
                  $(this).siblings('ul').removeClass('open');
                } else {
                  $(this).siblings('ul').addClass('open');
                }
              }
            });
          }
          if (settings.format === 'multitoggle') multiTg();
          else cssmenu.addClass('dropdown');
          if (settings.sticky === true) cssmenu.css('position', 'fixed');
          function resizeFix() {
            var mediasize = 1199.9;
            if ($(window).width() > mediasize) {
              cssmenu.find('ul').addClass('open');
            }
            if ($(window).width() <= mediasize) {
              cssmenu.find('ul').removeClass('open');
            }
          }
          resizeFix();
          return $(window).on('resize', resizeFix);
        });
      };
    })($);

    const observer = lozad();
    observer.observe();

    $(document).on('click', '[data-lightbox]', lity);

    $('img').on('dragstart', function (e) {
      e.preventDefault();
    });

    // Sticky Header
    $(window).scroll(function () {
      if ($(window).scrollTop() >= 300) {
        $('.header').addClass('is-sticky');
      } else {
        $('.header').removeClass('is-sticky');
      }
    });

    // Search
    function searchSubmit(v, c) {
      if (
        $('.' + c + ' #search').val() != '' &&
        $('.search-bar, .navbar').hasClass('active') &&
        v != $('.' + c + ' #search').val()
      ) {
        $('.' + c).submit();
      }
    }

    var searchVal = $('.search-form #search').val();
    $('.btn-search').click(function () {
      searchSubmit(searchVal, 'search-form');
      $('.search-bar').toggleClass('active');
    });

    var searchMVal = $('.search-form-mobile #search').val();
    $('.btn-search-mobile').click(function () {
      searchSubmit(searchMVal, 'search-form-mobile');
    });

    $('.btn-close-search').click(function () {
      $('.search-bar').removeClass('active');
    });

    /*Mobile Menu*/
    $('.navbar-toggler').click(function () {
      $('.navbar').toggleClass('active');
      $('body').toggleClass('menu-open');
    });

    $('.navbar').menumaker({
      title: 'Menu',
      format: 'multitoggle',
    });

    if ($('.banner-wrapper').length) {
      $(window)
        .resize(function () {
          $('.banner-details').css('padding-top', $('.header').height());
        })
        .resize();
    }

    // if ($('.booms-wrapper').length) {
    //   $('.tabs ul li a').click(function(e) {
    //     e.preventDefault(); // Prevent default behavior of anchor tag
    //     $(this).addClass('active').parent().siblings().children('a').removeClass('active');
    //   });
    // }

    // Video play btn
    if ($('.video_wrapper').length) {
      const video = document.getElementById('video');
      const circlePlayButton = document.getElementById('circle-play-b');

      function togglePlay() {
        if (video.paused || video.ended) {
          video.play();
        } else {
          video.pause();
        }
      }

      circlePlayButton.addEventListener('click', togglePlay);
      video.addEventListener('playing', function () {
        circlePlayButton.style.opacity = 1;
      });
      video.addEventListener('pause', function () {
        circlePlayButton.style.opacity = 1;
      });
    }
    $(window)
      .resize(function () {
        $('.banner-details').css('padding-top', $('.header').height());
      })
      .resize();
    if ($('.advantages').length) {
      var advantagesslide;
      function initSwiper() {
        if (advantagesslide) {
          advantagesslide.destroy();
        }
        advantagesslide = new Swiper('.advantages-slider', {
          grabCursor: true,
          scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
            draggable: true,
          },
          breakpoints: {
            1366: {
              slidesPerView: 5,
              spaceBetween: 40,
              scrollbar: false,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 40,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 40,
              centeredSlides: true,
            },
            640: {
              slidesPerView: 1.5,
              spaceBetween: 40,
              centeredSlides: true,
            },
            320: {
              slidesPerView: 1.5,
              spaceBetween: 40,
              centeredSlides: true,
            },
          },
        });
      }
      initSwiper();
      window.addEventListener('resize', function () {
        initSwiper();
      });
    }
    if ($('.irrigation-box-wrapper').length) {
      var irrigationslide;

      function initSwiper() {
        var screenWidth = window.innerWidth;

        var slidesPerView = screenWidth >= 1024 ? 4 : 2;

        if (irrigationslide) {
          irrigationslide.destroy();
        }
        irrigationslide = new Swiper('.irrigation-slider ', {
          slidesPerView: slidesPerView,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          loop: false,
          effect: 'coverflow',
          grabCursor: true,
          spaceBetween: 0,
          breakpoints: {
            1024: {
              slidesPerView: 3,
              spaceBetween: 80,
              coverflowEffect: false,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 40,
              coverflowEffect: false,
            },
            640: {
              slidesPerView: 1.1,
              centeredSlides: true,
              scale: 1,
              coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
              },
            },
            320: {
              slidesPerView: 1.2,
              centeredSlides: true,
              coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
              },
            },
          },
        });
      }

      // Initialize Swiper on page load
      window.addEventListener('load', function () {
        initSwiper();
      });

      // Reinitialize Swiper on window resize
      window.addEventListener('resize', function () {
        initSwiper();
      });
    }
    if ($('.footer-gallery').length) {
      var galleryslide = new Swiper('.footer-image-slider', {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 40,
        centeredSlides: true,
        speed: 1000,
        freeMode: true,
        autoplay: {
          delay: 0,
        },
        disableOnInteraction: false,
        breakpoints: {
          320: {
            slidesPerView: 1.5,
            spaceBetween: 40,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5.5,
            spaceBetween: 40,
          },
        },
      });
    }
    var galleryslide = new Swiper('.announcement-bar', {
      loop: true,
      slidesPerView: '1',
      spaceBetween: 0,
      centeredSlides: false,
      speed: 3000,
      freeMode: true,
      autoplay: {
        delay: 0,
      },
      disableOnInteraction: false,
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
      },
    });
    var swiper = new Swiper('.pdp-slider-thumb', {
      spaceBetween: 30,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper('.pdp-slider', {
      spaceBetween: 1,
      slidesPerView: 1,
      speed: 2000,
      // autoplay: {
      //   delay: 3000,
      //   disableOnInteraction: false,
      // },
      thumbs: {
        swiper: swiper,
      },
    });
    var galleryslide = new Swiper('.brochure-slider', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 40,
      centeredSlides: false,
      speed: 2000,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 1.5,
          spaceBetween: 20,
          centeredSlides: true,
          loop: true,
        },
        640: {
          slidesPerView: 1.5,
          spaceBetween: 22,
          centeredSlides: true,
          loop: true,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 45,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 90,
          centeredSlides: true,
        },
      },
    });
    // Load More
    if ($('.collection-wrapper').length) {
      $('.collection-wrapper').each(function () {
        var $section = $(this);
        var $products = $section.find('.product_item');

        $products.hide().slice(0, 9).show();

        if ($products.length > 9) {
          $section.find('.product-loadmore').show();
        } else {
          $section.find('.product-loadmore').hide();
        }

        $section.find('.product-loadmore .btn-custom').on('click', function () {
          $products.filter(':hidden').slice(0, 3).fadeIn();
          if ($products.filter(':hidden').length === 0) {
            $(this).fadeOut();
          }
        });
      });
    }
    if ($('.product-wrapper').length) {
      var productslide;
      function initSwiper() {
        if (productslide) {
          productslide.destroy();
        }
        productslide = new Swiper('.product-slider', {
          grabCursor: true,
          scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
            draggable: true,
          },
          breakpoints: {
            1200: {
              slidesPerView: 5,
              spaceBetween: 40,
              scrollbar: false,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 40,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 40,
              centeredSlides: true,
            },
            640: {
              slidesPerView: 1.5,
              spaceBetween: 20,
              centeredSlides: true,
            },
            320: {
              slidesPerView: 1.5,
              spaceBetween: 20,
              centeredSlides: true,
            },
          },
        });
      }
      initSwiper();
      window.addEventListener('resize', function () {
        initSwiper();
      });
    }
    var partnersslide;
      function initSwiper() {
        if (partnersslide) {
          partnersslide.destroy();
        }
        partnersslide = new Swiper('.partners-slider', {
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          grabCursor: true,
          breakpoints: {
            1366: {
              slidesPerView: 4,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 40,
              autoplay: {
                delay: 3000,
                disableOnInteraction: false,
              },
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 40,
              centeredSlides: false,
              autoplay: {
                delay: 3000,
                disableOnInteraction: false,
              },
            },
            640: {
              slidesPerView: 1.5,
              spaceBetween: 40,
              centeredSlides: true,
              autoplay: {
                delay: 3000,
                disableOnInteraction: false,
              },
            },
            376: {
              slidesPerView: 1.2,
              spaceBetween: 20,
              centeredSlides: true,
              autoplay: {
                delay: 3000,
                disableOnInteraction: false,
              },
            },
            320: {
              slidesPerView: 1,
              spaceBetween: 15,
              centeredSlides: true,
              autoplay: {
                delay: 3000,
                disableOnInteraction: false,
              },
            },
          },
        });
      }
      initSwiper();
      window.addEventListener('resize', function () {
        initSwiper();
      });
      $('.toggle-content').hide();
    $('.toggle-icon, .toggle-title').click(function (event) {
      event.stopPropagation();
      var $toggleItem = $(this).closest('.toggle-item');
      $toggleItem.find('.toggle-content').slideToggle();
      $toggleItem.find('.toggle-icon').toggleClass('active');
      $toggleItem.find('.toggle-icon img').toggleClass('caret-right');
    });
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
