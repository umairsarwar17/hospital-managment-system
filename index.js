let menu = document.querySelector('#menu');
let navBar = document.querySelector('.navbar');
menu.onclick = () => {
  navBar.classList.toggle('active');
}
let lastScrollTop = 0;
window.addEventListener("scroll", function () {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  if (window.innerWidth < 750) {
    if (currentScroll > lastScrollTop) {
      navBar.classList.remove('active');
      menu.style.display = "block";
    } else {
      menu.style.display = "block";
    }
  }
  lastScrollTop = currentScroll;
}, false);
