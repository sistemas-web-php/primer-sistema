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
              <label class='col-2'>Nombre:</label>
              <input type="text" id="nombre" required  name="nombre"   placeholder="Ingrese su nombre" class="col-9 form-control">
              <label class='col-2'>Apellido:</label>
              <input type="text" id="apellido" required name="apellido" placeholder="Ingrese su apellido" class="col-9 form-control">
              <label class='col-2'>Teléfono:</label>
              <input type="text" id="telefono" required name="telefono" placeholder="Ingrese su teléfono" class="col-9 form-control">
              <label class='col-2'>Dirección:</label>
              <input type="text" id="direccion" required name="direccion"placeholder="Ingrese su dirección" class="col-9 form-control">
              <label class='col-2'>DNI:</label>
              <input type="text" id="dni"required name="dni" placeholder="Ingrese su dni" class="col-9 form-control"><br>
              <label class='col-2'>Email:</label>
              <input type="text" id="Email"required name="Email" placeholder="Ingrese su email" class="col-9 form-control"><br>
               <label class='col-2'>Ingreso:</label>
              <input type="text" id="Email"required name="fecha" placeholder="Fecha de Ingreso" class="col-9 form-control"><br>
              <label for="sel1">Activo:
                <select class="input-large" name="activo" id="sel1">
                  <option>SI</option>
                  <option>NO</option>
                </select></label><br>
              <center>
                <input type='submit' class="btn btn-success" value='Registrar'onclick="ocultar();">
              </center>
            </form>
           
</div>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nombre | Apellido</th>
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
          $visibilidad = 'HABILITADO';
          $color = "bg-success";
        } else {
          $visibilidad = 'DESHABILITADO';
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