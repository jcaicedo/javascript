<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap6-Condicionales</title>
</head>
<body>
<script>
    var nombre = "Carlos",
            edad = 26;

  /*  if(edad == 18){
        document.write("Bienvendio, tienes 18");

    }else if(nombre == "Arturo"){
        document.write("Bienvenido "+nombre);

    }else{
        document.write("No tienes 18 años. Tienes " + edad+" años")

    }*/

    if (edad >= 18 && nombre == "Carlos" ){

        document.write("Bienvenido");
    }else{
        document.write("Eres un menor");

    }

</script>


</body>
</html>