<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
     * registroempresa
     */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["txtNii"]) && isset($_POST["txtNom_emp"])
    && isset($_POST["txtDir_emp"]) && isset($_POST["txtTel_emp"])
    && isset($_POST["txtCorreo_emp"]) && isset($_POST["txtImg"]))
     {

        $txtNii = ($_POST["txtNii"]);
        $txtNom_emp = ($_POST["txtNom_emp"]);
        $txtDir_emp = ($_POST["txtDir_emp"]);
        $txtTel_emp = ($_POST["txtTel_emp"]);
        $txtCorreo_emp = ($_POST["txtCorreo_emp"]);
        $txtImg = ($_POST["txtImg"]);
      
     
    
        $resultado = array("estado" => "true");
    
    
            if (UsuarioControlador::registro_empresas($txtNii, $txtNom_emp, $txtDir_emp, $txtTel_emp, $txtCorreo_emp, $txtImg )) {
                
    
    
                return print(json_encode($resultado));
            }
        }
    
    
    }
    $resultado = array("estado" => "false");
    
    return print(json_encode($resultado));
