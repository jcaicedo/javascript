<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap13 DOM</title>
</head>
<body>

<h1 id="titulo">Titulo de nuestro site</h1>

<p>Lorem ipsum <b>dolor</b> sit amet, consectetur adipisicing elit. A accusantium blanditiis cupiditate, eum excepturi expedita
    facere incidunt, laudantium libero mollitia nam nesciunt nulla numquam obcaecati pariatur placeat quos recusandae,
    tenetur.</p>
<p id="segundo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur iusto maiores odit velit vitae.
    Accusantium debitis distinctio, doloribus eos esse eveniet incidunt obcaecati recusandae rem repudiandae sint
    soluta, tenetur, unde.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at, consequuntur cumque dicta distinctio facilis
    molestias officia perspiciatis porro possimus quas quisquam rem repellendus sit voluptatem. Nam officiis provident
    voluptatum.</p>


<script>
var elementosP = document.getElementsByTagName("p"),
        segundoParrafo = document.getElementById("segundo");
</script>
</body>
</html>