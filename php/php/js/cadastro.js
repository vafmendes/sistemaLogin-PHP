var password = document.getElementById("password");
var password_confirma = document.getElementById("password_confirma");

function validaSenha(){
 if(password.value != password_confirma.value) {
   password_confirma.setCustomValidity("Senhas diferentes!");
 } else {
   password_confirma.setCustomValidity('');
 }
}

// password.onchange = validatePassword;
// password_confirma.onkeyup = validatePassword;