(function(){

    //Variables

    var lista = document.getElementById("lista"),
        tareaInput = document.getElementById("tareaInput"),
        btnNuevaTarea = document.getElementById("btn-agregar");

    //Funciones

    var agregarTarea = function () {
        alert("Agregar Tarea");

    };
    var comprobarInput = function(){
        alert("Comprobar Input");

    };
    var eliminarTarea = function(){
        alert("Eliminar Tarea");

    };

    //Eventos

        //AgregarTarea

    btnNuevaTarea.addEventListener("click", agregarTarea);

        //Comprobar Input

    tareaInput.addEventListener("click", comprobarInput);

    //Borrando Elementos de la lista
    for (var i=0; i<= lista.children.length -1;i++){

        lista.children[i].addEventListener("click", eliminarTarea);


    }

}())