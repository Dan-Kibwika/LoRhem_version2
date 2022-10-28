let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nvaBar');


menu.onclick= () =>{
menu.classList.toggle('fa-times');
menu.classList.toggle('active');


}




// service starts 

window.onclick = () =>{
    menu.classList.remove('fa-times');
    menu.classList.remove('active');
    
    
    }


// service ends 


//home slide
var swiper = new Swiper(".home-slider", {
      loop:true,
      navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



