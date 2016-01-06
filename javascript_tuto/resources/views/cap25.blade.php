<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <title>Cap25 Reloj Digital de 12 Horas - JS</title>
    {!! Html::style('css/cap25.css')!!}
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrap">
    <div class="widget">
        <div class="fecha">
            <p id="diaSemana" class="diaSemana"></p>
            <p id="dia" class="dia"></p>
            <p>de</p>
            <p id="mes" class="mes"></p>
            <p>del</p>
            <p id="year" class="year"></p>
        </div>

        <div class="reloj">
            <p id="horas" class="horas"></p>
            <p>:</p>
            <p id="minutos" class="minutos"></p>
            <p>:</p>
            <div class="caja-segundos">
                <p id="ampm" class="ampm"></p>
                <p id="segundos" class="segundos"></p>
            </div>

        </div>
    </div>
</div>

<script src="js/reloj.js"></script>

</body>
</html>