window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var cus;


 cus = document.getElementById("pickacustomer");
 cus.addEventListener("change",getPhoneNum);


}
function getPhoneNum() {
 this.form.submit();
}



