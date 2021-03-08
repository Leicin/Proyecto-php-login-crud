<?php

include '../datos/UsuarioDao.php';

class UsuarioControlador
{

    // funcion para el login
    private static $obj_usuario;

    public static function login($Nickname, $Contraseña, $Accion)
    {

        self::$obj_usuario = new Usuario();
        self::$obj_usuario->setNickname($Nickname);
        self::$obj_usuario->setContraseña($Contraseña);
        self::$obj_usuario->setAccion($Accion);

        return UsuarioDao::login(self::$obj_usuario);
    }

    public static function getListsedes()
    {

        return UsuarioDao::getListarsedes();
    }


    public static function getUsuario($Nickname, $Contrasena, $consultar)
    {


        self::$obj_usuario = new Usuario();

        self::$obj_usuario->setNickname($Nickname);
        self::$obj_usuario->setContraseña($Contrasena);
        self::$obj_usuario->setAccion($consultar);


        return UsuarioDao::getUsuario(self::$obj_usuario);

    }


  
    public static function getUsuarios($page)
    {

        return UsuarioDao::getUsuarios($page);

    }


// funcion para agregar usuarios
public static function crearUsuario($Cedula, $Nombres, $Apellidos, $Cargo, $Tel_usu, $tipo_de_usuario, $Nickname, $Contraseña, $Foto, $correo_electronico, $Codigo_sede, $Accion)
{
    self::$obj_usuario = new Usuario();
    self::$obj_usuario->setCedula($Cedula);
    self::$obj_usuario->setNombres($Nombres);
    self::$obj_usuario->setApellidos($Apellidos);
    self::$obj_usuario->setCargo($Cargo);
    self::$obj_usuario->setTel_usu($Tel_usu);
    self::$obj_usuario->setTipo_de_usuario($tipo_de_usuario);
    self::$obj_usuario->setNickname($Nickname);
    self::$obj_usuario->setContraseña($Contraseña);
    self::$obj_usuario->setFoto($Foto);
    self::$obj_usuario->setCorreo_electronico($correo_electronico);
    self::$obj_usuario->setCodigo_sede($Codigo_sede);
    self::$obj_usuario->setAccion($Accion);
  


    return UsuarioDao::crudUsuarios(self::$obj_usuario);
}

// funcion para editar usuarios
    public static function editarUsuario($Cedula)
    {
        self::$obj_usuario = new Usuario();
        self::$obj_usuario->setCedula($Cedula);

        return UsuarioDao::EditarUsuario(self::$obj_usuario);
    }
// funcion para eliminar por registro de cedula
    public static function eliminarUsuario($Cedula)
    {
        self::$obj_usuario = new Usuario();
        self::$obj_usuario->setCedula($Cedula);
        self::$obj_usuario->setAccion("eliminar");
        return UsuarioDao::crudUsuarios(self::$obj_usuario);
    }


}