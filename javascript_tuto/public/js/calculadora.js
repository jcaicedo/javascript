var cifra="";
var acumulado =0;
var sumar = false;

function display_number(numero){

    document.getElementById("display").value = cifra+numero;

    cifra = document.getElementById("display").value;


    }


function suma(){
    acumulado = acumulado+parseInt(cifra);
    document.getElementById("display").value=acumulado;
    console.log(acumulado);
    cifra = "";
    sumar= true;
}

function resultado(){
    if(sumar){
        document.getElementById("display").value=acumulado+parseInt(cifra);
    }

}


