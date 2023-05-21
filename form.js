
b=''

var cartItemsArray = JSON.parse(localStorage.getItem('cartItemsArray') || '[]');
for (var i = 0; i < cartItemsArray.length; i++) {
    var product = cartItemsArray[i];
    b=b+product.title+' - '+product.price+' - '+product.quantity+' | ' ;
    document.getElementsByClassName('inputpro')[0].innerHTML=b
}


/*----------------------------UPDATE TOTAL------------------------------------*/ 
var cartItemsArray = JSON.parse(localStorage.getItem('cartItemsArray') || '[]');
var s=0;
for (var i = 0; i < cartItemsArray.length; i++) {
  var product = cartItemsArray[i];
  s=s+parseInt(product.quantity)*parseInt(product.price);
  s = Math.round(s *100) /100;
}


var k=parseInt(s)+7;
q=document.getElementsByClassName('pluslivto')[0].innerHTML=s+0+'dt';
document.getElementsByClassName('prixx')[0].innerHTML=q;



