let sideBar=document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick=()=>{
	sideBar.classList.toggle('active');
}
document.querySelector('#close-side-bar').onclick=()=>{
	sideBar.classList.remove('active');
}


let searchform=document.querySelector('.search-form');

document.querySelector('#search-btn').onclick=()=>{
	searchform.classList.toggle('active');
}




window.onscroll=()=>{
	sideBar.classList.remove('active');
	searchform.classList.remove('active');

};




document.querySelectorAll('.accordion-container .accordion').forEach(accordion=>{
	accordion.onclick=()=>{
		accordion.classList.toggle('active');
	}
})




var swiper = new Swiper(".home-slider", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },

});




     var swiper = new Swiper(".revicw-slider", {
     	spaceBetween: 20,
        breakpoints: {
          450: {
            slidesPerView: 1,
            
          },
          768: {
            slidesPerView: 2,
            
          },
          1024: {
            slidesPerView: 3,
           
          },
        },
      });