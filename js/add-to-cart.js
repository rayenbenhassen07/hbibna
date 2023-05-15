

/*---------------------------------------cart----------------------------------------*/

let cartIcon = document.querySelector('#shopping-bag');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close-cart');

//open cart-----------------
cartIcon.onclick = () => {
  cart.classList.add("active");
};

//close cart-----------------
closeCart.onclick = () => {
  cart.classList.remove("active");
}

//open cart shopping-bag-----------------
var addCart = document.getElementsByClassName('add-cart');
addCart.onclick = () => {
  cart.classList.add("active");
  
};

//cart working js-----------------
if(document.readyState == "loading"){
  document.addEventListener('DOMContentLoaded', ready);
}else{
  ready();
}

//making function-----------------
function ready(){
  //remove items from cart-----------------
  var removeCartButtons=document.getElementsByClassName('cart-remove')
  
  for (var i=0 ; i < removeCartButtons.length ; i++){
    var button = removeCartButtons[i];
    button.addEventListener('click' , removeCartItem);
  }

  //quantity changes-----------------
  var quantityInputs=document.getElementsByClassName('cart-quantity');
  for (var i=0 ; i < quantityInputs.length ; i++){
    var input = quantityInputs[i];
    input.addEventListener("change" , quantityChanged);
  }

  //Add to cart --------------------
  var addCart = document.getElementsByClassName('add-cart');
  for (var i=0 ; i < addCart.length ; i++){
    var button = addCart[i];
    button.addEventListener("click",addCartClicked);
    button.addEventListener("click",opencart);
  }

}
function opencart(){
  cart.classList.add("active");
}

//Quantity Changes-----------------
function quantityChanged(event){
  var input = event.target;
  if(isNaN(input.value) || input.value <= 0){
    input.value = 1;
  } 
  updatetotal(); 
}

//Add To cart------------------

function addCartClicked(event){
  var button = event.target;
  var buttonss = button.parentElement;
  var buttons = buttonss.parentElement;
  var shopProducts = buttons.parentElement;
  var title = shopProducts.getElementsByTagName('h5')[0].innerHTML;
  
  var price = shopProducts.getElementsByTagName('h6')[0].innerText;
  var productImg = shopProducts.getElementsByTagName('img')[0].src;
  
  addProductToCart(title,price ,productImg);
  updatetotal()
}



function addProductToCart(title,price,productImg) {
  var cartItems = document.getElementsByClassName('cart-content')[0];
  var cartItemsNames = cartItems.getElementsByClassName('cart-product-title');

  // Check if the product is already in the cart
  for (var i = 0; i < cartItemsNames.length; i++) {
    if (cartItemsNames[i].innerHTML == title) {
      alert('You have already added this item to cart');
      return;
    }
  }

  // Add the product to the cart
  var product = {
    title: title,
    price: price,
    image: productImg,
    quantity: 1
  };
  
  // Get the existing cart items from local storage
  var cartItemsArray = JSON.parse(localStorage.getItem('cartItemsArray') || '[]');
  
  // Add the new product to the cart items array
  cartItemsArray.push(product);

  // Store the updated cart items array in local storage
  localStorage.setItem('cartItemsArray', JSON.stringify(cartItemsArray));

  // Create the HTML for the cart item and append it to the cart
  var cartBoxContent = `
    <img src="${productImg}" alt="" class="cart-img">
    <div class="detail-box">
      <div class="cart-product-title">${title}</div>
      <div class="cart-price">${price}</div>
      <div class="quantite"> quantite <input type="number" value="1" class="cart-quantity"></div>
    </div>
    <i class='bx bxs-trash-alt cart-remove'></i>
  `;
  var cartShopBox = document.createElement('div');
  cartShopBox.classList.add('cart-box');
  cartShopBox.innerHTML = cartBoxContent;
  cartItems.append(cartShopBox);

  // Attach event listeners for the cart item
  cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem);
  cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChanged);
}


window.onload = function() {
  var cartItemsArray = JSON.parse(localStorage.getItem('cartItemsArray') || '[]');

  for (var i = 0; i < cartItemsArray.length; i++) {
    var product = cartItemsArray[i];

    var cartBoxContent = `
      <img src="${product.image}" alt="" class="cart-img">
      <div class="detail-box">
        <div class="cart-product-title">${product.title}</div>
        <div class="cart-price">${product.price}</div>
        <input type="number" value="${product.quantity}" class="cart-quantity">
      </div>
      <i class='bx bxs-trash-alt cart-remove'></i>
    `;
    var cartShopBox = document.createElement('div');
    cartShopBox.classList.add('cart-box');
    cartShopBox.innerHTML = cartBoxContent;
    var cartItems = document.getElementsByClassName('cart-content')[0];
    cartItems.append(cartShopBox);

    cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem);
    cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChanged);
  }
  updatetotal()

};

/*update the quantity------------*/

function quantityChanged(event) {
  var input = event.target;
  var cartItem = input.parentElement.parentElement;
  var cartItemTitle = cartItem.getElementsByClassName('cart-product-title')[0].innerText;

  var cartItemsArray = JSON.parse(localStorage.getItem('cartItemsArray') || '[]');
  
  for (var i = 0; i < cartItemsArray.length; i++) {
    if (cartItemsArray[i].title.toUpperCase() === cartItemTitle.toUpperCase()) {
      cartItemsArray[i].quantity=input.value;
      break;
    }
  }

  localStorage.setItem('cartItemsArray', JSON.stringify(cartItemsArray));

  updatetotal();
}



//Update total-----------------
function updatetotal(){
  var cartContent = document.getElementsByClassName('cart-content')[0];
  var cartBoxes = document.getElementsByClassName('cart-box');
  var total = 0 ;
  for(var i=0 ;i < cartBoxes.length ;i++){
    var cartBox = cartBoxes[i];
    var priceElement = cartBox.getElementsByClassName('cart-price')[0];
    var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
    var price = parseFloat(priceElement.innerText.replace("dt",""));
    var quantity = quantityElement.value;
    total= total + (price * quantity);
  }
    // mochklet lfassel
    total = Math.round(total *100) /100;
    document.getElementsByClassName('total-price')[0].innerText = total +'dt';
  

}
/*----------------------------------remove item ( localstorge + cart )---------------------------------
*/

function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.remove();
  var cartItem = buttonClicked.parentElement;
  var cartItemTitle = cartItem.getElementsByClassName('cart-product-title')[0].innerText;
  cartItem.remove();
  var cartItemsArray = JSON.parse(localStorage.getItem('cartItemsArray') || '[]');
  for (var i = 0; i < cartItemsArray.length; i++) {
    if (cartItemsArray[i].title === cartItemTitle) {
      cartItemsArray.splice(i, 1);
      break;
    }
  }
  localStorage.setItem('cartItemsArray', JSON.stringify(cartItemsArray));
  updatetotal();
}

/*ajouter-----------------*/ 
function ajouter(){
  a=document.getElementsByClassName("product-text");
  namee=document.getElementsByClassName("product-name")[0].innerHTML;
  price=document.getElementsByClassName("product-price")[0].innerHTML;
  quantity=document.getElementsByClassName("quantityy")[0].value;
  price=price.replace("dt","");

  img=document.getElementsByClassName("active")[0].src;
  addProductToCart(namee,price,img);

}