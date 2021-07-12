let srcs = [];

let img = document.querySelectorAll('img');
for (let i = 1; i < img.length - 1; i++) {
    srcs.push(img[i]);
}

let container = document.querySelector('.full');
let image = document.querySelector('.full-img');
function fullScreen(e) {
    //container.style.cssText = "display:block";
    container.classList.remove('unactive');
    container.classList.add('active');
    let el = e ? e.target : window.event.srcElement;
    let src = el.getAttribute('src');
    image.src = src; 
}

document.querySelector('.full-cross').addEventListener('onclick',close = function(){
    container.classList.add('unactive');
    container.classList.remove('active');
});

/*function close(){
    container.classList.remove('active');
    container.classList.add('unactive');
}*/




