document.addEventListener('DOMContentLoaded', function() {

const translation=document.querySelector('.translation')
const click_publication=document.getElementById('click-publication')
const click_geolocalisation=document.getElementById('click-geolocalisation')


click_geolocalisation.addEventListener('click',function(){
    translation.style.transform='translateY(-700px)';
})
click_publication.addEventListener('click',function(){
    translation.style.transform='translateY(0px)';
})


   function setupToggle(elementId, buttonId) {
        const element = document.querySelector(elementId);
        const button = document.querySelector(buttonId);
        
        button.addEventListener('click', function() {
            element.style.opacity = '1';
            element.style.transform = 'translateX(0)';
        });
    
        document.addEventListener('click', function(event) {
            // Vérifie si l'élément cliqué n'est pas le bouton souhaité
            if (event.target !== button && !button.contains(event.target)) {
                element.style.opacity = '0';
                element.style.transform = 'translateX(2000px)';
            }
        });
    }
    
    // ic on Appele la fonction pour chaque paire  
   
    setupToggle('#item-video-photo .video', '#click-video');
    // Ajouter d'autres appels si nécessaire
    // setupToggle('another-element-id', 'another-button-id');
});