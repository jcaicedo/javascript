<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap9_Funcionaes</title>
</head>
<body>

<script>

    function suma(numero1, numero2){
        var numero1 = numero1;
        var numero2 = numero2;

        return numero1+numero2;

    }

    document.write( suma(10,20));

    document.write("<br>");
    var suma2= function(num1,num2)
    {
        var num1 = num1;
        var num2= num2;

        return num1+num2;
    }

    document.write(suma2(40,50));
</script>


</body>
</html>