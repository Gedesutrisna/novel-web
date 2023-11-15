var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 100,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-after",
        prevEl: ".swiper-button-before",
      },
  });

  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-after-2",
        prevEl: ".swiper-button-before-2",
      },
  });