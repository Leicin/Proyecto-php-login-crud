<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
     * Organismo
     */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["txtTipo_equi"]) && isset($_POST["txtFabri_equi"])
    && isset($_POST["txtModelo_equi"])&& isset($_POST["txtSerial_equi"]) 
    && isset($_POST["txtUbi_equi"]) && isset($_POST["txtIden_equi"]))
     {

        $txtTipo_equi = ($_POST["txtTipo_equi"]);
        $txtFabri_equi = ($_POST["txtFabri_equi"]);
        $txtModelo_equi = ($_POST["txtModelo_equi"]);
        $txtSerial_equi =  ($_POST["txtSerial_equi"]);
        $txtUbi_equi = ($_POST["txtUbi_equi"]);
        $txtIden_equi =  ($_POST["txtIden_equi"]);
     
    
        $resultado = array("estado" => "true");
    
    
            if (UsuarioControlador::info_equi($txtTipo_equi, $txtFabri_equi, $txtModelo_equi, $txtSerial_equi, $txtUbi_equi, $txtIden_equi )) {
                
    
    
                return print(json_encode($resultado));
            }
        }
    
    
    }
    $resultado = array("estado" => "false");
    
    return print(json_encode($resultado));
