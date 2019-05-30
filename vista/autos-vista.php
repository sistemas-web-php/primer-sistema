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
      <button class="btn btn-secondary" onclick="mostrar();">Nuevo Auto</button>
    </div>
        <div id="mostrar" class='row'>

            <form action="nuevo_auto.php" method="POST" class='col-8 offset-2 row d-flex align-items-center'>
              <label class='col-2'>Auto:</label>
              <input type="text" required  name="auto"   placeholder="Ingrese nombre del auto" class="col-9 form-control">
              <label class='col-2'>Modelo:</label>
              <input type="text"  required name="modelo" placeholder="Ingrese el modelo" class="col-9 form-control">
              <label class='col-2'>Patente:</label>
              <input type="text"  required name="patente" placeholder="Ingrese patente" class="col-9 form-control">
              <label class='col-2'>N° de movil:</label>
              <input type="text"  required name="movil"placeholder="N° de movil" class="col-9 form-control">
               <label class='col-2'>Ingreso:</label>
              <input type="text" required name="ingreso" placeholder="Fecha de Ingreso" class="col-9 form-control"><br>
              
              <center><input type='submit' class="btn btn-secondary" value='Registrar'onclick="ocultar();"></center>
              
            </form>
</div>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">AUTO</th>
        <th scope="col">MODELO</th>
        <th scope="col">PATENTE</th>
        <th scope="col">N° MOVIL</th>
        <th scope="col">INGRESO</th>
      </tr>
    </thead>
  </table>
</body>
<?php  include_once(VISTA . "footer.php"); ?>
</html>