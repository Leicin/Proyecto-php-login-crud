<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
 * Validaciion de envio de exactitud
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST["txtCarga_exa1"])
        && isset($_POST["txtIndi_exa1"])
        && isset($_POST["txtError_exa1"])
        && isset($_POST["txtCarga_exa2"])
        && isset($_POST["txtIndi_exa2"])
        && isset($_POST["txtError_exa2"])
        && isset($_POST["txtCarga_exa3"])
        && isset($_POST["txtIndi_exa3"])
        && isset($_POST["txtError_exa3"])
        && isset($_POST["txtCarga_exa4"])
        && isset($_POST["txtIndi_exa4"])
        && isset($_POST["txtError_exa4"])
        && isset($_POST["txtCarga_exa5"])
        && isset($_POST["txtIndi_exa5"])
        && isset($_POST["txtError_exa5"])
        && isset($_POST["txtCarga_exa6"])
        && isset($_POST["txtIndi_exa6"])
        && isset($_POST["txtError_exa6"])
        && isset($_POST["txtCarga_exa7"])
        && isset($_POST["txtIndi_exa7"])
        && isset($_POST["txtError_exa7"])
        && isset($_POST["txtCarga_exa8"])
        && isset($_POST["txtIndi_exa8"])
        && isset($_POST["txtError_exa8"])
        && isset($_POST["txtCarga_exa9"])
        && isset($_POST["txtIndi_exa9"])
        && isset($_POST["txtError_exa9"])
    ) {

        $txtCarga_exa1 = ($_POST["txtCarga_exa1"]);
        $txtIndi_exa1 = ($_POST["txtIndi_exa1"]);
        $txtError_exa1 = ($_POST["txtError_exa1"]);
        $txtCarga_exa2 =  ($_POST["txtCarga_exa2"]);
        $txtIndi_exa2 = ($_POST["txtIndi_exa2"]);
        $txtError_exa2 =  ($_POST["txtError_exa2"]);
        $txtCarga_exa3 = ($_POST["txtCarga_exa3"]);
        $txtIndi_exa3 =  ($_POST["txtIndi_exa3"]);
        $txtError_exa3 = ($_POST["txtError_exa3"]);
        $txtCarga_exa4 =  ($_POST["txtCarga_exa4"]);
        $txtIndi_exa4 = ($_POST["txtIndi_exa4"]);
        $txtError_exa4 = ($_POST["txtError_exa4"]);
        $txtCarga_exa5 = ($_POST["txtCarga_exa5"]);
        $txtIndi_exa5 = ($_POST["txtIndi_exa5"]);
        $txtError_exa5 = ($_POST["txtError_exa5"]);
        $txtCarga_exa6 =  ($_POST["txtCarga_exa6"]);
        $txtIndi_exa6 = ($_POST["txtIndi_exa6"]);
        $txtError_exa6 =  ($_POST["txtError_exa6"]);
        $txtCarga_exa7 = ($_POST["txtCarga_exa7"]);
        $txtIndi_exa7 =  ($_POST["txtIndi_exa7"]);
        $txtError_exa7 = ($_POST["txtError_exa7"]);
        $txtCarga_exa8 =  ($_POST["txtCarga_exa8"]);
        $txtIndi_exa8 = ($_POST["txtIndi_exa8"]);
        $txtError_exa8 = ($_POST["txtError_exa8"]);
        $txtCarga_exa9 =  ($_POST["txtCarga_exa9"]);
        $txtIndi_exa9 = ($_POST["txtIndi_exa9"]);
        $txtError_exa9 = ($_POST["txtError_exa9"]);


        $resultado = array("estado" => "true");


        if (UsuarioControlador::exactitud(
            $txtCarga_exa1,
            $txtIndi_exa1,
            $txtError_exa1,
            $txtCarga_exa2,
            $txtIndi_exa2,
            $txtError_exa2,
            $txtCarga_exa3,
            $txtIndi_exa3,
            $txtError_exa3,
            $txtCarga_exa4,
            $txtIndi_exa4,
            $txtError_exa4,
            $txtCarga_exa5,
            $txtIndi_exa5,
            $txtError_exa5,
            $txtCarga_exa6,
            $txtIndi_exa6,
            $txtError_exa6,
            $txtCarga_exa7,
            $txtIndi_exa7,
            $txtError_exa7,
            $txtCarga_exa8,
            $txtIndi_exa8,
            $txtError_exa8,
            $txtCarga_exa9,
            $txtIndi_exa9,
            $txtError_exa9


        )) {



            return print(json_encode($resultado));
        }
    }
}
$resultado = array("estado" => "false");

return print(json_encode($resultado));
