/*jshint esversion: 6 */
// LOGIN VALIDACIJA
function validateLogin() {
  let email = document.forms.loginForm.email.value;
  let password = document.forms.loginForm.password.value;
  if (email == "" || email.indexOf("@", 0) < 0 || email.indexOf(".", 0) < 0) {
    alert("Įrašykite el. paštą!");
    return false;
  }
  if (password == "") {
    alert("Įrašykite slaptažodį!");
    return false;
  }
}
// REGISTRATION VALIDACIJA
function validateRegister() {
  let email = document.forms.registrationForm.email.value;
  let password = document.forms.registrationForm.password.value;
  let password1 = document.forms.registrationForm.password1.value;
  let postcode = document.forms.registrationForm.postcode.value;
  if (email == "" || email.indexOf("@", 0) < 0 || email.indexOf(".", 0) < 0) {
    alert("Įrašykite el. paštą!");
    return false;
  }
  if (password == "") {
    alert("Įrašykite slaptažodį!");
    return false;
  }
  if (password1 == "") {
    alert("Pakartokite slaptažodį!");
    return false;
  }
  if (password != password1) {
    alert("Nesutampa pakartotas slaptažodis!");
    return false;
}
  if (postcode != "") {
    if (isNaN(postcode)) {
      alert("Pašto kodas turi būti sudarytas iš skaičių!");
      return false;
    }
  }
}
// UZSAKYMO VALIDACIJA
function validateOrder() {
  let email = document.forms.orderForm.email.value;
  let email1 = document.forms.orderForm.email1.value;
  let name = document.forms.orderForm.name.value;
  let lname = document.forms.orderForm.lname.value;
  let address = document.forms.orderForm.address.value;
  let postcode = document.forms.orderForm.postcode.value;
  let city = document.forms.orderForm.city.value;
  let tel = document.forms.orderForm.tel.value;
  console.log(city);
  if (email == "" || email.indexOf("@", 0) < 0 || email.indexOf(".", 0) < 0) {
    alert("Įrašykite el. paštą!");
    return false;
  }
  if (email1 == "") {
    alert("Pakartokite slaptažodį!");
    return false;
  }
  if (email != email1) {
    alert("Nesutampa pakartotas slaptažodis!");
    return false;
  }
  if (name == "") {
    alert("Įrašykite vardą!");
    return false;
  }
  if (lname == "") {
    alert("Įrašykite pavardę!");
    return false;
  }
  if (postcode == "") {
    alert("Įrašykite pašto kodą!");
    return false;
  }
  if (isNaN(postcode)) {
    alert("Pašto kodas turi būti sudarytas iš skaičių!");
    return false;
  }
  if (city == "") {
    alert("Įrašykite miestą!");
    return false;
  }
  if (tel == "") {
    alert("Įrašykite telefono numerį!");
    return false;
  }
}
// NAUJIENLAISKIO VALIDACIJA
function validateNewsletter() {
  let email = document.forms.newsletterForm.email.value;
  if (email == "" || email.indexOf("@", 0) < 0 || email.indexOf(".", 0) < 0) {
    alert("Įrašykite el. paštą!");
    return false;
  }
}
// CONTACTS VALIDACIJA
function validateQuestion() {
  let name = document.forms.contactForm.name.value;
  let email = document.forms.contactForm.email.value;
  let comment = document.forms.contactForm.comment.value;
  if (name == "") {
    alert("Įrašykite vardą!");
    return false;
  }
  if (email == "" || email.indexOf("@", 0) < 0 || email.indexOf(".", 0) < 0) {
    alert("Įrašykite el. paštą!");
    return false;
  }
  if (comment == "") {
    alert("Įrašykite klausimą!");
    return false;
  }
}
//MAZU EKRANU MENU MYGTUKAS
function smallMenuButton() {
  var x = document.querySelector("topnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
// AUTOCOMPLETE PER AJAX (REIKIA TAISYTI)
// function fill(Value) {
//    $('.search').val(Value);
//    $('.suggesstion-box').hide();
// }
// $(document).ready(function() {
//    $(".search").keyup(function() {       
//        let name = $('.search').val();     
//        if (name == "") {           
//            $(".suggesstion-box").html("");
//        }
//        else {           
//            $.ajax({              
//                type: "POST",              
//                url: "ajax.php",              
//                data: {                  
//                    search: name
//                },            
//                success: function(html) {                   
//                    $(".suggesstion-box").html(html).show();
//                }
//            });
//        }
//    });
// });
