<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap24 Fechas</title>

</head>
<body>


<script>
    (function (){
        var fecha = new  Date();
        document.write(fecha);

        console.log(fecha.getHours()-12);
        console.log(fecha.getMinutes());
        console.log(fecha.getSeconds());

        console.log(fecha.getDay());
        console.log(fecha.getDate());
        console.log(fecha.getMonth());
        console.log(fecha.getFullYear());


    }())


</script>

</body>
</html>