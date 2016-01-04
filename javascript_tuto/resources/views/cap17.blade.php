<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap17 DOM Document Object Model Acceso Atributos</title>

    {!!Html::style('css/cap17.css')!!}
</head>
<body>


<section id="contenedor">
    <div class=""></div>
    <div class=""></div>
</section>


<script>
    var elemento= document.createElement("div");
    var padre = document.getElementById("contenedor");
    var referencia = document.getElementsByTagName("div")[0];
    elemento.setAttribute("class","azul");
    padre.insertBefore(elemento,referencia);
    //document.body.appendChild(elemento); //agrega en el body como padre

</script>

</body>
</html>