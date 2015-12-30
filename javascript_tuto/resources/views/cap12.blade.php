<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap12 Metodos y propiedades para cadenas de texto</title>
</head>
<body>

<script>

    var texto = "Julio Caicedo";
    var texto2= texto.indexOf("o")+1;
    var nuevoTexto = texto.length;
    var nuevoTexto2= texto.substr(0,6); //devuelve la cadena resultante de las posiciones entre 0 y 6
    var nuevoTexto3= texto.indexOf("o"); //busca en la cadena la letra o
    var nuevoTexto4= texto.indexOf("o",5); // busca en la cadena desde las posicion 5
    var nuevoTexto5= texto.indexOf("o",texto2); //busca con texto2 como inicio de posicion en la cadena
    var nuevoTexto6= texto.lastIndexOf("a"); // busca desde atras
    var nuevoTexto7= texto.replace(texto,"Falcon Master");
    var nuevoTexto8= texto.toUpperCase();
    var nuevoTexto9= texto.toLowerCase();

    document.write("mi nombre es: "+texto+"<br>");
    document.write("primero length: "+nuevoTexto+"<br>");
    document.write("segundo substr(0,6): "+ nuevoTexto2+"<br>");
    document.write("segundo indexOf(o): " + nuevoTexto3+"<br>");
    document.write("segundo indexOf(o,5): " + nuevoTexto4+"<br>");
    document.write("segundo indexOf(o,texto2): " + nuevoTexto5+"<br>");
    document.write("segundo lastIndexOf(a): " + nuevoTexto6+"<br>");
    document.write("replace: " + nuevoTexto7+"<br>");
    document.write("toUpperCase: " + nuevoTexto8+"<br>");
    document.write("toLowerCase: " + nuevoTexto9+"<br>");







</script>

</body>
</html>