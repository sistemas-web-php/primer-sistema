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
     <p class="titulo">EDITAR OPERADOR</p>
    </div>
        <div class='row'>

            <form action="<?php echo WEB . '/?view=editar-operador' ?>" method="POST" class='col-8 offset-2 row d-flex align-items-center'>
              <label class='col-2'>Nombre:</label>
              <input type="text" id="nombre" required  name="nombre" value='<?php echo $operador->getNombre(); ?>'  placeholder="Ingrese su nombre" class="col-9 form-control">
              <label class='col-2'>Apellido:</label>
              <input type="text" id="apellido" required name="apellido" value='<?php echo $operador->getApellido(); ?>' placeholder="Ingrese su apellido" class="col-9 form-control">
              <label class='col-2'>Teléfono:</label>
              <input type="text" id="telefono" required name="telefono" value='<?php echo $operador->getTelefono(); ?>' placeholder="Ingrese su teléfono" class="col-9 form-control">
              <label class='col-2'>Dirección:</label>
              <input type="text" id="direccion" required name="direccion" value='<?php echo $operador->getDireccion(); ?>' placeholder="Ingrese su dirección" class="col-9 form-control">
              <label class='col-2'>DNI:</label>
              <input type="text" id="dni"required name="dni" value='<?php echo $operador->getDni(); ?>' placeholder="Ingrese su dni" class="col-9 form-control"><br>
              <label class='col-2'>Email:</label>
              <input type="text" id="email"required name="email" value='<?php echo $operador->getEmail(); ?>' placeholder="Ingrese su email" class="col-9 form-control"><br>

              <center>
                <input type='submit' class="btn btn-success" value='Actualizar'>
              </center>
            </form>
           
</div>
  

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
</body>
<?php  include_once(VISTA . "footer.php"); ?>
</html>