<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap10_Ejercicios</title>
</head>
<body>

<form action="">

    <input type="text" id="numero1">
    <input type="text" id="numero2">
    <input type="button" value="Sumar" onclick="alert(suma());">
</form>


<script>

    var suma = function (numero1, numero2) {

        var numero1 = parseInt(document.getElementById("numero1").value);
        var numero2 = parseInt( document.getElementById("numero2").value);
        var resultado = numero1 + numero2;
        return resultado;


    }

</script>

</body>
</html>