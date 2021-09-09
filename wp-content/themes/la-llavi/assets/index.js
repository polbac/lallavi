import Navigation from "./js/navigation.js"
//import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'
import Productions from "./js/productions.js"

const navigation = new Navigation()

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    centeredSlides: true,
    
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

AOS.init();

if (document.querySelector('section.producciones')) {
  new Productions()
}