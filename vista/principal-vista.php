<!DOCTYPE html>
<html lang="en">

<?php include_once(VISTA . "head.php"); ?>

<body>

<section class='container' style='margin-bottom: 100px; margin-top: 25px;'>
    <h1 class='text-center' class='titulo-principal'>SISTEMA REMISERIA</h1>
</section>

<section id='login' class='container'>
<div class='row mx-auto'>
<div id='chofer' class='col-6 border-right border-dark'>
    <form class=''>
        <p class='w-100 text-center titulo-principal-login'>CHOFERES</p>
        <div class="form-group row justify-content-center">
            <label for="exampleInputEmail1" class='col-2'>DNi</label>
            <input type="text" class="form-control col-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su DNI">
        </div>
        <div class="form-group row justify-content-center">
            <label for="exampleInputPassword1" class='col-2'>Password</label>
            <input type="password" class="form-control col-6" id="exampleInputPassword1" placeholder="Ingrese su password">
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-success col-3 boton">ENTRAR</button>
        </div>
    </form>
</div>

<div id='chofer' class='border-left border-dark col-6'>
    <form class='mx-auto'>
        <p class='w-100 text-center titulo-principal-login'>OPERADORES</p>
        <div class="form-group row justify-content-center">
            <label for="exampleInputEmail1" class='col-2'>DNi</label>
            <input type="text" class="form-control col-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su DNI">
        </div>
        <div class="form-group row justify-content-center">
            <label for="exampleInputPassword1" class='col-2'>Password</label>
            <input type="password" class="form-control col-6" id="exampleInputPassword1" placeholder="Ingrese su password">
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-success col-3 boton">ENTRAR</button>
        </div>
    </form>
</div>
</div>

</section>


</body>
</html>