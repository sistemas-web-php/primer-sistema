<?php

require_once(MODELO . "conexion.php");

class operador
{

    private $nombre;
    private $apellido;
    private $dni;
    private $telefono;
    private $email;
    private $pass;


    private $con;

    public function __construct(){
        $conexion = new conexion();
        $this->con = $conexion->getCon();
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

	public function getTelefono(){
		return $this->telefeno;
	}

	public function setTelefono($telefeno){
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
        $sql = "SELECT * FROM operadores";
        $resultado = mysqli_query($this->con, $sql);
        $lista = mysqli_fetch_array($resultado);
        echo $lista['nombre_operador'];
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
        try {

            if (!$this->con) {
                throw new Exception("error al conectar a la base de datos");
            }else{
                $sql = "INSERT INTO operadores 
                (id_operador, nombre_operador, apellido_operador, email_operador, dni_operador, pass_operador, telefono_operador) 
                VALUES (NULL, '$this->nombre', '$this->apellido', '$this->email', '$this->dni', '$this->pass', '$this->telefono')";

                $resultado = mysqli_query($this->con, $sql);


            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function eliminarOperador()
    {
        
    }

    public function editarOperador()
    {
        
    }

}