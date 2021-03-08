<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
     * Validaciion de envio de actividades_realizadas
     */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["verisi"]) && isset($_POST["insp"])
    && isset($_POST["revis"])&& isset($_POST["ajus"]) 
    && isset($_POST["prog"]) && isset($_POST["punto"])
    && isset($_POST["peso"]) && isset($_POST["elabo"]))
     {

        $verisi = ($_POST["verisi"]);
        $insp = ($_POST["insp"]);
        $revis = ($_POST["revis"]);
        $ajus =  ($_POST["ajus"]);
        $prog = ($_POST["prog"]);
        $punto =  ($_POST["punto"]);
        $peso = ($_POST["peso"]);
        $elabo =  ($_POST["elabo"]);
     
    
        $resultado = array("estado" => "true");
    
    
            if (UsuarioControlador::activi_realizadas($verisi, $insp, $revis, $ajus, $prog, $punto, $peso, $elabo )) {
                
    
    
                return print(json_encode($resultado));
            }
        }
    
    
    }
    $resultado = array("estado" => "false");
    
    return print(json_encode($resultado));
