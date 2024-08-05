/*apparition des bordure orange sur le menu icone  et sure le menu sidebar*/

document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".nav_icon li");
  items2 = document.querySelectorAll(".navbar li");
  items.forEach(function (item) {
    item.addEventListener("click", function () {
      items.forEach(function (el) {
        el.classList.remove("icon_border");
      });
      item.classList.add("icon_border");
    });
  });

  const nav_icon = document.querySelector(".nav_icon");
  const container = document.querySelector(".container");
  const container_absolute = document.querySelector(".container-absolute");
  const liste_container2 = document.querySelector(".liste-container2");

  /* ici grace a ce code tu peux deplacer manipuler les div  container et container_absolute qui sont en absolute*/

  document.addEventListener("click", (event) => {
    // Si le clic est dans div de classe nav_cicon la div de class container disparait
    if (nav_icon.contains(event.target)) {
      container.style.display = "block";
      container_absolute.style.display = "none";

      // Afficher container au-dessus
      // la div de classe container-abslolute en dessous
    }
    // Si le clic est en dehors de la div nav_icon
    else if (liste_container2.contains(event.target)) {
      container_absolute.style.display = "block"; // Afficher la div de classe ccontainer_absolute
      container.style.display = "none";
    }
  });
});
document.addEventListener("DOMContentLoaded", function () {
  apparaitre(".button-container li", ".menu");
  apparaitre(".liste-container2 li", ".menu");
});

function apparaitre(buttonSelector, menuSelector) {
  const items = document.querySelectorAll(buttonSelector);
  items.forEach(function (item) {
    item.addEventListener("click", function () {
      const menuId = this.getAttribute("data-target");
      showMenu(menuId, menuSelector);
    });
  });
}

function showMenu(menuId, menuSelector) {
  const menus = document.querySelectorAll(menuSelector);
  menus.forEach(function (menu) {
    menu.classList.remove("active");
  });

  const selectedMenu = document.getElementById(menuId);
  if (selectedMenu) {
    selectedMenu.classList.add("active");
  }
}

document.addEventListener("DOMContentLoaded", function () {
  function setupToggle(elementId, buttonId) {
    const element = document.getElementById(elementId);
    const button = document.getElementById(buttonId);

    button.addEventListener("click", function () {
      element.classList.toggle("active");
    });
  }

  // ici on Appele la fonction pour chaque paire
  setupToggle("parck-publicitaire", "click-parck");
  setupToggle("aide", "click-aide");
  setupToggle("confidentialite", "click-confidentialite");
  setupToggle("instruction", "click-instruction");

  //structure mobile//

  const click_menu1 = document.querySelector(".fa-solid.fa-compass");
  const derouler_menu1 = document.querySelector(".nav_icon");
  const translate_navbar = document.querySelector(".nav-bar");
  const click_fleche = document.querySelector(
    "#menu2 .fa-solid.fa-right-to-bracket"
  );

  click_menu1.addEventListener("click", function () {
    derouler_menu1.classList.toggle("active");
  });

  click_fleche.addEventListener("click", function () {
    translate_navbar.classList.toggle("active");
  });

  /* apparition des element a un certaine pourcentage*/
});

/*
 document.addEventListener('DOMContentLoaded', function() {
  
     const parck_publicitaire=document.getElementById('parck-publicitaire');
     const btn_publicitaire= document.getElementById('click-parck');
     
 
  btn_publicitaire.addEventListener('click',function(){
         parck_publicitaire.style.opacity='1';
         parck_publicitaire.style.transform='translateY(0px)';
     
       
     })
 
     btn_publicitaire.addEventListener('mouseover',function(){
         parck_publicitaire.style.opacity='0';
       
     
       
     })
     
     });
 
 
 */
