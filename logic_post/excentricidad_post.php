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
        isset($_POST["txtCarga_exce"]) 
        && isset($_POST["txtIndi_exce1"])
        && isset($_POST["txtError_exce1"])
        && isset($_POST["txtIndi_exce2"])
        && isset($_POST["txtError_exce2"])
        && isset($_POST["txtIndi_exce3"])
        && isset($_POST["txtError_exce3"]) 
        && isset($_POST["txtIndi_exce4"])
        && isset($_POST["txtError_exce4"]) 
        && isset($_POST["txtIndi_exce5"])
        && isset($_POST["txtError_exce5"]) 
    ) {

        $txtCarga_exce = ($_POST["txtCarga_exce"]);
        $txtIndi_exce1 = ($_POST["txtIndi_exce1"]);
        $txtError_exce1 = ($_POST["txtError_exce1"]);
        $txtIndi_exce2 =  ($_POST["txtIndi_exce2"]);
        $txtError_exce2 = ($_POST["txtError_exce2"]);
        $txtIndi_exce3 =  ($_POST["txtIndi_exce3"]);
        $txtError_exce3 = ($_POST["txtError_exce3"]);
        $txtIndi_exce4 =  ($_POST["txtIndi_exce4"]);
        $txtError_exce4 = ($_POST["txtError_exce4"]);
        $txtIndi_exce5 =  ($_POST["txtIndi_exce5"]);
        $txtError_exce5 = ($_POST["txtError_exce5"]);


        $resultado = array("estado" => "true");


        if (UsuarioControlador::excentricidad(
            $txtCarga_exce,
            $txtIndi_exce1,
            $txtError_exce1,
            $txtIndi_exce2,
            $txtError_exce2,
            $txtIndi_exce3,
            $txtError_exce3,
            $txtIndi_exce4,
            $txtError_exce4,
            $txtIndi_exce5,
            $txtError_exce5
         
          
        )) {



            return print(json_encode($resultado));
        }
    }
}
$resultado = array("estado" => "false");

return print(json_encode($resultado));
