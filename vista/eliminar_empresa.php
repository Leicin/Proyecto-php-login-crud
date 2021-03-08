<?php

include '../controlador/UsuarioControlador.php';


session_start();



if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (
        isset($_GET["id_empresa"])
    ) {


        $id_empresa = ($_GET["id_empresa"]);

        if (UsuarioControlador::eliminarEmpresa($id_empresa)) {
            header("Location:listar_empresa.php");
        }
    }
} else {

    header("Location:listar_empresa.php?error=1");
}
