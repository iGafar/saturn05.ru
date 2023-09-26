const navList = document.getElementsByClassName(
  "header-center__nav-list-item"
)[2];
const intelligence = document.getElementsByClassName("header-center__nav__intelligence")[0]

navList.addEventListener("mouseover", function () {
  intelligence.classList.add("header-center__nav__intelligence-active");
});

intelligence.addEventListener("mouseout", function () {
  intelligence.classList.remove("header-center__nav__intelligence-active");
});

window.addEventListener("click", function() {
  intelligence.classList.remove("header-center__nav__intelligence-active");
})

const swiper = new Swiper('.swiper', {
  speed: 400,
  spaceBetween: 100,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});