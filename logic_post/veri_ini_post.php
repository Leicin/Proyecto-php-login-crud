<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
     * registro verificación inicial
     */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["txtExcentre"]) && isset($_POST["txtExacti"]))
     {

        $txtExcentre = ($_POST["txtExcentre"]);
        $txtExacti = ($_POST["txtExacti"]);
      
    
      
     
    
        $resultado = array("estado" => "true");
    
    
            if (UsuarioControlador::verifi_inicial($txtExcentre, $txtExacti )) {
                
    
    
                return print(json_encode($resultado));
            }
        }
    
    
    }
    $resultado = array("estado" => "false");
    
    return print(json_encode($resultado));
