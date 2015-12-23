<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cap11 Scope</title>
</head>
<body>

<script>

    (function(){
        var variableGlobal = "Esta es Global";

        var miFuncion = function()
        {
            var variableLocal = "Esta es Local";

            var FuncionLocal = function(){

                //var variableLocal = "Esta es variable local, dentro del a funcionlocal";
                alert(variableLocal);
            }
            FuncionLocal();
        };

        miFuncion();

    }())






</script>

</body>
</html>