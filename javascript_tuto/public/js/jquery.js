
/*var imagenes = document.querySelectorAll("#carrete img");

for (var i=0;i<imagenes.length;i++){
    imagenes[i].style.visibility="hidden";
}*/

$(document).ready(function(){

   // $("#carrete img").hide();

    //var anuncio=document.getElementById("anuncio");
    //
    //anuncio.style.width="500px";
    //anuncio.style.height="500px";
    //anuncio.innerHTML="Vende!!";

    $("#anuncio").width(500).height(500).text("Vende!!").hide().fadeIn(10000);

});