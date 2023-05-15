
const menu = document.getElementById("menu-icons");
const navlist = document.getElementById("navlist");
const home = document.getElementById("home");
const shop = document.getElementById("shop");
const Featured = document.getElementById("Featured");
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






