
/*apparition des bordure orange sur le menu icone  et sure le menu sidebar*/

document.addEventListener('DOMContentLoaded',function(){

 const   items= document.querySelectorAll('.nav_icon li')
          items2=document.querySelectorAll('.navbar li')
 items.forEach(function(item){

    item.addEventListener('click',function(){

        items.forEach(function(el) {
            el.classList.remove('icon_border');
        });
        item.classList.add('icon_border')
    })
 })
})



/*appaarition des different menu au moment du click sur les menu icons*/
  /*  document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.button-container li');
   const  items2=document.querySelectorAll('button-container2 li')
    items.forEach(function(item){
        item.addEventListener('click', function() {
            var menuId = this.getAttribute('data-target');
            showMenu(menuId);
        });
    });
});

function showMenu(menuId) {
    var menus = document.querySelectorAll('.menu');
    menus.forEach(function(menu) {
        menu.classList.remove('active');
    });

    var selectedMenu = document.getElementById(menuId);
    if (selectedMenu) {
        selectedMenu.classList.add('active');
    }
}*/



document.addEventListener('DOMContentLoaded', function() {
    apparaitre('.button-container li', '.menu');
    apparaitre('.liste-container2 li','.menu')
});

function apparaitre(buttonSelector, menuSelector) {
    const items = document.querySelectorAll(buttonSelector);
    items.forEach(function(item) {
        item.addEventListener('click', function() {
            const menuId = this.getAttribute('data-target');
            showMenu(menuId, menuSelector);
        });
    });
}

function showMenu(menuId, menuSelector) {
    const menus = document.querySelectorAll(menuSelector);
    menus.forEach(function(menu) {
        menu.classList.remove('active');
    });

    const selectedMenu = document.getElementById(menuId);
    if (selectedMenu) {
        selectedMenu.classList.add('active');
    }
}






document.addEventListener('DOMContentLoaded', function(){
    function setupToggle(elementId, buttonId) {
        const element = document.getElementById(elementId);
        const button = document.getElementById(buttonId);
    const  click_fleche=document.querySelector('#menu2 .fa-solid.fa-right-to-bracket')

        
        button.addEventListener('click', function() {
            element.classList.toggle('active')
            
        });
    
    
    }
    
    // ic on Appele la fonction pour chaque paire  
    setupToggle('parck-publicitaire', 'click-parck');
    setupToggle('confidentialite', 'click-confidentialite');
    setupToggle('aide', 'click-aide');
    setupToggle('instruction', 'click-instruction');
    setupToggle('conversation','click-client-message')


    //structure mobile//

    const click_menu1=document.querySelector('.fa-solid.fa-compass');
    const derouler_menu1=document.querySelector('.nav_icon');
    const  translate_navbar=document.querySelector('.nav-bar');
    const  click_fleche=document.querySelector('#menu2 .fa-solid.fa-right-to-bracket')
    
   click_menu1.addEventListener('click',function(){
    derouler_menu1.classList.toggle('active')
   })

   click_fleche.addEventListener('click',function(){
    translate_navbar.classList.toggle('active')
   })


   

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














































