<!DOCTYPE html>
<html lang="en">

<?php include_once(VISTA . "head.php"); ?>
<style>
input{
  margin: 10px;
}
select{
  margin: 10px;
}
</style>
<body>

<?php include_once(VISTA . "menu.php"); ?>

  <div class="right" style='margin: 30px;'>
     <p class="titulo">EDITAR CHOFER</p>
    </div>
        <div class='row'>

            <form action="<?php echo WEB . '/?view=editar-operador&id=' . $_GET['id'] ?>" method="POST" class='col-8 offset-2 row d-flex align-items-center'>
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
              <label class='col-2'>Habilitado:</label>
              <select name="visibilidad" id="visibilidad" class="col-9 form-control">
                <option value="true" <?php if($operador->getVisibilidad()){echo 'selected';} ?>>Activo</option>
                <option value="false" <?php if(!$operador->getVisibilidad()){echo 'selected';} ?>>Deshabilitado</option>
              </select><br>
              <center>
                <input type='submit' class="btn btn-success" value='Actualizar'>
              </center>
            </form>
            <center>
            <?php if (!$res) {
              echo "<p class='text-danget'>error al realizar la modificacion</p>";
            } ?>
            </center>
           
</div>
  
</body>
<?php  include_once(VISTA . "footer.php"); ?>
</html>