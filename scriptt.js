document.addEventListener("DOMContentLoaded", function() {  
    const offerList = document.querySelector('.offerings ul');  
    document.querySelector('.offerings h2').addEventListener('click', () => {  
        offerList.style.display = (offerList.style.display === 'block') ? 'none' : 'block';  
    });  
    
    document.querySelectorAll('.offering-image').forEach(image => {  
        image.addEventListener('click', () => alert("More details coming soon!"));  
    });  
}); 