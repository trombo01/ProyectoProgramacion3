<?php
$base =base_url('base/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
  <link href="<?=$base?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="<?=$base?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="<?=$base?>vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= $base?>css/formcss.css">
</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6" style="background-color:#241525;">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">¡Bienvenido de vuelta!</h3>
              <form method='post' action='main/IngresarCuenta'>
                <div class="form-label-group">
                  <input type="email" name="Usuario" id="inputUsuario" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputUsuario">Correo Eletronico</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name='contrasena' class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Contraseña</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input"  id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Recordar contraseña</label>
                </div>
                <button class="btn btn-lg btn-danger btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                <div class="text-center">
                  <a class="small" href="registro">¿Deseas Registrarse?</a></div>
              </form>
            </div>
          </div>
          <script>
          
          </script>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>