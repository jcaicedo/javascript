<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap16 DOM Document Object Model</title>
</head>
<body>

<ol id="lista">
    <li> Lorem ipsum dolor sit amet.</li>
    <li>Lorem ipsum dolor sit amet.</li>
</ol>

<script>
    var elemento = document.createElement("li"),
            contenido = document.createTextNode("Nuevo Texto");

    elemento.appendChild(contenido);

</script>

</body>
</html>