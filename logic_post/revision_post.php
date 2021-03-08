<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
     * registro verificación inicial
     */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["txtObserva"]) && isset($_POST["txtItem"])
    && isset($_POST["txtRealizado"]) && isset($_POST["txtRevisado"])
    && isset($_POST["txtFecha"])
    )
     {

        $txtObserva = ($_POST["txtObserva"]);
        $txtItem = ($_POST["txtItem"]);
        $txtRealizado = ($_POST["txtRealizado"]);
        $txtRevisado = ($_POST["txtRevisado"]);
        $txtFecha = ($_POST["txtFecha"]);
      
    
      
     
    
        $resultado = array("estado" => "true");
    
    
            if (UsuarioControlador::revision($txtObserva, $txtItem,$txtRealizado, $txtRevisado, $txtFecha )) {
                
    
    
                return print(json_encode($resultado));
            }
        }
    
    
    }
    $resultado = array("estado" => "false");
    
    return print(json_encode($resultado));
