document.getElementById("btn-registrearse").addEventListener("click", register)
document.getElementById("btn-iniciar-sesion").addEventListener("click", iniciarSesion)

var contenedor_login_register = document.querySelector(".contenedor-login-register");
var formulario_login = document.querySelector(".formulario-login");
var formulario_register = document.querySelector(".formulario-register");
var caja_trasera_login = document.querySelector(".caja-trasera-login");
var caja_trasera_register = document.querySelector(".caja-trasera-register");

function iniciarSesion(){
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "10px";
    formulario_login.style.display = "block";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
}
function register(){
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "410px";
    formulario_login.style.display = "none";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
}
