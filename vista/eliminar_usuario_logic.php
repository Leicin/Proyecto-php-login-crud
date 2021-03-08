
<?php

include '../controlador/UsuarioControlador.php';


session_start();



if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (
        isset($_GET["Cedula"])
    ) {


        $Cedula = ($_GET["Cedula"]);

        if (UsuarioControlador::eliminarUsuario($Cedula)) {
            header("Location:list_usuarios.php");
        }
    }
} else {

    header("Location:list_usuarios.php?error=1");
}