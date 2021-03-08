<?php

include '../controlador/UsuarioControlador.php';


session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["txtNii"]) && isset($_POST["txtNom_emp"])
        && isset($_POST["txtDir_emp"]) && isset($_POST["txtTel_emp"])
        && isset($_POST["txtRes_emp"]) && isset($_POST["txtCiudad_emp"])
    ) {

        $txtNii = ($_POST["txtNii"]);
        $txtNom_emp = ($_POST["txtNom_emp"]);
        $txtDir_emp = ($_POST["txtDir_emp"]);
        $txtTel_emp = ($_POST["txtTel_emp"]);
        $txtRes_emp = ($_POST["txtRes_emp"]);
        $txtCiudad_emp = ($_POST["txtCiudad_emp"]);

        /**
         * condicion  para editar por medio del id
         */
        if (isset($_POST["id"])) {



            if (UsuarioControlador::crearempresanueva(
                $txtNii,
                $txtNom_emp,
                $txtDir_emp,
                $txtTel_emp,
                $txtRes_emp,
                $txtCiudad_emp,
                ($_POST["id"])
            )) {
                header("Location:listar_empresa.php");
            }
        } else {

            if (UsuarioControlador::crearempresanueva(
                $txtNii,
                $txtNom_emp,
                $txtDir_emp,
                $txtTel_emp,
                $txtRes_emp,
                $txtCiudad_emp,
                null
                
            )) {
                header("Location:listar_empresa.php");
            }
        }
    } else {

        header("location:empresanueva.php?error=1");
    }
}
