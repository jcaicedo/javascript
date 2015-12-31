<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap16 DOM Document Object Model</title>
</head>
<body>

<!--<ol id="lista">
    <li id="primero"> Lorem ipsum <b> dolor </b> sit amet.</li>
    <li>Lorem ipsum dolor sit amet.</li>
</ol>-->


<ol id="lista2">
    <li id="segundo"> Lorem ipsum <b> dolor </b> sit amet.</li>
    <li>Lorem ipsum dolor sit amet.</li>
</ol>

<script>
 /*   var elemento = document.createElement("li"),
            contenido = document.createTextNode("Nuevo Texto");

    elemento.appendChild(contenido);*/

/*
    var primerElemento = document.getElementById("primero");
   //primerElemento.innerHTML="NUevo Textp <i>Julio Caicedo<i>";// reemplaza el elemento de un elemento html y ejecuta codigo html
    //primerElemento.textContent = "NUevo Textp <i class='foo'>Julio Caicedo<i>"; // reemplaza pero no ejecuta codigo html
    primerElemento.innerHTML = "NUevo Textp <i class='foo'>Julio Caicedo<i>";
*/


 var elemento = document.createElement("li"),
         contenido = document.createTextNode("Nuevo Texto");

 elemento.appendChild(contenido);
    var padre = document.getElementsByTagName("li")[0].parentNode;
    var referencia =document.getElementsByTagName("li")[0];
  //  padre.replaceChild(elemento,referencia);//reemplaza elementos

    padre.removeChild(referencia); //eliminar elementos

</script>


</body>
</html>