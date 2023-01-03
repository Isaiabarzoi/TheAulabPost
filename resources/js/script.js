//Sticky navbar
let navbar = document.querySelector('.nav-bar');

document.addEventListener('scroll', () => {
    let scrollTop = window.scrollY;
    // console.log(scrollTop);

    if (scroll) {
        navbar.classList.add('sticky-top');
    } else {
        navbar.classList.remove('sticky-top');
    }
})

//Inizialize swiper
let swiper = new Swiper(".mySwiper", {
    speed: 600,
    parallax: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });