<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
     * registro verificación inicial
     */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["txtCapacidad"]) && isset($_POST["txtValorD"])
    && isset($_POST["txtValorE"]) && isset($_POST["txtClase"])
    && isset($_POST["txtCapacidadMin"])
    )
     {

        $txtCapacidad = ($_POST["txtCapacidad"]);
        $txtValorD = ($_POST["txtValorD"]);
        $txtValorE = ($_POST["txtValorE"]);
        $txtClase = ($_POST["txtClase"]);
        $txtCapacidadMin = ($_POST["txtCapacidadMin"]);
      
    
      
     
    
        $resultado = array("estado" => "true");
    
    
            if (UsuarioControlador::requis_metrolo($txtCapacidad, $txtValorD,$txtValorE, $txtClase, $txtCapacidadMin )) {
                
    
    
                return print(json_encode($resultado));
            }
        }
    
    
    }
    $resultado = array("estado" => "false");
    
    return print(json_encode($resultado));
