let height = window.innerHeight;
let button = document.querySelector('.up');
window.onscroll = function () {
    if (window.pageYOffset > height / 5) {
        button.style.cssText = 'display:block;';
    }

    else{
        toUp();
    }
}

function toUp() {
    button.style.cssText = 'display:none;';
}