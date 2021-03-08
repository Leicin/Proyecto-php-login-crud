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
    && isset($_POST["txtRes_emp"])     && isset($_POST["txtCiudad_emp"])) 
     {

        $txtNii = ($_POST["txtNii"]);
        $txtNom_emp = ($_POST["txtNom_emp"]);
        $txtDir_emp = ($_POST["txtDir_emp"]);
        $txtTel_emp = ($_POST["txtTel_emp"]);
        $txtRes_emp = ($_POST["txtRes_emp"]);
        $txtCiudad_emp = ($_POST["txtCiudad_emp"]);
       
       
      
     
    
        $resultado = array("estado" => "true");
    
    
            if (UsuarioControlador::registro_empresas($txtNii, $txtNom_emp, $txtDir_emp, $txtTel_emp, $txtRes_emp, $txtCiudad_emp)) {
                
    
    
                header("location:listar_empresa.php");
            }
        }
    
    
    }
    else {

        header("location:registro_empresa.php?error=1");
    }
