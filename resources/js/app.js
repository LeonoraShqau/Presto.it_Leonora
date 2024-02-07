import './bootstrap';
import 'bootstrap';
import './script';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
      invert: false,
    },
    // autoHeight: true,
    pagination: {
      el: '.blog-slider__pagination',
      clickable: true,
    }
  });