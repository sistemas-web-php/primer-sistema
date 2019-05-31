<?php

require_once(MODELO . "conexion.php");

class operador
{

    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $telefono;
    private $email;
    private $pass;
    private $direccion;
    private $fecha_ingreso;
    private $visibilidad;
    private $login;


    private $con;

    public function __construct(){
        $conexion = new conexion();
        $this->con = $conexion->getCon();
    }

    public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
    }

    public function getLogin(){
		return $this->login;
	}

	public function setLogin($login){
		$this->login = $login;
    }

    
    public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
    }
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
    }

    public function getVisibilidad(){
		return $this->visibilidad;
	}

	public function setVisibilidad($visibilidad){
		$this->visibilidad = $visibilidad;
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
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
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

    public function getFecha_ingreso(){
		return $this->fecha_ingreso;
	}

	public function setFecha_ingreso($fecha_ingreso){
		$this->fecha_ingreso = $fecha_ingreso;
    }

    //comienzo funcion de testing

    public function test()
    {
        $ope = new operador();
        $ope->setApellido('cori');
        $ope2 = new operador();
        $ope2->setApellido('cori2');

        $array = array();
        $array[]=$ope;
        $array[]=$ope2;

        return $array;
    }

    //fin funcion de testing
    
    public function loginOperador()
    {
        try {

            if (!$this->con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                $this->dni = mysqli_real_escape_string($this->con, $this->dni);
                $this->pass = mysqli_real_escape_string($this->con, $this->pass);

                $sql = "SELECT dni_operador, pass_operador, nombre_operador 
                        FROM operadores 
                        WHERE dni_operador = $this->dni 
                        AND visibilidad_operador = TRUE";

                $resultado = mysqli_query($this->con, $sql);
                
                $row_cnt = mysqli_num_rows($resultado);
                
                if ($row_cnt == 1) {

                    $datos = mysqli_fetch_array($resultado);

                    $pass_verificado = password_verify($this->pass, $datos['pass_operador']);

                    if ($pass_verificado) {

                        $_SESSION['user']['dni'] = $datos['dni'];
                        $_SESSION['user']['tipo-user'] = "operador";
                        $_SESSION['user']['nombre'] = $datos['nombre_operador'];

                        return true;

                    } else {
                        return false;
                    }
                    

                } else {
                    return false;
                }
                
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
    
    public function logoutOperador()
    {
        unset($_SESSION['user']);
    }

    public function nuevoOperador()
    {
        try {

            if (!$this->con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                    $sql = "SELECT dni_operador FROM operadores WHERE dni_operador = '$this->dni'";
                    
                    $resultado = mysqli_query($this->con, $sql);

                    $row_cnt = mysqli_num_rows($resultado);

                    if ($row_cnt == 1){
                        echo 'el dni ya existe en la base de datos';
                    }else{


                    $this->nombre = strtoupper(mysqli_real_escape_string($this->con, $this->nombre));
                    $this->apellido = strtoupper(mysqli_real_escape_string($this->con, $this->apellido));
                    $this->email = mysqli_real_escape_string($this->con, $this->email);
                    $this->dni = mysqli_real_escape_string($this->con, $this->dni);
                    $this->pass = mysqli_real_escape_string($this->con, $this->pass);
                    $this->telefono = mysqli_real_escape_string($this->con, $this->telefono);
                    $this->fecha_ingreso = mysqli_real_escape_string($this->con, $this->fecha_ingreso);

                    $this->pass = password_hash($this->pass, PASSWORD_DEFAULT);

                    $sql = "INSERT INTO `operadores` (`id_operador`, `nombre_operador`, `apellido_operador`, `email_operador`, `dni_operador`, `pass_operador`, `telefono_operador`, `fecha_ingreso_operador`, `visibilidad_operador`, `login_operador`, `direccion_operador`) 
                    VALUES (NULL, '$this->nombre', '$this->apellido', '$this->email', '$this->dni', '$this->pass', '$this->telefono', '$this->fecha_ingreso', '$this->visibilidad', '$this->login', '$this->direccion')";
                    
                    $resultado = mysqli_query($this->con, $sql);
                    
                    if ($resultado) {
                        return true;
                    } else {
                        throw new Exception("error al insetar el nuevo operador");
                        return false;
                    }
                    
                }

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

    public function getOperadores()
    {
        try {

            if (!$this->con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                $sql = "SELECT id_operador, nombre_operador, apellido_operador, 
                email_operador, dni_operador, telefono_operador, fecha_ingreso_operador, 
                visibilidad_operador, direccion_operador 
                FROM operadores";

                $resultado = mysqli_query($this->con, $sql);
                
                if($resultado){

                    $array_operadores = array();

                    while ($lista = mysqli_fetch_array($resultado)) {

                        $ope = new operador();

                        $ope->setId($lista['id_operador']);
                        $ope->setNombre($lista['nombre_operador']);
                        $ope->setApellido($lista['apellido_operador']);
                        $ope->setDni($lista['dni_operador']);
                        $ope->setTelefono($lista['telefono_operador']);
                        $ope->setEmail($lista['email_operador']);
                        $ope->setFecha_ingreso($lista['fecha_ingreso_operador']);
                        $ope->setVisibilidad($lista['visibilidad_operador']);
                        $ope->setDireccion($lista['direccion_operador']);

                        $array_operadores[] = $ope;

                    }

                    return $array_operadores;

                } else {
                    throw new Exception("al realizar la consulta");
                }
                
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function getOperadorXId()
    {
        try {

            if (!$this->con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                $sql = "SELECT nombre_operador, apellido_operador, 
                email_operador, dni_operador, telefono_operador, fecha_ingreso_operador, 
                visibilidad_operador, direccion_operador 
                FROM operadores WHERE id_operador = " . $_GET['id'];

                $resultado = mysqli_query($this->con, $sql);

                if ($resultado) {
                    $ope = mysqli_fetch_array($resultado);
                    
                    $this->nombre = $ope['nombre_operador'];
                    $this->apellido = $ope['apellido_operador'];
                    $this->telefono = $ope['telefono_operador'];
                    $this->direccion = $ope['direccion_operador'];
                    $this->dni = $ope['dni_operador'];
                    $this->email = $ope['email_operador'];

                    return true;

                } else {
                    throw new Exception("al realizar la consulta");

                }
                
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}