<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap19 DOM Document Object Model Practica</title>

    {!! Html::style('css/cap19.css') !!}
</head>
<body>

<form action="">

    <input type="button" value="Cambio de Tamaño" onclick="zoom()">
</form>


<img id="thumb" class="thumb" src="http://lorempixel.com/400/400/" width="400" alt="">

<script>
    
    var zoom = function(){

        var thumb = document.getElementById("thumb");

        if (thumb.className =="thumb")
        {
            thumb.className="thumb grande";
        }else {

            thumb.className="thumb";
        }
    }
</script>

</body>
</html>