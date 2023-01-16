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

//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
scrollFunction();
};

function scrollFunction() {
if (
document.body.scrollTop > 20 ||
document.documentElement.scrollTop > 20
) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}

// Index 
let BOXES = document.querySelectorAll('#boxEs > *');
function handleIntersection2(entries2){
    entries2.map((entry, index) => {
        if(entry.isIntersecting){
            entry.target.classList.remove('opacity-0');
            entry.target.classList.add('slideFromDown');
            entry.target.style.animationDelay = `${index++}s`;                  //ELIMINA QUESTA RIGA SE NON VUOI
        }                                                                       //L’EFFETTO RITARDO TRA
    });                                                                         //UN’ANIMAZIONE E L’ALTRA.
}
let observerBoxEs = new IntersectionObserver(handleIntersection2);
BOXES.forEach(element => {
    observerBoxEs.observe(element);
});
