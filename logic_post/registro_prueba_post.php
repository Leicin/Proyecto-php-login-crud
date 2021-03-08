<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
     * registroempresa
     */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["txtTipo_equi"]) && isset($_POST["txtFabricante"])
    && isset($_POST["txtModelo"]) && isset($_POST["txtSerial"])
    && isset($_POST["txtUbicacion"]) && isset($_POST["txtIdentificacion"]))
     {

        $txtTipo_equi = ($_POST["txtTipo_equi"]);
        $txtFabricante = ($_POST["txtFabricante"]);
        $txtModelo = ($_POST["txtModelo"]);
        $txtSerial = ($_POST["txtSerial"]);
        $txtUbicacion = ($_POST["txtUbicacion"]);
        $txtIdentificacion = ($_POST["txtIdentificacion"]);
      
     
    
        $resultado = array("estado" => "true");
    
    
            if (UsuarioControlador::regis_prueba($txtTipo_equi, $txtFabricante, $txtModelo, $txtSerial, $txtUbicacion, $txtIdentificacion )) {
                
    
    
                return print(json_encode($resultado));
            }
        }
    
    
    }
    $resultado = array("estado" => "false");
    
    return print(json_encode($resultado));
