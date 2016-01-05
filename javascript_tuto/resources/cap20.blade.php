<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap20 DOM Eventos</title>


</head>
<body>

<button id="boton">Boton</button>
<input type="text" id="input">


<script>
    (function(){

        var saludo = function (){

            alert('saludo');
        };

        var boton = document.getElementById('boton');
        boton.addEventListener("click",saludo);

    }())
</script>

</body>
</html>