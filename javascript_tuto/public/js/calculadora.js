var cifra="";
var acumulado =0;
var sumar = false;
var restar=false;
var p_operacion = true;

function display_number(numero){

    document.getElementById("display").value = cifra+numero;

    cifra = document.getElementById("display").value;


    }


function suma(){

    if (restar){

        acumulado = acumulado-parseInt(cifra);
        document.getElementById("display").value=acumulado;
    }else {
    acumulado = acumulado+parseInt(cifra);
    document.getElementById("display").value=acumulado;
    }
    console.log(acumulado);
    cifra = "";
    sumar= true;
    restar=false;
    p_operacion=false;
}


function resta(){
if(p_operacion==false){
    if(sumar){
        acumulado=acumulado+parseInt(cifra);
        document.getElementById("display").value=acumulado;
    }else{

    acumulado=acumulado-parseInt(cifra);
    document.getElementById("display").value=acumulado;
    }}else{

    acumulado=parseInt(cifra);
    p_operacion=false;
}
    cifra="";
    restar=true;
    sumar=false;

}



function resultado(){
    if(sumar){
        document.getElementById("display").value=acumulado+parseInt(cifra);
    }else if(restar){
        document.getElementById("display").value=acumulado-parseInt(cifra);
    }

    acumulado=parseInt(document.getElementById("display").value);
    cifra=0;

}

