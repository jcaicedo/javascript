$(document).ready(function(){

    /*var z = document.getElementById("cerrar");
    z.addEventListener("click",cerrar_banner,false);*/


document.getElementById("cerrar").addEventListener("click",cerrar_banner,false);

document.getElementById("imagen1").addEventListener("click",carrito,false);

});

function carrito(){

    $("#imagen1").replaceWith("<div id='sustitucion'>Agregando al carro</div>");

}

function cerrar_banner(){

    $("#banner").remove();

}