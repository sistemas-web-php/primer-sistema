<!DOCTYPE html>
<html lang="en">
<head>       
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema - FANTASY</title>
    <link rel="stylesheet" href="<?php echo WEB . '/vista/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo WEB . '/vista/css/mis-estilos.css'; ?>">

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
      <a class="nav-link" href="principal-operadores-vista.php">Operadores</a>
    </li>
  </ul>
</nav>
<?php echo $_SESSION['user']['nombre']; ?>

<div class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107134.74394283064!2d-60.76667995712585!3d-32.95204570918534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b6539335d7d75b%3A0xec4086e90258a557!2sRosario%2C+Santa+Fe!5e0!3m2!1ses-419!2sar!4v1559055042284!5m2!1ses-419!2sar" width="1350" height="550" frameborder="0" style="border:1px" allowfullscreen>	
	</iframe>
</div>
<div class="autos">
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">ZONA 1</th>
      <th scope="col">ZONA 2</th>
      <th scope="col">ZONA 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>MOVIL -</td>
      <td>MOVIL -</td>
      <td>MOVIL -</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>MOVIL - </td>
      <td>MOVIL - </td>
      <td>MOVIL - </td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>MOVIL - </td>
      <td>MOVIL - </td>
      <td>MOVIL - </td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col"></th>
      <th scope="col">ZONA 4</th>
      <th scope="col">ZONA 5</th>
      <th scope="col">ZONA 6</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
       <td>MOVIL - </td>
      <td>MOVIL - </td>
      <td>MOVIL - </td>    </tr>
    <tr>
      <th scope="row"></th>
       <td>MOVIL - </td>
      <td>MOVIL - </td>
      <td>MOVIL - </td>
    </tr>
    <tr>
      <th scope="row"></th>
       <td>MOVIL - </td>
      <td>MOVIL - </td>
      <td>MOVIL - </td>
    </tr>
  </tbody>
</table>
	
</div>
</body>
<?php  //include_once(VISTA . "footer.php"); ?>
</html>