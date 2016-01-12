var cifra="";
var acumulado =0;
var sumar = false;
var restar = false;

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


function resta(){

    if (sumar){
        acumulado = acumulado+parseInt(cifra);
        document.getElementById("display").value=acumulado;
    }else{

    acumulado = acumulado-parseInt(cifra);
    document.getElementById("display").value=acumulado;
    console.log(acumulado);
    }

    cifra = "";
    sumar=false;
    restar= true;


}


function resultado(){
    if(sumar){
        document.getElementById("display").value=acumulado+parseInt(cifra);
    }else if(restar){

        document.getElementById("display").value=acumulado-parseInt(cifra);
    }

}


