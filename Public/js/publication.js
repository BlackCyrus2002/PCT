document.addEventListener("DOMContentLoaded", function () {
  const commentIcons = document.querySelectorAll(".fa-comment");

  commentIcons.forEach((icon) => {
    icon.addEventListener("click", function () {
      toggleComments(this);
    });
  });

  const commentButtons = document.querySelectorAll(".comments-section button");

  commentButtons.forEach((button) => {
    button.addEventListener("click", function () {
      addComment(this);
    });
  });
});

function toggleComments(element) {
  var commentsSection = element
    .closest(".post")
    .querySelector(".comments-section");
  commentsSection.classList.toggle("active");
}

function addComment(button) {
  var post = button.closest(".post");
  var name = post.querySelector("#comment-name").value;
  var email = post.querySelector("#comment-email").value;
  var commentText = post.querySelector("#comment-input").value;

  if (name && email && commentText) {
    var commentSection = post.querySelector(".comments");
    var newComment = document.createElement("div");
    newComment.className = "comment";
    newComment.innerHTML = `<strong>${name} (${email}):</strong> <p>${commentText}</p>`;
    commentSection.appendChild(newComment);

    post.querySelector("#comment-name").value = "";
    post.querySelector("#comment-email").value = "";
    post.querySelector("#comment-input").value = "";
  } else {
    alert("Remplisser les champs svp!");
  }
}

/* animation sidebar*/

const ouvrir_sidebar = document.querySelector(".sidebar");
const icone_ellispsis = document.querySelector(".recherche i");
const fermer_sidebar = document.querySelector(".sidebar .fa-solid.fa-xmark");

icone_ellispsis.addEventListener("click", function () {
  ouvrir_sidebar.style.opacity = "1";
  ouvrir_sidebar.style.transform = "translateX(0px)";
});

fermer_sidebar.addEventListener("click", function () {
  ouvrir_sidebar.style.opacity = "0";
  ouvrir_sidebar.style.transform = "translateX(2600px)";
});

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
      entry.target.classList.add("visibility-visible");
      observer.unobserve(entry.target);
    }
  });
};

const observer = new IntersectionObserver(callback, options);
document.querySelectorAll(".visibility").forEach(function (r) {
  observer.observe(r);
});
