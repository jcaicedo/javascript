<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap18 DOM Document Object Model Modificando Estilos de los elementos</title>

    {!! Html::style('css/cap18.css') !!}
</head>
<body>
    <h1 id="encabezado" class="titulo tituloGrande">Soy un encabezado</h1>




    <script>

        var encabezado = document.getElementById("encabezado");
      //  encabezado.style.color="#fff";
      //  encabezado.style.background="navy";
      //  encabezado.style.paddingTop = "20px";

       encabezado.className = encabezado.className.replace("tituloGrande","");

    </script>

</body>
</html>