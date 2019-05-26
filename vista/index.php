
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a tu WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php include_once(VISTA . "head.php"); ?>
    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1>Por favor ingresa o regístrate</h1>

      <a href="login.php">Iniciar</a> o
      <a href="registrarse.php">Regístrate</a>
    <?php endif; ?>
  </body>
</html>