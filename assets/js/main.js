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

let galleryItems;
let galleryCount;
if (document.querySelector(".gallery__list") != null) {
  galleryItems = document.querySelector(".gallery__list").childElementCount;
  galleryCount = document.querySelector(".gallery-count");
  galleryCount.innerHTML = galleryItems;
}

const burger = document.querySelector(".burger");
const burgerLine1 = document.getElementsByClassName("burger-item")[0];
const burgerLine2 = document.getElementsByClassName("burger-item")[1];
const burgerLine3 = document.getElementsByClassName("burger-item")[2];
const menu = document.getElementsByClassName("header-center__nav")[0];

console.log(menu.style.left === "0px");

burger.addEventListener("click", function () {
  if (menu.style.left === "0px") {
    menu.style.left = "-100%";
    burgerLine2.style.transform = "translate(0)";
    burgerLine3.style.transform = "translate(0)";
  } else {
    menu.style.left = "0px";
    burgerLine2.style.transform = "translate(-5px)";
    burgerLine3.style.transform = "translate(-10px)";
  }
});

const galleryItem = document.querySelectorAll(".gallery__list-item");

for (let i = 0; i < galleryItem.length; i++) {
  galleryItem[i].addEventListener("click", function () {
    document.querySelector(".pop-up").style.display = "block";
    galleryItem[i].classList.add('active');
  });
}



document.querySelector('.pop-up span').onclick = () => {
  document.querySelector(".pop-up").style.display = "none";
  for (let i = 0; i < galleryItem.length; i++) {
    galleryItem[i].classList.remove('active');
  }
}