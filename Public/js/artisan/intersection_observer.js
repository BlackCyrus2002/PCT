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
