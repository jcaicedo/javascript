<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap23 Timers, Timeout e Interval</title>

</head>
<body>


<script>

    (function(){

        var contador = 0;

        //Timeout

        var saludo = function(){
            contador ++;
            console.log(contador);
            setTimeout(saludo,1000);

            /*if (contador === 5){
                clearInterval(intervalo);

            }
            */
        };
        //setTimeout(saludo,3000);
        //Intervals

       //var intervalo= setInterval(saludo,1000);

        saludo();

    }())

</script>

</body>
</html>