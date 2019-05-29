<!DOCTYPE html>
<html lang="en">

<?php include_once(VISTA . "head.php"); ?>
<style>
input{
  margin: 10px;
}
</style>
<body>

<?php include_once(VISTA . "menu.php"); ?>

  <div class="right" style='margin: 30px;'>
      <button class="btn btn-success" onclick="mostrar();">Nuevo Operador</button>
    </div>
        <div id="mostrar" class='row'>

            <form action="nuevo_operador.php" method="POST" class='col-8 offset-2 row d-flex align-items-center'>
              <label class='col-2'>NOMBRE:</label>
              <input type="text" id="nombre" required  name="nombre"   placeholder="NOMBRE" class="col-9 form-control">
              <label class='col-2'>APELLIDO:</label>
              <input type="text" id="apellido" required name="apellido" placeholder="APELLIDO" class="col-9 form-control">
              <label class='col-2'>TELÉFONO:</label>
              <input type="text" id="telefono" required name="telefono" placeholder="TELEFONO" class="col-9 form-control">
              <label class='col-2'>DIRECCIÓN:</label>
              <input type="text" id="direccion" required name="direccion"placeholder="DIRECCION" class="col-9 form-control">
              <label class='col-2'>DNI:</label>
              <input type="text" id="dni"required name="dni" placeholder="DNI" class="col-9 form-control"><br>
              <center>
              <input type='submit' class="btn btn-success" id="btn" value='Registrar'>
              <button  class="btn btn-success" id="btn"onclick="ocultar();">ocultar</button>
              </center>
  
            </form>
           
</div>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nombre y Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Activo</th>
        <th scope="col">Ingreso</th>
        <th scope="col">Dni</th>
      </tr>
    </thead>

    <?php 
      
      for ($i=0; $i < count($array_operadores); $i++) { 
        $nombre = ucwords($array_operadores[$i]->getNombre() . " " . $array_operadores[$i]->getApellido());
        if ($array_operadores[$i]->getVisibilidad()) {
          $visibilidad = 'activo';
          $color = "bg-success";
        } else {
          $visibilidad = 'no activo';
          $color = "bg-danger";
        }
        
        echo 
        "<tr>
        <th>$nombre</th>
        <th>" . $array_operadores[$i]->getEmail() . "</th>
        <th>" . $array_operadores[$i]->getTelefono() . "</th>
        <th>" . $array_operadores[$i]->getDireccion() . "</th>
        <th class='$color'>" . $visibilidad . "</th>
        <th>" . $array_operadores[$i]->getFecha_ingreso() . "</th>
        <th>" . $array_operadores[$i]->getDni() . "</th>   
        </tr>";
      }

     ?>
  </table>
</body>
<?php  include_once(VISTA . "footer.php"); ?>
</html>