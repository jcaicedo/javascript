<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap20 DOM Eventos</title>


</head>
<body>

{{--<button id="boton">Boton</button>--}}
<a  id="boton" href="http://www.falconmasters.com"> Falcon Master</a>
<input type="text" id="input">


<script>
    (function(){

        var saludo = function (e){

            //console.log('Este evento es de tipo: '+ e.type);
            console.log('OhYeah');
            e.preventDefault();
        };

        //var input = document.getElementById('input'); // aqui realiza los eventos con el input
        var boton = document.getElementById('boton');
        //input.addEventListener("focus",saludo);//Focus se ejecuta el evento cuando se hace click dentro del label
        //input.addEventListener("blur",saludo); //blur se ejecuta el evento cuando se hace click fuera del label despues de hacerlo dentro
        //input.addEventListener("change",saludo); //change se ejecuta cuando detecta un cambio dentro del label o elemento
        boton.addEventListener("click",saludo);

        //remover
        //boton.removeEventListener("click",saludo)

    }())
</script>

</body>
</html>