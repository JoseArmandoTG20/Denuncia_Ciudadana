// Declaracion de Variables del Login
var contenedor_login_registro = document.querySelector(".contenedor-login_registro");
var formulario_login = document.querySelector(".formulario-login");
var formulario_registro = document.querySelector(".formulario-registro");
var caja_trasera_login = document.querySelector(".caja-trasera-login");
var caja_trasera_registro = document.querySelector(".caja-trasera-registro");

// Declaracion de los Eventos
document.getElementById("btn-registrarte").addEventListener("click",registro);
document.getElementById("btn-iniciar-sesion").addEventListener("click",iniciarSesion);
window.addEventListener("resize",anchoPagina);

// Funcion del Ancho de la Pagina
function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_registro.style.display = "block";
    }else{
        caja_trasera_registro.style.display = "block";
        caja_trasera_registro.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
    }
}

// Funcion de Inicio de Sesion
function iniciarSesion(){
    if(window.innerWidth > 850){
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_registro.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_registro.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

// Funcion de Registro
function registro(){
    if(window.innerWidth >850)
    {
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_registro.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_registro.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}