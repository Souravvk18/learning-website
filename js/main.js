// ------------------menu icon for mobile------

let menu = document.querySelector('#menu');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');

}

window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}


// ----------slider section---------------

let slides = document.querySelectorAll('.slide-container');
let index = 0;

//next function

function next() {
  slides[index].classList.remove('active');
  index = (index + 1) % slides.length;
  slides[index].classList.add('active');
}

//preview function

function prev() {
  slides[index].classList.remove('active');
  index = (index - 1 + slides.length) % slides.length;
  slides[index].classList.add('active');
}

//autoplay
setInterval(next, 7000); //slide changes every 7sec
