<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <img src="<?php echo WEB . '/vista/iconos/auto.png'; ?>" style='width:30px; heigth:30px;' alt="">
  Remiseria
  </a>
  
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if(isset($_GET['view']) && $_GET['view'] == 'nuevo-viaje'){echo 'active';} ?>" href="#">Nuevo viaje </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if(isset($_GET['view']) && $_GET['view'] == 'lista-viajes'){echo 'active';} ?>" href="#">Lista viajes </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if(isset($_GET['view']) && $_GET['view'] == 'operadores'){echo 'active';} ?>" href="<?php echo WEB . '?view=operadores' ?>">Operadores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if(isset($_GET['view']) && $_GET['view'] == 'choferes'){echo 'active';} ?>" href="#">Choferes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if(isset($_GET['view']) && $_GET['view'] == 'autos'){echo 'active';} ?>" href="#">Autos</a>
      </li>
    </ul>
    <a href="">cerrar sesion</a>
  </div>
</nav>