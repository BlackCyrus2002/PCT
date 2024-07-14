const photo1 = document.querySelector(".photo1");
const photo2 = document.querySelector(".photo2");

window.addEventListener("load", function () {
  photo1.classList.add("active");
  photo2.classList.add("active");
});

const carouselItems = document.querySelectorAll(".carousel-item");
const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");

let currentIndex = 0;

function showItem(index) {
  carouselItems.forEach((item, i) => {
    if (i === index) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
}

function prevItem() {
  currentIndex =
    (currentIndex - 1 + carouselItems.length) % carouselItems.length;
  showItem(currentIndex);
}

function nextItem() {
  currentIndex = (currentIndex + 1) % carouselItems.length;
  showItem(currentIndex);
}

prevBtn.addEventListener("click", prevItem);
nextBtn.addEventListener("click", nextItem);

setInterval(nextItem, 5000); // Change image every 5 seconds

/*INTERSECTION OBSERVER */

ratio = 0.2;
const options = {
  root: null,
  rootMargin: "0px",
  threshold: ratio,
};

const callback = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.add("apparaitre-visible");
      observer.unobserve(entry.target);
    }
  });
};

const observer = new IntersectionObserver(callback, options);
document.querySelectorAll(".apparaitre").forEach(function (r) {
  observer.observe(r);
});

/*menu deroulant*/

const openmenu = document.querySelector(".fa-solid.fa-bars");
const derouler = document.querySelector(".container");
console.log(openmenu);
openmenu.addEventListener("click", function () {
  derouler.classList.toggle("active");
});

/* cliquer sur le button rechercher un artizan*/
