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
        <th scope="col"></th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">DNI</th>
      </tr>
    </thead>
  </table>
</body>
<?php  include_once(VISTA . "footer.php"); ?>
</html>