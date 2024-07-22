
document.addEventListener('DOMContentLoaded',function(){

    const   items= document.querySelectorAll('.icon-etoile .fa-regular')
    items.forEach(function(item){
   
       item.addEventListener('click',function(){
           item.classList.toggle('active')
       })
    })
   })