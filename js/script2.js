/*-------------------------------menu------------------------------- */

const menu = document.getElementById("menu-icons");
const navlist = document.getElementById("navlist");
const home = document.getElementById("home");
const shop = document.getElementById("shop");
const contact = document.getElementById("contact");


menu.addEventListener("click", () => {
  ija();
})

home.addEventListener("click", () => {
  ija();
})
shop.addEventListener("click", () => {
  ija();
})

contact.addEventListener("click", () => {
  ija();
  
})

function ija(){
  navlist.classList.toggle("navlistisgooud");
  
  
}

/*-------------------------------image------------------------------- */

const pi = document.querySelectorAll(".product-imgs img");
const pbg = document.querySelector(".product-details");
let a = 0;
pi.forEach((item, i) => {
  item.addEventListener('click', () => {
    
    pbg.style.backgroundImage = `url('${item.src}')`;
    a = i;
  })
})

/*-------------------------------select button------------------------------- */
// toggle size buttom

const si = document.querySelectorAll('.size-radio');
let x = 0;

si.forEach((item, i) => {
  item.addEventListener('click', () => {
    si[x].classList.remove('check');
    item.classList.add('check');
    x = i;
  })
})