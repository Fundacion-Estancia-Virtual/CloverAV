
var mySwiper = new Swiper ('.swiper', {
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
speed: 400,
spaceBetween: 50,
initialSlide: 0,
//truewrapper adoptsheight of active slide
autoHeight: true,
// Optional parameters
direction: 'horizontal',
loop: true,
// delay between transitions in ms
autoplay: 5000,
autoplayStopOnLast: false, // loop false also
// If we need pagination
pagination: '.swiper-pagination',
paginationType: "bullets",

// Navigation arrows
nextButton: '.swiper-button-next',
prevButton: '.swiper-button-prev',

// And if we need scrollbar
//scrollbar: '.swiper-scrollbar',
// "slide", "fade", "cube", "coverflow" or "flip"
effect: 'slide',
// Distance between slides in px.
//
centeredSlides: true,
//
slidesOffsetBefore: 0,
//
grabCursor: false,
// Default parameters
slidesPerView: 1,
spaceBetween: 50,
// Responsive breakpoints
breakpoints: {
  // when window width is >= 320px
  320: {
    slidesPerView: 2,
    spaceBetween: 20
  },
  // when window width is >= 480px
  480: {
    slidesPerView: 3,
    spaceBetween: 30
  },
  // when window width is >= 640px
  640: {
    slidesPerView: 4,
    spaceBetween: 40
  }
}
})
