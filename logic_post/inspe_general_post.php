<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
 * Validaciion de envio de actividades_realizadas
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST["txt_cable"]) && isset($_POST["txt_plato"])
        && isset($_POST["txt_porta"]) && isset($_POST["txt_cercaza"])
        && isset($_POST["txt_cabina"]) && isset($_POST["txt_forro"])
        && isset($_POST["txt_tecla"]) && isset($_POST["txt_nivel"])
        && isset($_POST["txt_patas"]) && isset($_POST["txt_tarje"])
        && isset($_POST["txt_display"]) && isset($_POST["txt_conect"])
        && isset($_POST["txt_celdas"]) && isset($_POST["txt_guias"])
        && isset($_POST["txt_frontal"]) && isset($_POST["txt_cortos"])
        && isset($_POST["txt_torni"]) && isset($_POST["txt_sist"])
        && isset($_POST["txt_inter"]) && isset($_POST["txt_humedad"])
    ) {

        $txt_cable = ($_POST["txt_cable"]);
        $txt_plato = ($_POST["txt_plato"]);
        $txt_porta = ($_POST["txt_porta"]);
        $txt_cercaza =  ($_POST["txt_cercaza"]);
        $txt_cabina = ($_POST["txt_cabina"]);
        $txt_forro =  ($_POST["txt_forro"]);
        $txt_tecla = ($_POST["txt_tecla"]);
        $txt_nivel =  ($_POST["txt_nivel"]);
        $txt_patas = ($_POST["txt_patas"]);
        $txt_tarje =  ($_POST["txt_tarje"]);
        $txt_display = ($_POST["txt_display"]);
        $txt_conect =  ($_POST["txt_conect"]);
        $txt_celdas = ($_POST["txt_celdas"]);
        $txt_guias =  ($_POST["txt_guias"]);
        $txt_frontal = ($_POST["txt_frontal"]);
        $txt_cortos =  ($_POST["txt_cortos"]);
        $txt_torni = ($_POST["txt_torni"]);
        $txt_sist =  ($_POST["txt_sist"]);
        $txt_inter = ($_POST["txt_inter"]);
        $txt_humedad =  ($_POST["txt_humedad"]);


        $resultado = array("estado" => "true");


        if (UsuarioControlador::inspe_general(
            $txt_cable,
            $txt_plato,
            $txt_porta,
            $txt_cercaza,
            $txt_cabina,
            $txt_forro,
            $txt_tecla,
            $txt_nivel,
            $txt_patas,
            $txt_tarje,
            $txt_display,
            $txt_conect,
            $txt_celdas,
            $txt_guias,
            $txt_frontal,
            $txt_cortos,
            $txt_torni,
            $txt_sist,
            $txt_inter,
            $txt_humedad
        )) {



            return print(json_encode($resultado));
        }
    }
}
$resultado = array("estado" => "false");

return print(json_encode($resultado));
