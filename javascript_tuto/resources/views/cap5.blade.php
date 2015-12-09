<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap5-Arreglos</title>
</head>
<body>


<script>
    var amigos = ["Carlos", "Cesar","Alex"];
    var amigos2= ["luis","pedro","jose"];
    //document.write("Tienes "+ amigos.length + " amigos");

    amigos[amigos.length]="Fernando";
    amigos.push("Luis","Oscar");

    //document.write(amigos);
      //  amigos.pop();
   // document.write(amigos);
    var amigos3=amigos.concat(amigos2);
   // document.write(amigos3);


   // document.write(amigos.join(" - "));

    var ordenados = amigos.sort();
    document.write(ordenados);

</script>

</body>
</html>