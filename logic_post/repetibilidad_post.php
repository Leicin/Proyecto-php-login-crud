<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
 * Validaciion de envio de actividades_realizadas
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST["txtCarga_repe"]) 
        && isset($_POST["txtIndi_repe1"])
        && isset($_POST["txtError_repe1"])
        && isset($_POST["txtIndi_repe2"])
        && isset($_POST["txtError_repe2"])
        && isset($_POST["txtIndi_repe3"])
        && isset($_POST["txtError_repe3"]) 
        && isset($_POST["txtIndi_repe4"])
        && isset($_POST["txtError_repe4"]) 
        && isset($_POST["txtIndi_repe5"])
        && isset($_POST["txtError_repe5"]) 
    ) {

        $txtCarga_repe = ($_POST["txtCarga_repe"]);
        $txtIndi_repe1 = ($_POST["txtIndi_repe1"]);
        $txtError_repe1 = ($_POST["txtError_repe1"]);
        $txtIndi_repe2 =  ($_POST["txtIndi_repe2"]);
        $txtError_repe2 = ($_POST["txtError_repe2"]);
        $txtIndi_repe3 =  ($_POST["txtIndi_repe3"]);
        $txtError_repe3 = ($_POST["txtError_repe3"]);
        $txtIndi_repe4 =  ($_POST["txtIndi_repe4"]);
        $txtError_repe4 = ($_POST["txtError_repe4"]);
        $txtIndi_repe5 =  ($_POST["txtIndi_repe5"]);
        $txtError_repe5 = ($_POST["txtError_repe5"]);


        $resultado = array("estado" => "true");


        if (UsuarioControlador::repetibi(
            $txtCarga_repe,
            $txtIndi_repe1,
            $txtError_repe1,
            $txtIndi_repe2,
            $txtError_repe2,
            $txtIndi_repe3,
            $txtError_repe3,
            $txtIndi_repe4,
            $txtError_repe4,
            $txtIndi_repe5,
            $txtError_repe5
         
          
        )) {



            return print(json_encode($resultado));
        }
    }
}
$resultado = array("estado" => "false");

return print(json_encode($resultado));
