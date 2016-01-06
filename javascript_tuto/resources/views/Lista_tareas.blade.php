<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Cap25 Reloj Digital de 12 horas - JS</title>
    {!! Html::style('css/lista_tareas.css')!!}
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">


</head>
<body>
        <div class="principal">
            <div class="wrap">
                <form action="" class="formulario">
                    <input type="text" id="tareaInput" placeholder="Agrega tu tarea">
                    <input type="button" class="boton" id="btn-agregar" value="Agregar Tarea">
                </form>
            </div>
        </div>

        <div class="tareas">
            <div class="wrap">
                <ul class="lista" id="lista">
                    <li><a href="#">1 Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
                    <li><a href="#">2 Lorem ipsum dolor sit amet, consectetur.</a></li>
                    <li><a href="#">3 Lorem ipsum dolor sit amet, consectetur.</a></li>
                </ul>
            </div>
        </div>

<script src="js/lista_tareas.js"></script>
</body>
</html>