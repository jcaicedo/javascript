<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap15 DOM Document Object Model</title>
</head>
<body>

<ol id="lista,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ">
    <li> Lorem ipsum dolor sit amet.</li>
    <li>Lorem ipsum dolor sit amet.</li>
</ol>

<script>
    var elemento = document.createElement("li"),
            contenido = document.createTextNode("Nuevo Texto");

    elemento.appendChild(contenido);
    var padre= document.getElementsByTagName("li")[0].parentNode,
            primeroELemento = document.getElementsByTagName("li")[1];
    padre.insertBefore(elemento,primeroELemento);

    //padre.appendChild(elemento,);
</script>

</body>
</html>