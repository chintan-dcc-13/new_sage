import domReady from '@roots/sage/client/dom-ready';
import Swiper from 'swiper/bundle';
import jQuery from 'jquery';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...

  jQuery(document).ready(function ($) {
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
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
