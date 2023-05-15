
let row = document.querySelector(".shop-contient");
let rowel = document.querySelectorAll(".row");
let furth= document.querySelector('.featured');
let sol = document.querySelector(".sold-detait");
let soll = document.querySelectorAll(".sol");


window.onscroll = function (){
   if(window.scrollY >= row.offsetTop - 800){
    row.classList.add("active");
    rowel[1].classList.add("active");
    rowel[0].classList.add("activee");
    
   }  

   if(window.scrollY >= furth.offsetTop - 700){
      furth.classList.add("active");
   } 

   if(window.scrollY >= sol.offsetTop - 700){
      
      soll[0].classList.add("active");
      soll[1].classList.add("active1");
      soll[2].classList.add("active2");

   } 

}









