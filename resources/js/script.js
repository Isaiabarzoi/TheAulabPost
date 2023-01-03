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

