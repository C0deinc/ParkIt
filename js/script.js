
var menu = document.getElementById("menu");

window.onscroll = function(){
    if(window.pageYOffset >= menu.offsetTop){
        navbar.classList.add("sticky");
    }
    else{
        navbar.classList.remove("sticky");
    }
}

const navEl = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY >= 56) {
        navEl.classList.add('navbar-scrolled');
    } else  if (window.scrollY < 56){
        navEl.classList.remove('navbar-scrolled');
    }
});
