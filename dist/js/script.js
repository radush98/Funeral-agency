let burger = document.querySelector('.top-burger');
let elems = document.querySelectorAll('.top-burger, .menu, .header, .top');

function burger_click() {
    for (i = 0; i < elems.length; i++) {
        elems[i].classList.toggle('active');
    }
}
