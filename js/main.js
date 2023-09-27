const navListIntelligence = document.getElementsByClassName(
  "header-center__nav-list-item"
)[2];
const navListServices = document.getElementsByClassName(
  "header-center__nav-list-item"
)[3];
const intelligence = document.getElementsByClassName(
  "header-center__nav__intelligence"
)[0];
const services = document.querySelector(".header-center__nav__services");

function addList(item, list) {
  item.addEventListener("mouseover", function () {
    list.classList.add("header-center__nav-active");
  });
}

function removeList(list) {
  list.addEventListener("mouseout", function () {
    list.classList.remove("header-center__nav-active");
  });
  window.addEventListener("click", function () {
    list.classList.remove("header-center__nav-active");
  });
}

addList(navListIntelligence, intelligence);
addList(navListServices, services);
removeList(intelligence);
removeList(services);

const swiper = new Swiper(".swiper", {
  speed: 400,
  spaceBetween: 100,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
