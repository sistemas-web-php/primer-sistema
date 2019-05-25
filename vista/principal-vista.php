<!DOCTYPE html>
<html lang="en">

<?php include_once(VISTA . "head.php"); ?>

<body>
<section id='login' class='container'>
<div class='row mx-auto'>
<div id='chofer' class='col-6 border-right border-dark'>
    <form class=''>
        <p class='w-100 text-center titulo-principal-login'>CHOFERES</p>
        <div class="form-group row justify-content-center">
            <label for="exampleInputEmail1" class='col-2 titulo-input-login'>Usuario</label>
            <input type="text" class="form-control col-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su DNI">
        </div>
        <div class="form-group row justify-content-center">
            <label for="exampleInputPassword1" class='col-2 titulo-input-login'>Password</label>
            <input type="password" class="form-control col-6" id="exampleInputPassword1" placeholder="Ingrese su password">
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-success col-3 boton">INICIAR</button>
        </div>
    </form>
</div>

<div id='chofer' class='border-left border-dark col-6'>
    <form class='mx-auto' method='POST' action='<?php echo WEB . '/?log=operador'; ?>'>
        <p class='w-100 text-center titulo-principal-login'>OPERADORES</p>
        <div class="form-group row justify-content-center">
            <label for="exampleInputEmail1" class='col-2 titulo-input-login'>Usuario</label>
            <input type="text" class="form-control col-6" id="email" aria-describedby="emailHelp" placeholder="Ingrese su DNI">
        </div>
        <div class="form-group row justify-content-center">
            <label for="exampleInputPassword1" class='col-2 titulo-input-login'>Password</label>
            <input type="password" class="form-control col-6" id="passs" placeholder="Ingrese su password">
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-success col-3 boton">INICIAR</button>
        </div>
    </form>
</div>
</div>

</section>


</body>
<?php include_once(VISTA . "footer.php"); ?>
</html>