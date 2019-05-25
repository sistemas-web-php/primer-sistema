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
            <label for="exampleInputEmail1" class='col-2 titulo-input-login'>DNI</label>
            <input type="text" class="form-control col-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su DNI">
        </div>
        <div class="form-group row justify-content-center">
            <label for="exampleInputPassword1" class='col-2 titulo-input-login'>Password</label>
            <input type="password" class="form-control col-6" id="exampleInputPassword1" placeholder="Ingrese su password">
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-success col-3 boton">INICIAR</button>
        </div>
        <div>
            <?php 
                if (isset($_GET['err']) && $_GET['err'] == 2) {
                    echo "<p style='color: red;' class='text-center'>Los datos ingresados son incorrectos</p>";
                }  
            ?>
        </div>
    </form>
</div>

<div id='chofer' class='border-left border-dark col-6'>
    <form class='mx-auto' onSubmit="return validarLogin(document.getElementById('dni').value, document.getElementById('pass').value);" method='POST' action='<?php echo WEB . '/?log=operador'; ?>'>
        <p class='w-100 text-center titulo-principal-login'>OPERADORES</p>
        <div class="form-group row justify-content-center">
            <label for="exampleInputEmail1" class='col-2 titulo-input-login'>DNI</label>
            <input required type="text" name='dni' class="form-control col-6" id="dni" aria-describedby="emailHelp" placeholder="Ingrese su DNI">
        </div>
        <div class="form-group row justify-content-center">
            <label for="exampleInputPassword1" class='col-2 titulo-input-login'>Password</label>
            <input required type="password" name='pass' class="form-control col-6" id="pass" placeholder="Ingrese su password">
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-success col-3 boton">INICIAR</button>
        </div>
        <div>
        <br>
        <p style='color: red;' class='text-center' id='error'></p>
            <?php 
                if (isset($_GET['err']) && $_GET['err'] == 1) {
                    echo "<p style='color: red;' id='errorPhpOperador' class='text-center'>Los datos ingresados son incorrectos</p>";
                }
            ?>
        </div>
    </form>
</div>
</div>

</section>

<script>

function validarLogin(dni, pass) {

    if ( document.getElementById( "errorPhpOperador" )) {
        document.getElementById("errorPhpOperador").innerText = "";
    }

    dni = parseInt(dni);

    if (!isNaN(dni)) {
        if (dni % 1 == 0) {
            var DNI = dni + "";
            if (DNI.length == 8) {
                if (pass != "") {
                    return true;
                } else {
                    document.getElementById("error").innerText = "la contraseña no puede estar vacia";
                    return false;
                }
            } else {
                document.getElementById("error").innerText = "el dni debe tener 8 digitos";
                return false;
            }
        } else {
            document.getElementById("error").innerText = "el formato del dni no es correcto";
            return false;
        }
    } else {
        document.getElementById("error").innerText = "el formato del dni no es correcto";
        return false;
    }
}

</script>

</body>
<?php include_once(VISTA . "footer.php"); ?>
</html>