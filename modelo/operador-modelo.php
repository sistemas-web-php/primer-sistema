<?php

class operador
{

    private $nombre;
    private $apellido;
    private $dni;
    private $telefeno;
    private $email;
    private $pass;



    public function __construct(){
        
    }

    public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getDni(){
		return $this->dni;
	}

	public function setDni($dni){
		$this->dni = $dni;
	}

	public function getTelefeno(){
		return $this->telefeno;
	}

	public function setTelefeno($telefeno){
		$this->telefeno = $telefeno;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPass(){
		return $this->pass;
	}

	public function setPass($pass){
		$this->pass = $pass;
    }

    //comienzo funcion de testing

    public function test()
    {

        if (isset($this->nombre)) {
            echo 'existe' . $this->getNombre();
        } else {
            echo 'no existe';
        }
        
    }

    //fin funcion de testing
    
    public function loginOperador()
    {
        
    }
    
    public function logoutOperador()
    {
        
    }

    public function nuevoOperador()
    {
        
    }

    public function eliminarOperador()
    {
        
    }

    public function editarOperador()
    {
        
    }

}