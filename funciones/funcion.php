<?php
function getTipo_de_usuario($p)
{

    $Tipo_de_usuario = "";
    switch ($p) {
        case 1:
            $Tipo_de_usuario = "Administrador";
            break;

        // case 2:
        //     $Tipo_de_usuario = "supervisor";
        //     break;

        // case 3:
        //     $Tipo_de_usuario = "colaborador";
        //     break;

        case 2:
            $Tipo_de_usuario= "Usuario";
             break;

        default:
            $Tipo_de_usuario = "- No definido -";
            break;

            
    }

    return $Tipo_de_usuario;
}