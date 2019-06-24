<?php

require_once(MODELO . "conexion.php");

class auto
{

    private $id;
    private $marca;
    private $modelo;
    private $patente;
    private $año_auto;
    private $visibilidad;

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
    
    public function getVisibilidad(){
		return $this->id;
	}

	public function setVisibilidad($visibilidad){
		$this->visibilidad = $visibilidad;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
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

	public function getAño_auto(){
		return $this->año_auto;
	}

	public function setAño_auto($año_auto){
		$this->año_auto = $año_auto;
	}

    public function nuevoAuto()
    {
        try {

            if (!$this->con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                  $this->patente = mysqli_real_escape_string($this->con, $this->patente);


                    $sql = "SELECT patente_auto FROM autos WHERE patente_auto = '$this->patente'";
                    
                    $resultado = mysqli_query($this->con, $sql);

                    $row_cnt = mysqli_num_rows($resultado);

                    if ($row_cnt == 1){
                        return false;
                    }else{


                    $this->marca = strtoupper(mysqli_real_escape_string($this->con, $this->marca));
                    $this->modelo = strtoupper(mysqli_real_escape_string($this->con, $this->modelo));
                    $this->año_auto = mysqli_real_escape_string($this->con, $this->año_auto);
        
                    $sql = "INSERT INTO autos 
                    (marca_auto, modelo_auto, patente_auto, anio_auto, visibilidad_auto) 
                    VALUES ('$this->marca', '$this->modelo', '$this->patente', '$this->año_auto', '$this->visibilidad')";

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

                $sql = "SELECT * FROM autos";

                $resultado = mysqli_query($this->con, $sql);

                if($resultado){

                    $array_autos = array();

                    while ($lista = mysqli_fetch_array($resultado)) {

                        $auto = new auto();

                        $auto->setId($lista['id_auto']);
                        $auto->setMarca($lista['marca_auto']);
                        $auto->setModelo($lista['modelo_auto']);
                        $auto->setPatente($lista['patente_auto']);
                        $auto->setAño_auto($lista['anio_auto']);
                        $auto->setVisibilidad($lista['visibilidad_auto']);

                        $array_autos[] = $auto;

                    }

                    return $array_autos;

                } else {
                    throw new Exception("error al realizar la consulta");
                }
                
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function buscarAuto($busqueda)
    {
        try {

            if (!$this->con) {
                throw new Exception("Error al conectar a la base de datos");
            }else{

                $busqueda = strtoupper(mysqli_real_escape_string($this->con, $busqueda));

                $sql = "SELECT * FROM autos 
                WHERE patente_auto = '$busqueda' OR marca_auto = '$busqueda' OR modelo_auto = '$busqueda'";

                $resultado = mysqli_query($this->con, $sql);

                if($resultado){

                    while ($lista = mysqli_fetch_assoc($resultado)) {

                        $data["list_autos"][] = $lista;

                    }

                    return $data;

                } else {
                    throw new Exception("error al realizar la consulta");
                }
                
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

}