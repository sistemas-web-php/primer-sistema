<!DOCTYPE html>
<html lang="en">
<head>       
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema - FANTASY</title>
    <link rel="stylesheet" href="<?php echo WEB . '/vista/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo WEB . '/vista/css/mis-estilos.css'; ?>">
    <script src="vista/js/estilo.js"></script>

</head>

<?php include_once(VISTA . "head.php"); ?>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Viaje</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Mapa - Zonas</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        MENU
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Choferes</a>
        <a class="dropdown-item" href="#">Autos</a>
        <a class="dropdown-item" href="#">Operadores</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo WEB . '?view=operadores'?>">Operadores</a>
    </li>
  </ul>
      <div class="BOTON-SALIR">
        <p style="color: #ffff;">Usuario: <?php echo $_SESSION['user']['nombre']; ?></p>
       <button type="button" class="btn btn-info">CERRAR SESION</button> 
      </div>
</nav>
<p class="titulo">OPERADORES</p>
  <div class="right">
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
              <center><button  class="btn btn-success" id="btn">REGISTRAR</button><button  class="btn btn-success" id="btn"onclick="ocultar();">ocultar</button></center>
  
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
  <tbody>
    <tr>
      <td></td>     
      <td>nombre</td>
      <td>apellido</td>
      <td>telefono</td>
      <td>direccion</td>
      <td>dni</td>
    </tr>
  </tbody>
</table>
</body>
<?php  //include_once(VISTA . "footer.php"); ?>
</html>