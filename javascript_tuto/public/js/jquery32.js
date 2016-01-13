//$(document).ready(function(){

    //alert($("#errores h2").html());
//    $("#errores").html("<p>hay errores en el formulario</p>");//sustituimos lo que hay dentro del contenedor de id errores
  /*  $("#errores").append("<p>hay errores en el formulario</p>"); // agrega texto
    $("#errores").prepend("<p>muestra antes</p>"); //muestra antes dentro del contenedor que apunta

    $("#errores").before("<p>Utilizando before</p>");
    $("#errores").after("<p>Utilizando after</p>");

    $("#errores h2").text("utilizando text");*/


//});

function validar(){
    var n_usuario=document.getElementById("usuario").value;

    if(n_usuario==""){

        $("#usuario").after("Rellene este campo, por favor");
    }

}
