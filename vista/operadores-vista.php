<!DOCTYPE html>
<html lang="en">

<?php include_once(VISTA . "head.php"); ?>

<body>

<?php include_once(VISTA . "menu.php"); ?>

<p class="titulo">OPERADORES</p>
  <div class="right" style='margin: 30px;'>
      <button class="btn btn-success" onclick="mostrar();">Nuevo Operador</button>
    </div>
<div id="mostrar">

            <form action="nuevo_operador.php" method="POST">
              <label>NOMBRE:</label>
              <input type="text" id="nombre" required  name="nombre"   placeholder="NOMBRE" class="form-control">
              <label>APELLIDO:</label>
              <input type="text" id="apellido" required name="apellido" placeholder="APELLIDO" class="form-control">
              <label>TELÉFONO:</label>
              <input type="text" id="telefono" required name="telefono" placeholder="TELEFONO" class="form-control">
              <label>DIRECCIÓN:</label>
              <input type="text" id="direccion" required name="direccion"placeholder="DIRECCION" class="form-control">
              <label>DNI:</label>
              <input type="text" id="dni"required name="dni" placeholder="DNI" class="form-control"><br>
              <center><button  class="btn btn-success" id="btn">REGISTRAR</button>
              <button  class="btn btn-success" id="btn"onclick="ocultar();">ocultar</button></center>
  
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