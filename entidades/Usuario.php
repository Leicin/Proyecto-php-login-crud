<?php

class Usuario
{
    private $Cedula;
    private $Nombres;
    private $Apellidos;
    private $Cargo;
    private $Tel_usu;
    private $tipo_de_usuario;
    private $Nickname;
    private $Contraseña;
    private $Foto;
    private $correo_electronico;
    private $Codigo_sede;
    private $Accion;

    public function getAccion(){
        return $this->Accion;
    }

    public function setAccion($Accion){
        $this->Accion = $Accion;
    }

    public function getCedula(){
		return $this->Cedula;
	}

	public function setCedula($Cedula){
		$this->Cedula = $Cedula;
	}

	public function getNombres(){
		return $this->Nombres;
	}

	public function setNombres($Nombres){
		$this->Nombres = $Nombres;
	}

	public function getApellidos(){
		return $this->Apellidos;
	}

	public function setApellidos($Apellidos){
		$this->Apellidos = $Apellidos;
	}

	public function getCargo(){
		return $this->Cargo;
	}

	public function setCargo($Cargo){
		$this->Cargo = $Cargo;
	}

	public function getTel_usu(){
		return $this->Tel_usu;
	}

	public function setTel_usu($Tel_usu){
		$this->Tel_usu = $Tel_usu;
	}

	public function getTipo_de_usuario(){
		return $this->tipo_de_usuario;
	}

	public function setTipo_de_usuario($tipo_de_usuario){
		$this->tipo_de_usuario = $tipo_de_usuario;
	}

	public function getNickname(){
		return $this->Nickname;
	}

	public function setNickname($Nickname){
		$this->Nickname = $Nickname;
	}

	public function getContraseña(){
		return $this->Contraseña;
	}

	public function setContraseña($Contraseña){
		$this->Contraseña = $Contraseña;
	}

	public function getFoto(){
		return $this->Foto;
	}

	public function setFoto($Foto){
		$this->Foto = $Foto;
	}

	public function getCorreo_electronico(){
		return $this->correo_electronico;
	}

	public function setCorreo_electronico($correo_electronico){
		$this->correo_electronico = $correo_electronico;
	}

	public function getCodigo_sede(){
		return $this->Codigo_sede;
	}

	public function setCodigo_sede($Codigo_sede){
		$this->Codigo_sede = $Codigo_sede;
	}

   
}
