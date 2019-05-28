<?php

class chofer  
{
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $telefono;
    private $email;
    private $fecha_ingreso;

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

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
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

	public function getFecha_ingreso(){
		return $this->fecha_ingreso;
	}

	public function setFecha_ingreso($fecha_ingreso){
		$this->fecha_ingreso = $fecha_ingreso;
    }
    
    public function loginChofer()
    {
        try {

            if (!$this->con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                $this->dni = mysqli_real_escape_string($this->con, $this->dni);
                $this->pass = mysqli_real_escape_string($this->con, $this->pass);

                $sql = "SELECT dni_chofer, pass_chofer, nombre_chofer 
                        FROM choferes 
                        WHERE dni_chofer = $this->dni 
                        AND visibilidad_chofer = TRUE";

                $resultado = mysqli_query($this->con, $sql);
                
                $row_cnt = mysqli_num_rows($resultado);
                
                if ($row_cnt == 1) {

                    $datos = mysqli_fetch_array($resultado);

                    $pass_verificado = password_verify($this->pass, $datos['pass_chofer']);

                    if ($pass_verificado) {

                        $_SESSION['user']['dni'] = $datos['dni'];
                        $_SESSION['user']['tipo-user'] = "chofer";
                        $_SESSION['user']['nombre'] = $datos['nombre_chofer'];

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

}
