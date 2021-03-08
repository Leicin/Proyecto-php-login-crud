<?php
include 'Conexion.php';
include '../entidades/Usuario.php';


class UsuarioDao extends Conexion
{

    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    /**
     * Metodo que sirve para validar el login
     */

    public static function login($usuario)
    {

        $query = "SELECT * FROM usuarios WHERE Nickname= :Nickname AND Contraseña= :Contrasena";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $usu = $usuario->getNickname();
        $pass = $usuario->getContraseña();

        $resultado->bindValue(":Nickname", $usu);
        $resultado->bindValue(":Contrasena", $pass);

        $resultado->execute();
        /**
         * Evitar Inyecciones sql
         */
        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if (
                $filas["Nickname"] == $usuario->getNickname()
                && $filas["Contraseña"] == $usuario->getContraseña()


            ) {
                return true;
            }
        }

        return false;
    }


    public static function getListarsedes()
    {

        $query = "SELECT Codigo_sede,Nombre,Dirección,Telefono FROM sedes";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filassedes = $resultado->fetchAll();


        return $filassedes;
    }



    public static function getUsuario($usuario)

    {
        $query = "CALL crud_usuarios(:Cedula,:Nombres,:Apellidos,:Cargo,:Tel_usu,:Tipo_de_usuario,:Nickname,:Contrasena,:Foto,:Correo_electronico,:Codigo_sede,:Accion)";

        self::getConexion();
        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":Cedula", $usuario->getCedula());
        $resultado->bindValue(":Nombres", $usuario->getNombres());
        $resultado->bindValue(":Apellidos", $usuario->getApellidos());
        $resultado->bindValue(":Cargo", $usuario->getCargo());
        $resultado->bindValue(":Tel_usu", $usuario->getTel_usu());
        $resultado->bindValue(":Tipo_de_usuario", $usuario->getTipo_de_usuario());
        $resultado->bindValue(":Nickname", $usuario->getNickname());
        $resultado->bindValue(":Contrasena", $usuario->getContraseña());
        $resultado->bindValue(":Foto", $usuario->getFoto());
        $resultado->bindValue(":Correo_electronico", $usuario->getCorreo_electronico());
        $resultado->bindValue(":Codigo_sede", $usuario->getCodigo_sede());
        $resultado->bindValue(":Accion", $usuario->getAccion());

        $resultado->execute();


        $filas = $resultado->fetch();



        $usuario = new Usuario();
        $usuario->setCedula($filas["Cedula"]);
        $usuario->setNombres($filas["Nombres"]);
        $usuario->setApellidos($filas["Apellidos"]);
        $usuario->setCargo($filas["Cargo"]);
        $usuario->setTel_usu($filas["Tel_usu"]);
        $usuario->setTipo_de_usuario($filas["tipo_de_usuario"]);
        $usuario->setNickname($filas["Nickname"]);
        $usuario->setContraseña($filas["Contraseña"]);
        $usuario->setFoto($filas["Foto"]);
        $usuario->setCorreo_electronico($filas["correo_electronico"]);
        $usuario->setCodigo_sede($filas["Codigo_sede"]);


        return $usuario;
    }


    public static function EditarUsuario($usuario)
    {

        $query = "SELECT * FROM USUARIOS WHERE Cedula = :Cedula";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":Cedula", $usuario->getCedula());


        $resultado->execute();

        $filas = $resultado->fetch();


        $usuario = new Usuario();
        $usuario->setCedula($filas["Cedula"]);
        $usuario->setNombres($filas["Nombres"]);
        $usuario->setApellidos($filas["Apellidos"]);
        $usuario->setCargo($filas["Cargo"]);
        $usuario->setTel_usu($filas["Tel_usu"]);
        $usuario->setTipo_de_usuario($filas["tipo_de_usuario"]);
        $usuario->setNickname($filas["Nickname"]);
        $usuario->setContraseña($filas["Contraseña"]);
        $usuario->setFoto($filas["Foto"]);
        $usuario->setCorreo_electronico($filas["correo_electronico"]);
        $usuario->setCodigo_sede($filas["Codigo_sede"]);

        return $usuario;
    }


    public static function crudUsuarios($usuario)
    {

        $query = "CALL crud_usuarios(:Cedula,:Nombres,:Apellidos,:Cargo,:Tel_usu,:Tipo_de_usuario,:Nickname,:Contrasena,:Foto,:Correo_electronico,:Codigo_sede,:Accion)";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":Cedula", $usuario->getCedula());
        $resultado->bindValue(":Nombres", $usuario->getNombres());
        $resultado->bindValue(":Apellidos", $usuario->getApellidos());
        $resultado->bindValue(":Cargo", $usuario->getCargo());
        $resultado->bindValue(":Tel_usu", $usuario->getTel_usu());
        $resultado->bindValue(":Tipo_de_usuario", $usuario->getTipo_de_usuario());
        $resultado->bindValue(":Nickname", $usuario->getNickname());
        $resultado->bindValue(":Contrasena", $usuario->getContraseña());
        $resultado->bindValue(":Foto", $usuario->getFoto());
        $resultado->bindValue(":Correo_electronico", $usuario->getCorreo_electronico());
        $resultado->bindValue(":Codigo_sede", $usuario->getCodigo_sede());
        $resultado->bindValue(":Accion", $usuario->getAccion());
      
        if ($resultado->execute()) {
        
            return true;
        }
      
        return false;
    }



    /**
     * Metodo que sirve para obtener todos los usuarios Listar
     * registro de usuario por tabla paginadas
     */

    public static function getUsuarios($page)
    {
        $query = "SELECT Cedula, Nombres, Apellidos, Cargo, Tel_usu, Tipo_de_usuario, Nickname,Contraseña, Foto, correo_electronico, Codigo_sede FROM usuarios limit 5 offset " . strval(($page * 5 - 5));
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->execute();
        $filas = $resultado->fetchAll();
        return $filas;
    }


    //---------------------------------------------------------------------------------------------------------------------------



    /*   public static function registro_empre($empresa_reg)
    {

        $query = "INSERT INTO registro_emp (
        nii,nom_emp,dir_emp,tel_emp,res_emp,ciudad_emp) VALUES
        (:nii, :nom_emp, :dir_emp, :tel_emp, :res_emp, :ciudad_emp)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":nii", $empresa_reg->getNii());
        $resultado->bindValue(":nom_emp", $empresa_reg->getNom_emp());
        $resultado->bindValue(":dir_emp", $empresa_reg->getDir_emp());
        $resultado->bindValue(":tel_emp", $empresa_reg->getTel_emp());
        $resultado->bindValue(":res_emp", $empresa_reg->getRes_emp());
        $resultado->bindValue(":ciudad_emp", $empresa_reg->getCiudad_emp());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    } */

    /**
     * metodo que sirve para listar todas las empresas
     */

    /*   public static function getListempresas()
    {

        $query = "SELECT id,nii,nom_emp,dir_emp,tel_emp,res_emp,ciudad_emp FROM registro_emp";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();


        return $filas;
    } */

    // /**
    //  * Metodo que sirve para Registrar empresas nuevas
    //  * empieza desde el query y editar datos de empresas
    //  */

    public static function Crearempresanueva($empresa_reg)
    {
        /**
         * Condicion para obtener el usuario metodo editar
         */

        if (is_null($empresa_reg->getId())) {

            $query = "INSERT INTO registro_emp (
                nii,nom_emp,dir_emp,tel_emp,res_emp,ciudad_emp) VALUES
                (:nii, :nom_emp, :dir_emp, :tel_emp, :res_emp, :ciudad_emp)";
        } else {
            $query = "UPDATE registro_emp SET
            nii=:nii,nom_emp=:nom_emp,dir_emp=:dir_emp,tel_emp=:tel_emp,
            res_emp=:res_emp,ciudad_emp=:ciudad_emp WHERE
            id=:id";
        }

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $nii = $empresa_reg->getNii();
        $nom_emp = $empresa_reg->getNom_emp();
        $dir_emp = $empresa_reg->getDir_emp();
        $tel_emp = $empresa_reg->getTel_emp();
        $res_emp = $empresa_reg->getRes_emp();
        $ciudad_emp = $empresa_reg->getCiudad_emp();



        if (!is_null($empresa_reg->getId())) {

            $id = $empresa_reg->getId();
            $resultado->bindValue(":id", $id);
        }





        $resultado->bindValue(":nii", $nii);
        $resultado->bindValue(":nom_emp", $nom_emp);
        $resultado->bindValue(":dir_emp", $dir_emp);
        $resultado->bindValue(":tel_emp", $tel_emp);
        $resultado->bindValue(":res_emp", $res_emp);
        $resultado->bindValue(":ciudad_emp", $ciudad_emp);




        if ($resultado->execute()) {

            return true;
        }

        return false;
    }


    /**
     * Metodo que sirve para obtener un usuario por id para editarlo o buscarlo
     */



    /* public static function editarEmpresa($id)
    {

        $query = "SELECT id,nii,nom_emp,dir_emp,tel_emp,res_emp,ciudad_emp FROM registro_emp WHERE id = :id";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":id", $id);


        $resultado->execute();

        $filas = $resultado->fetch();

        $empresa_reg = new Registro_empresa();
        $empresa_reg->setId($filas["id"]);
        $empresa_reg->setNii($filas["nii"]);
        $empresa_reg->setNom_emp($filas["nom_emp"]);
        $empresa_reg->setDir_emp($filas["dir_emp"]);
        $empresa_reg->setTel_emp($filas["tel_emp"]);
        $empresa_reg->setRes_emp($filas["res_emp"]);
        $empresa_reg->setCiudad_emp($filas["ciudad_emp"]);


        return $empresa_reg;
    }
 */
    /**
     * metodo que sirve para eliminar empresa
     */
    public static function eliminarEmpresa($id)
    {

        $query = "DELETE  FROM registro_emp WHERE id = :id";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":id", $id);


        $resultado->execute();

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }


    /**
     * registro de informacion de equipos
     */
    public static function info_equipo($info_equipo)
    {

        $query = "INSERT INTO info_equipo (
        tipo_equi,fabri_equi,modelo_equi,serial_equi,ubi_equi,iden_equi) VALUES
        (:tipo_equi, :fabri_equi, :modelo_equi, :serial_equi, :ubi_equi, :iden_equi)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":tipo_equi", $info_equipo->getTipo_equi());
        $resultado->bindValue(":fabri_equi", $info_equipo->getFabri_equi());
        $resultado->bindValue(":modelo_equi", $info_equipo->getModelo_equi());
        $resultado->bindValue(":serial_equi", $info_equipo->getSerial_equi());
        $resultado->bindValue(":ubi_equi", $info_equipo->getUbi_equi());
        $resultado->bindValue(":iden_equi", $info_equipo->getIden_equi());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    }



    /**
     * registro de actividades realizadas
     */
    public static function activi_realizadas($acti_realizadas)
    {

        $query = "INSERT INTO activi_realizadas (
        veri_ini,revi_gene,ins_gene,ajus_excen_carga,prog_indicador,ajus_punt_cero,ajus_peso,elabo_proto) VALUES
        (:veri_ini, :revi_gene, :ins_gene, :ajus_excen_carga, :prog_indicador, :ajus_punt_cero, :ajus_peso, :elabo_proto)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":veri_ini", $acti_realizadas->getVeri_ini());
        $resultado->bindValue(":revi_gene", $acti_realizadas->getRevi_gene());
        $resultado->bindValue(":ins_gene", $acti_realizadas->getIns_gene());
        $resultado->bindValue(":ajus_excen_carga", $acti_realizadas->getAjus_excen_carga());
        $resultado->bindValue(":prog_indicador", $acti_realizadas->getProg_indicador());
        $resultado->bindValue(":ajus_punt_cero", $acti_realizadas->getAjus_punt_cero());
        $resultado->bindValue(":ajus_peso", $acti_realizadas->getAjus_peso());
        $resultado->bindValue(":elabo_proto", $acti_realizadas->getElabo_proto());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    }


    /**
     * Metodo para insertar la verificación inicial
     */
    public static function verifi_inicial($veri_inicial)
    {

        $query = "INSERT INTO veri_inicial (
        excentre,exacti) VALUES
        (:excentre, :exacti)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":excentre", $veri_inicial->getExcentre());
        $resultado->bindValue(":exacti", $veri_inicial->getExacti());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    }


    /**
     * Metodo que sirve para registrar inspecciones generales
     */

    public static function inspecci_general($inspe_general)
    {

        $query = "INSERT INTO inspeccion(
        adap_cable,plato,porta_plato,cercaza,cabina,forro_prote,teclado,
        nivel,patas,tarje_prin,display,conectores,celdas,guias,fle_frontal,
        fle_cortos,tornilleria,sistem_meca,pesa_inter,det_hum) VALUES
        (:adap_cable, :plato, :porta_plato, :cercaza, :cabina,
        :forro_prote, :teclado, :nivel, :patas, :tarje_prin, :display,
        :conectores, :celdas, :guias, :fle_frontal, :fle_cortos,
        :tornilleria, :sistem_meca, :pesa_inter, :det_hum)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":adap_cable", $inspe_general->getAdap_cable());
        $resultado->bindValue(":plato", $inspe_general->getPlato());
        $resultado->bindValue(":porta_plato", $inspe_general->getPorta_plato());
        $resultado->bindValue(":cercaza", $inspe_general->getCercaza());
        $resultado->bindValue(":cabina", $inspe_general->getCabina());
        $resultado->bindValue(":forro_prote", $inspe_general->getForro_prote());
        $resultado->bindValue(":teclado", $inspe_general->getTeclado());
        $resultado->bindValue(":nivel", $inspe_general->getNivel());
        $resultado->bindValue(":patas", $inspe_general->getPatas());
        $resultado->bindValue(":tarje_prin", $inspe_general->getTarje_prin());
        $resultado->bindValue(":display", $inspe_general->getDisplay());
        $resultado->bindValue(":conectores", $inspe_general->getConectores());
        $resultado->bindValue(":celdas", $inspe_general->getCeldas());
        $resultado->bindValue(":guias", $inspe_general->getGuias());
        $resultado->bindValue(":fle_frontal", $inspe_general->getFle_frontal());
        $resultado->bindValue(":fle_cortos", $inspe_general->getFle_cortos());
        $resultado->bindValue(":tornilleria", $inspe_general->getTornilleria());
        $resultado->bindValue(":sistem_meca", $inspe_general->getSistem_meca());
        $resultado->bindValue(":pesa_inter", $inspe_general->getPesa_inter());
        $resultado->bindValue(":det_hum", $inspe_general->getDet_hum());




        if ($resultado->execute()) {

            return true;
        }

        return false;
    }


    /**
     * Metodo para insertar la verificación inicial
     */
    public static function mediciones($medi_electricas)
    {

        $query = "INSERT INTO medi_electri (
        vfase_neu,vfase_tie, vneu_tie ) VALUES
        (:vfase_neu, :vfase_tie, :vneu_tie )";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":vfase_neu", $medi_electricas->getVfase_neu());
        $resultado->bindValue(":vfase_tie", $medi_electricas->getVfase_tie());
        $resultado->bindValue(":vneu_tie", $medi_electricas->getVneu_tie());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    }


    /**
     * Metodo para insertar la verificación inicial
     */
    public static function revision($revision)
    {

        $query = "INSERT INTO revision (
        observa,item_coti, real_por, revi_por, fecha_revi ) VALUES
        (:observa, :item_coti, :real_por, :revi_por, :fecha_revi)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":observa", $revision->getObserva());
        $resultado->bindValue(":item_coti", $revision->getItem_coti());
        $resultado->bindValue(":real_por", $revision->getReal_por());
        $resultado->bindValue(":revi_por", $revision->getRevi_por());
        $resultado->bindValue(":fecha_revi", $revision->getFecha_revi());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    }



    /**
     * Metodo para insertar la verificación inicial
     */
    public static function regis_prueba($regis_prueba)
    {

        $query = "INSERT INTO regis_prueba (
        tipo_fabri,fabri, model, serial, ubica, identi) VALUES
        (:tipo_fabri, :fabri, :model, :serial, :ubica, :identi)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":tipo_fabri", $regis_prueba->getTipo_fabri());
        $resultado->bindValue(":fabri", $regis_prueba->getFabri());
        $resultado->bindValue(":model", $regis_prueba->getModel());
        $resultado->bindValue(":serial", $regis_prueba->getSerial());
        $resultado->bindValue(":ubica", $regis_prueba->getUbica());
        $resultado->bindValue(":identi", $regis_prueba->getIdenti());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    }


    public static function requi_metrolo($requisitos)
    {

        $query = "INSERT INTO requi_metrolo(
        capa_requi, valor_d, valor_e, clase_requi, capa_min) VALUES
        (:capa_requi, :valor_d, :valor_e, :clase_requi, :capa_min)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":capa_requi", $requisitos->getCapa_requi());
        $resultado->bindValue(":valor_d", $requisitos->getValor_d());
        $resultado->bindValue(":valor_e", $requisitos->getValor_e());
        $resultado->bindValue(":clase_requi", $requisitos->getClase_requi());
        $resultado->bindValue(":capa_min", $requisitos->getCapa_min());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    }


    /**
     * Metodo que sirve para insertar repetibilidad
     */
    public static function repetibi($repetibilidad)
    {

        $query = "INSERT INTO repetibilidad(
        carga_repe, indi_1, error_repe1, indi_2,error_repe2, indi_3, error_repe3,
        indi_4, error_repe4, indi_5, error_repe5) VALUES
        (:carga_repe, :indi_1, :error_repe1, :indi_2, :error_repe2, :indi_3, :error_repe3,
         :indi_4, :error_repe4, :indi_5, :error_repe5)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":carga_repe", $repetibilidad->getCarga_repe());
        $resultado->bindValue(":indi_1", $repetibilidad->getIndi_1());
        $resultado->bindValue(":error_repe1", $repetibilidad->getError_repe1());
        $resultado->bindValue(":indi_2", $repetibilidad->getIndi_2());
        $resultado->bindValue(":error_repe2", $repetibilidad->getError_repe2());
        $resultado->bindValue(":indi_3", $repetibilidad->getIndi_3());
        $resultado->bindValue(":error_repe3", $repetibilidad->getError_repe3());
        $resultado->bindValue(":indi_4", $repetibilidad->getIndi_4());
        $resultado->bindValue(":error_repe4", $repetibilidad->getError_repe4());
        $resultado->bindValue(":indi_5", $repetibilidad->getIndi_5());
        $resultado->bindValue(":error_repe5", $repetibilidad->getError_repe5());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    }



    /**
     * Metodo que sirve para insertar excentricidad
     */
    public static function excentrici($excen)
    {

        $query = "INSERT INTO excentricidad(
    carga_exce, indi_exce_1, error_exce1, indi_exce_2, error_exce2, indi_exce_3, error_exce3, indi_exce_4, error_exce4, indi_exce_5, error_exce5) VALUES
    (:carga_exce, :indi_exce_1, :error_exce1, :indi_exce_2, :error_exce2, :indi_exce_3, :error_exce3, :indi_exce_4, :error_exce4, :indi_exce_5, :error_exce5)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":carga_exce", $excen->getCarga_exce());
        $resultado->bindValue(":indi_exce_1", $excen->getIndi_exce_1());
        $resultado->bindValue(":error_exce1", $excen->getError_exce1());
        $resultado->bindValue(":indi_exce_2", $excen->getIndi_exce_2());
        $resultado->bindValue(":error_exce2", $excen->getError_exce2());
        $resultado->bindValue(":indi_exce_3", $excen->getIndi_exce_3());
        $resultado->bindValue(":error_exce3", $excen->getError_exce3());
        $resultado->bindValue(":indi_exce_4", $excen->getIndi_exce_4());
        $resultado->bindValue(":error_exce4", $excen->getError_exce4());
        $resultado->bindValue(":indi_exce_5", $excen->getIndi_exce_5());
        $resultado->bindValue(":error_exce5", $excen->getError_exce5());



        if ($resultado->execute()) {

            return true;
        }

        return false;
    }


    /**
     * Metodo que sirve para insertar la exactitud
     */
    public static function exactitud($exacti)
    {

        $query = "INSERT INTO exactitud(
    carga_exa_1, indi_exa_1, error_exa_1, carga_exa_2, indi_exa_2, error_exa_2, carga_exa_3, indi_exa_3, error_exa_3,
    carga_exa_4, indi_exa_4, error_exa_4, 
    carga_exa_5, indi_exa_5, error_exa_5) VALUES

    (:carga_exa_1, :indi_exa_1, :error_exa_1, :carga_exa_2, :indi_exa_2, :error_exa_2, :carga_exa_3, :indi_exa_3, :error_exa_3,
     :carga_exa_4, :indi_exa_4, :error_exa_4,
     :carga_exa_5, :indi_exa_5, :error_exa_5)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":carga_exa_1", $exacti->getCarga_exa_1());
        $resultado->bindValue(":indi_exa_1", $exacti->getIndi_exa_1());
        $resultado->bindValue(":error_exa_1", $exacti->getError_exa_1());
        $resultado->bindValue(":carga_exa_2", $exacti->getCarga_exa_2());
        $resultado->bindValue(":indi_exa_2", $exacti->getIndi_exa_2());
        $resultado->bindValue(":error_exa_2", $exacti->getError_exa_2());
        $resultado->bindValue(":carga_exa_3", $exacti->getCarga_exa_3());
        $resultado->bindValue(":indi_exa_3", $exacti->getIndi_exa_3());
        $resultado->bindValue(":error_exa_3", $exacti->getError_exa_3());
        $resultado->bindValue(":carga_exa_4", $exacti->getCarga_exa_4());
        $resultado->bindValue(":indi_exa_4", $exacti->getIndi_exa_4());
        $resultado->bindValue(":error_exa_4", $exacti->getError_exa_4());
        $resultado->bindValue(":carga_exa_5", $exacti->getCarga_exa_5());
        $resultado->bindValue(":indi_exa_5", $exacti->getIndi_exa_5());
        $resultado->bindValue(":error_exa_5", $exacti->getError_exa_5());




        if ($resultado->execute()) {

            return true;
        }

        return false;
    }
}
