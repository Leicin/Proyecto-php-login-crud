<?php

include '../controlador/UsuarioControlador.php';


session_start();

header("Content-type: application/json");
$resultado = array();


if (isset($_POST["txtNickname"]) && isset($_POST["txtContraseña"])) {

    $txtNickname = ($_POST["txtNickname"]);
    $txtContrasena =  ($_POST["txtContraseña"]);



    $resultado = array("estado" => "true");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (UsuarioControlador::login($txtNickname, $txtContrasena,"Accion")) {
            $usuario = UsuarioControlador::getUsuario($txtNickname, $txtContrasena, "consultar");

            $_SESSION["usuario"] = array(
                "Cedula" => $usuario->getCedula(),
                "Nombres" => $usuario->getNombres(),
                "Apellidos" => $usuario->getApellidos(),
                "Cargo" => $usuario->getCargo(),
                "Tel_usu" => $usuario->getTel_usu(),
                "Tipo_de_usuario" =>$usuario->getTipo_de_usuario(),
                "Nickname" =>$usuario->getNickname(),
                "Contrasena" =>$usuario->getContraseña(),
                "Foto"=>$usuario->getFoto(),
                "correo_electronico"=>$usuario->getCorreo_electronico(),
                "Codigo_sede"=>$usuario->getCodigo_sede()
            );
          
            return print(json_encode($resultado));
        }
    }
}


$resultado = array("estado" => "false");

return print(json_encode($resultado));