
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
      <button class="btn btn-dark" onclick="mostrar();">Nuevo Chofer</button>
    </div>
        <div id="mostrar" class='row'>

            <form action="<?php echo WEB . '/?view=nuevo-operador' ?>" method="POST" class='col-8 offset-2 row d-flex align-items-center'>
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
              <label class='col-2'>Patente:</label>
              <?php //aca va el buscador en tiempo real.. ?>
              <input type="text" id="email"required name="patente" placeholder="Ingrese N° patente" class="col-9 form-control"><br>
              <label class='col-2'>Password:</label>
              <input type="password" id="pass"required name="pass" placeholder="Ingrese su password" class="col-9 form-control"><br>
               
              <center><input type='submit' class="btn btn-dark" value='Registrar'></center>
              
            </form>
</div>

<?php if (isset($resultado)) if($resultado){
              echo "<p class='text-success text-center'>el auto se agrego correctamente</p>";
            } else {
              echo "<p class='text-danger'>la patente ya existe en la base de datos</p>";
            }
             ?>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nombre | Apellido</th>
        <th scope="col">Patente</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Activo</th>
        <th scope="col">Ingreso</th>
        <th scope="col">Dni</th>
      </tr>
    </thead>

    <?php 
     /* 
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
        "<tr onclick=\"document.location='" . WEB . "/?view=editar-operador&id=". $array_operadores[$i]->getId() . "'\">
        <th>$nombre</th>
        <th>" . $array_operadores[$i]->getEmail() . "</th>
        <th>" . $array_operadores[$i]->getTelefono() . "</th>
        <th>" . $array_operadores[$i]->getDireccion() . "</th>
        <th class='$color'>" . $visibilidad . "</th>
        <th>" . $array_operadores[$i]->getFecha_ingreso() . "</th>
        <th>" . $array_operadores[$i]->getDni() . "</th>   
        </tr>";
      }
*/
     ?>
  </table>
</body>
<?php  include_once(VISTA . "footer.php"); ?>
</html>