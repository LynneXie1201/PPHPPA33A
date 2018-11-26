
window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var cus;
 var cri;
 var order;

 cus = document.getElementById("pickacustomer");
 cus.addEventListener("change",getPurchase);

//cri = document.getElementById("pickcri");
// cri.addEventListener("change",getProduct);

order = document.getElementById("orderby");
 order.addEventListener("change",getProduct);



}
function getPurchase() {
 this.form.submit();
}


function getProduct() {
 this.form.submit();
}




