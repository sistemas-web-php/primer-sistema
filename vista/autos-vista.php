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
              <label class='col-2'>Marca:</label>
              <input type="text" required  name="Marca"   placeholder="Ingrese marca del auto" class="col-9 form-control">
              <label class='col-2'>Modelo:</label>
              <input type="text"  required name="modelo" placeholder="Ingrese el modelo" class="col-9 form-control">
              <label class='col-2'>Patente:</label>
              <input type="text"  required name="patente" placeholder="Ingrese patente" class="col-9 form-control">
              <label class='col-2'>Año:</label>
              <input type="text"  required name="movil"placeholder="N° de movil" class="col-9 form-control">
               
              <center><input type='submit' class="btn btn-secondary" value='Registrar'onclick="ocultar();"></center>
              
            </form>
</div>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Patente</th>
        <th scope="col">Año</th>
        <th scope="col">visibilidad</th>
      </tr>
    </thead>
  <?php 
  if (count($array_autos) == 0) {
    echo '</table> 
          no hay ningun auto registrado en el sistema';
  } else {

    for ($i=0; $i < count($array_autos); $i++) { 

      if ($array_autos[$i]->getVisibilidad()) {
        $visibilidad = 'activo';
        $color = "bg-success";
      } else {
        $visibilidad = 'no activo';
        $color = "bg-danger";
      }

      echo 
        "<tr>
        <th>" . $array_autos[$i]->getMarca() . "</th>
        <th>" . $array_autos[$i]->getModelo() . "</th>
        <th>" . $array_autos[$i]->getPatente() . "</th>
        <th>" . $array_autos[$i]->getAño_auto() . "</th> 
        <th class='$color'>" . $visibilidad . "</th>  
        </tr>";
    }
    
  }
  
  ?>
</body>
<?php  include_once(VISTA . "footer.php"); ?>
</html>