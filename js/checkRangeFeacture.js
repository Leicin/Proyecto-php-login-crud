var ranges = [
    [0, 1000],
    [1000, 10000],
    [10000, 100000],
    [1000000, Number.MAX_SAFE_INTEGER]
];






function calcularRequi() {


    /**
     * Formula de resta por medio de los inputs
     */
    var a = Number(document.getElementById('capacidad').value);
    var b = Number(document.getElementById('valorE').value);
    var c = a / b;
    document.getElementById('resultado').value = c;
    checRanges();
    multiplicar();
}


function multiplicar() {

    var d = Number(document.getElementById('valorE').value);
    var e = Number(document.getElementById('segun_resul').value);
    var f = d * e;
    document.getElementById('capacidadMin').value = f;
    checRanges();
}
// /**
//  * Obtengo los valores de los inputs
//  */
// document.getElementById("carga7").value = document.getElementById("carga3").value;
// document.getElementById("indi7").value = document.getElementById("indi3").value;
// document.getElementById("error7").value = document.getElementById("error3").value;




function limpiarFormulario() {
    document.getElementById("F1").reset();
}




function cambioOpciones()

{

    document.getElementById('capacidad').value = document.getElementById('opciones').value;

}




function checRanges() {
    var number = $("#resultado").val();
    var indexRage = -1;
    var respuesta = "";
    var resputesta2 = 0;
    ranges.forEach(function(value, index) {
        //si necesita el rango abierto () pongale mayor o menor igual. 
        if (number > value[0] && number <= value[1]) {
            //$("#range").val("El numero esta en el rango [" + value[0] + ", " + value[1] + "]");            
            indexRage = index;
        }
    });
    switch (indexRage) {
        case 0:
            respuesta = "||||";
            respuesta2 = 10;
            break;
        case 1:
            respuesta = "|||";
            respuesta2 = 20;
            break;
        case 2:
            respuesta = "||";
            respuesta2 = 50;
            break;
        case 3:
            respuesta = "|";
            respuesta2 = 100;
            break;
        default:
            respuesta = "Capacidad no se encuentra en los rangos";
            break;

    }
    $("#clase").val(respuesta);
    $("#segun_resul").val(respuesta2);

}