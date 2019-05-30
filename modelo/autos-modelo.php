<?php

require_once(MODELO . "conexion.php");

class auto
{

    private $id;
    private $auto;
    private $modelo;
    private $patente;
    private $movil;
    private $ingreso;

    private $con;

    public function __construct(){
        $conexion = new conexion();
        $this->con = $conexion->getCon();
    }
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getAuto(){
		return $this->direccion;
	}

	public function setAuto($auto){
		$this->auto = $auto;
    }

    public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
    }
    
   
	public function getPatente(){
		return $this->patente;
	}

	public function setPatente($patente){
		$this->patente = $patente;
	}

	public function getMovil(){
		return $this->movil;
	}

	public function setMovil($movil){
		$this->movil = $movil;
	}

    public function getFecha_ingreso(){
		return $this->fecha_ingreso;
	}

	public function setFecha_ingreso($fecha_ingreso){
		$this->fecha_ingreso = $fecha_ingreso;
    }
    
    public function nuevoAuto()
    {
        try {

            if (!$this->con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                    $sql = "SELECT patente FROM autos WHERE patente = '$this->patente'";
                    
                    $resultado = mysqli_query($this->con, $sql);

                    $row_cnt = mysqli_num_rows($resultado);

                    if ($row_cnt == 1){
                        echo 'La patente ya existe en la base de datos';
                    }else{


                    $this->auto = strtoupper(mysqli_real_escape_string($this->con, $this->auto));
                    $this->modelo = strtoupper(mysqli_real_escape_string($this->con, $this->modelo));
                    $this->patente = mysqli_real_escape_string($this->con, $this->patente);
                    $this->movil = mysqli_real_escape_string($this->con, $this->movil);
                    $this->ingreso = mysqli_real_escape_string($this->con, $this->fecha_ingreso);
        
                    $sql = "INSERT INTO autos 
                    (id_auto, auto, modelo, patente, movil, fecha_ingreso_auto) 
                    VALUES (NULL, '$this->auto', '$this->modelo', '$this->patente', '$this->movil', '$this->fecha_ingreso')";

                    $resultado = mysqli_query($this->con, $sql);

                    if ($resultado) {
                        return true;
                    } else {
                        throw new Exception("Error al agregar el nuevo Auto ");
                        return false;
                    }
                    
                }

            }
        } catch (\Throwable $th) {
            echo $th;
        }

    }

    public function eliminarAuto()
    {
        
    }

    public function editarAuto()
    {
        
    }

    public function getAutos()
    {
        try {

            if (!$this->con) {
                throw new Exception("Error al conectar a la base de datos");
            }else{

                $sql = "SELECT id_auto, auto, modelo, patente, movil, fecha_ingreso_auto 
                FROM autos";

                $resultado = mysqli_query($this->con, $sql);
                
                if($resultado){

                    $array_autos = array();

                    while ($lista = mysqli_fetch_array($resultado)) {

                        $auto = new auto();

                        $auto->setId($lista['id_auto']);
                        $auto->setNombre($lista['auto']);
                        $auto->setApellido($lista['modelo']);
                        $auto->setDni($lista['patente']);
                        $auto->setTelefono($lista['movil']);
                        $auto->setFecha_ingreso($lista['fecha_ingreso_auto']);

                        $array_auto[] = $auto;

                    }

                    return $array_auto;

                } else {
                    throw new Exception("al realizar la consulta");
                }
                
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

}