<?php

include '../controlador/UsuarioControlador.php';


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["txtCedula"]) && isset($_POST["txtNombres"]) &&
        isset($_POST["txtApellidos"]) && isset($_POST["txtCargo"]) &&
        isset($_POST["txtTel_usu"]) &&
        isset($_POST["txtNickname"]) && isset($_POST["txtContraseña"]) &&
        isset($_POST["txtFoto"]) && isset($_POST["txtcorreo_electronico"]) &&
        isset($_POST["txtCodigo_sede"])
    ) {
        $txtCedula = ($_POST["txtCedula"]);
        $txtNombres =  ($_POST["txtNombres"]);
        $txtApellidos = ($_POST["txtApellidos"]);
        $txtCargo =  ($_POST["txtCargo"]);
        $txtTel_usu = ($_POST["txtTel_usu"]);
        $txtTipo_de_usuario = ($_POST["taskOption"]);
        $txtNickname = ($_POST["txtNickname"]);
        $txtContraseña = ($_POST["txtContraseña"]);
        $txtFoto = ($_POST["txtFoto"]);
        $txtcorreo_electronico = ($_POST["txtcorreo_electronico"]);
        $txtCodigo_sede = ($_POST["txtCodigo_sede"]);
        // 
        if (UsuarioControlador::crearUsuario($txtCedula, $txtNombres, $txtApellidos, $txtCargo, $txtTel_usu, $txtTipo_de_usuario, $txtNickname, $txtContraseña, $txtFoto, $txtcorreo_electronico, $txtCodigo_sede, "nuevo")) {
            $usuario = UsuarioControlador::getUsuario($txtNickname, $txtContraseña, "consultar");
            $_SESSION["Usuario"] = array(
                "Cedula" => $usuario->getCedula(),
                "Nombres" => $usuario->getNombres(),
                "Apellidos" => $usuario->getApellidos(),
                "Cargo" => $usuario->getCargo(),
                "Tel_usu" => $usuario->getTel_usu(),
                "tipo_de_usuario" => $usuario->getTipo_de_usuario(),
                "Nickname" => $usuario->getNickname(),
                "Contraseña" => $usuario->getContraseña(),
                "Foto" => $usuario->getFoto(),
                "correo_electronico" => $usuario->getCorreo_electronico(),
                "Codigo_sede" => $usuario->getCodigo_sede(),
                "Accion" => $usuario->getAccion()
            );

            header("location:list_usuarios.php");
        }
    }
} else {

    header("location:registro.php?error=1");
}
