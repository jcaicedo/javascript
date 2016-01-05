<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap21-22 Validacion Formularios</title>

</head>
<body>

<form action="" name="formulario" method="get">

    <input type="text" name="nombre" id="nombre" maxlength="30" placeholder="Nombre: " >
    <br>
    <input type="radio" name="sexo" id="hombre" value="Hombre"> Hombre
    <input type="radio" name="sexo" id="mujer" value="mujer" > Mujer
    <br>

    <input type="checkbox" name="terminos" id="terminos"> Terminos y Condiciones
    <br>
    <input type="submit" id="btn" name="btn" value="Envia">


</form>


<script>

    (function(){

        var formulario = document.getElementsByName('formulario')[0],
                elementos = formulario.elements,
                boton = document.getElementById('btn');

        var validarNombre = function(e){

            if (formulario.nombre.value==0){
                    alert("completa campo");
                e.preventDefault();
            }

        };

        var validarRadio = function(e){

            if(formulario.sexo[0].checked == true || formulario.sexo[1].checked == true){


            }else{
                alert("completa el campo sexo");
                e.preventDefault();
            }
        };

        var validarCheckbox = function(e){
            if (formulario.terminos.checked == false){
                alert("Acepta los terminos");
                e.preventDefault();
            }
        };

        var validar = function (e) {
            validarNombre(e);
            validarRadio(e);
            validarCheckbox(e);
        };


        formulario.addEventListener("submit",validar);

    }())

</script>





</body>
</html>