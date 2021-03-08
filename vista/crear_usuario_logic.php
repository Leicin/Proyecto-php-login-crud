<?php

include '../controlador/UsuarioControlador.php';


session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (
        isset($_POST["txtCedula"]) &&
        isset($_POST["txtNombres"]) && isset($_POST["txtApellidos"]) &&
        isset($_POST["txtCargo"]) && isset($_POST["txtTel_usu"]) &&
        isset($_POST["txtTipo_de_usuario"]) && isset($_POST["txtNickname"]) &&
        isset($_POST["txtContraseña"]) && isset($_POST["txtFoto"]) &&
        isset($_POST["txtcorreo_electronico"]) && isset($_POST["txtCodigo_sede"])

    ) {
        $txtCedula = ($_POST["txtCedula"]);
        $txtNombres = ($_POST["txtNombres"]);
        $txtApellidos = ($_POST["txtApellidos"]);
        $txtCargo = ($_POST["txtCargo"]);
        $txtTel_usu = ($_POST["txtTel_usu"]);
        $txtTipo_de_usuario = ($_POST["txtTipo_de_usuario"]);
        $txtNickname = ($_POST["txtNickname"]);
        $txtContraseña = ($_POST["txtContraseña"]);
        $txtFoto = ($_POST["txtFoto"]);
        $txtcorreo_electronico = ($_POST["txtcorreo_electronico"]);
        $txtCodigo_sede = ($_POST["txtCodigo_sede"]);


        if (isset($_POST["txtCedula"])) {
            $usuario = UsuarioControlador::crearUsuario(
                $txtCedula,
                $txtNombres,
                $txtApellidos,
                $txtCargo,
                $txtTel_usu,
                $txtTipo_de_usuario,
                $txtNickname,
                $txtContraseña,
                $txtFoto,
                $txtcorreo_electronico,
                $txtCodigo_sede,
                'editar'
            );

            if ($usuario) {
                header("Location:list_usuarios.php");
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $page = 1;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        }

        $fila = UsuarioControlador::getUsuarios($page);
    }
}
