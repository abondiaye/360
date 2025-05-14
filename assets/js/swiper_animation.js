import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

document.addEventListener('DOMContentLoaded', () => {
  const swiper = new Swiper(".swiper", {
    effect: "cards",
    grabCursor: true,
    initialSlide: 2,
    speed: 500,
    loop: true,
    rotate: true,
    mousewheel: {
      invert: false,
    },
  });
});