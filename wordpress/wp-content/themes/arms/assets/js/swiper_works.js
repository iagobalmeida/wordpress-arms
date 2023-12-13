import Swiper from "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs";

// const slides = [
//   { title: "somos", classList: "light" },
//   { title: "capricho", classList: "dark" },
//   { title: "método", classList: "dark" },
//   { title: "conta", classList: "light" },
// ];

const swiperSettings = {
  init: false,
  direction: "vertical",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
    renderBullet: function (index, className) {
      return (
        '<span class="' +
        className +
        '"><p>' +
        categories[index].title +
        "</p></span>"
      );
    },
  },
};

const initializeSwiper = (categories, swiperSettings) => {
  const swiper = new Swiper(".swiper", swiperSettings);
  swiper.init();

  document.querySelector('.swiper').classList.add('hidden');
}

initializeSwiper(categories, swiperSettings);
