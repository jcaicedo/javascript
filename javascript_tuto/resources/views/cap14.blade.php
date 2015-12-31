<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap14 DOM</title>
</head>
<body>

<h1 id="titulo">Titulo de nuestro site</h1>

<div id="subtitulo">

</div>

<p>1.-Lorem ipsum <b>dolor</b> sit amet, consectetur adipisicing elit. A accusantium blanditiis cupiditate, eum excepturi expedita
    facere incidunt, laudantium libero mollitia nam nesciunt nulla numquam obcaecati pariatur placeat quos recusandae,
    tenetur.</p>
<p id="segundo">2.- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur iusto maiores odit velit vitae.
    Accusantium debitis distinctio, doloribus eos esse eveniet incidunt obcaecati recusandae rem repudiandae sint
    soluta, tenetur, unde.</p>
<p>3.- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at, consequuntur cumque dicta distinctio facilis
    molestias officia perspiciatis porro possimus quas quisquam rem repellendus sit voluptatem. Nam officiis provident
    voluptatum.</p>


<script>
var elementosP = document.getElementsByTagName("p"),
        segundoParrafo = document.getElementById("segundo");

    // 1.- Crear el elemento
var  elemento = document.createElement("h2");
    // 2.- Crear un nodo de texto
var contenido = document.createTextNode("Este es nuestro titular");
    // 3.- Añadir el nodo de texto al elemento
elemento.appendChild(contenido);
    // 4.- Agregar atributos al elemento
elemento.setAttribute("align", "center");
    // 5.- Agregar el elemento al documento
    document.getElementById("subtitulo").appendChild(elemento);
</script>
</body>
</html>