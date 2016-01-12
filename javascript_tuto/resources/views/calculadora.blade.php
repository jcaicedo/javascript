<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>

    {!! Html::style('css/calculadora.css') !!}
</head>

<body>

<table width="15%" border="1">
    <tr>
        <td colspan="4" align="center">
            <input name="display" type="text" class="color_display" id="display" size="25"></td>
    </tr>
    <tr>
        <td width="26%"><input name="button" type="button" class="numero" id="button" value="+" onclick="suma()"></td>
        <td width="21%"><input name="button2" type="button" class="numero" id="button2" value="-" onclick="resta()"></td>
        <td width="21%"><input name="button3" type="button" class="numero" id="button3" value="*" ></td>
        <td width="32%"><input name="button4" type="button" class="numero" id="button4" value="/" ></td>
    </tr>
    <tr>
        <td><input name="num7" type="button" class="numero" id="num7" value="7" onclick="display_number(7)"></td>
        <td><input name="num8" type="button" class="numero" id="num8" value="8" onclick="display_number(8)"></td>
        <td><input name="num9" type="button" class="numero" id="num9" value="9" onclick="display_number(9)"></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><input name="num4" type="button" class="numero" id="num4" value="4" onclick="display_number(4)"></td>
        <td><input name="num5" type="button" class="numero" id="num5" value="5" onclick="display_number(5)"></td>
        <td><input name="num6" type="button" class="numero" id="num6" value="6" onclick="display_number(6)"></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><input name="num1" type="button" class="numero" id="num1" value="1" onclick="display_number(1)" ></td>
        <td><input name="num2" type="button" class="numero" id="num2" value="2" onclick="display_number(2)"></td>
        <td><input name="num3" type="button" class="numero" id="num3" value="3" onclick="display_number(3)"></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><input name="num0" type="button" class="numero" id="num0" value="0" ></td>
        <td><input name="button17" type="button" class="numero" id="button17" value=","></td>
        <td colspan="2"><input name="button12" type="button" class="igual" id="button12" value="=" onclick="resultado()" ></td>
    </tr>
</table>



{!! Html::script('js/calculadora.js') !!}

<script>
    document.getElementById("display").value=0;
</script>
</body>
</html>