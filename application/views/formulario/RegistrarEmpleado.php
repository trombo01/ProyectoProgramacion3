<?php
$base =base_url('base/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infinity Fantasia</title>
    
    <link href="<?=$base?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$base?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="<?=$base?>vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?=$base?>css/form-registrar.css">
</head>
<body>

<style>

</style>
<div class="container pt-3">
            <form class="form-horizontal mt-5" method="post" action="main/RegistrarEmpleado" role="form">
                <h3 class="text-center">Registrar empleado</h3>
                <hr>
                <div class="form-row">
                <div class="form-group col-md-5 ml-1 mr-2">
                <label for="">Nombre</label>
                <input requerid type="text" name="Nombre" placeholder="Jean Carlos" class="form-control">
                </div>
                
                <div class="form-group col-md-5 ml-2">
                <label for="">Apellido</label>
                <input requerid type="text" name="Apellido" placeholder="Nuñez Liriano" class="form-control">
                </div>
                </div>

                <div class="form-row">
                <div class="form-group ml-1 col-md-10">
                <label for="">Correo electronico</label>
                <input requerid type="email" name="email" placeholder="example@example.com" class="form-control">
                </div>

                <div class="form-group col-md-5 ml-1 mr-2">
                <label for="">Contraseña</label>
                <input requerid type="password" name="clave" placeholder="********" class="form-control">
                </div>
                
                <div class="form-group col-md-5 ml-2">
                <label for="">Confirmar contraseña</label>
                <input requerid type="password" name="confclave" placeholder="********" class="form-control">
                </div>
            
                </div>
              
                
                <div class="form-row mb-3">
                <div class="form-group col-md-6 ml-1">
                <label for="">Telefono:</label>
                <input type="tel" name="Tel" placeholder="999-999-9999" class="form-control">    
                </div>
                
                <div class="form-group ml-1  col-md-10">
                <label for="">Direccion:</label>
               <textarea name="Direccion" placeholder="Avenida San Vicente de Paúl, Carr. Mella, Santo Domingo Este 11519" class="form-control" id="" cols="40" rows="3"></textarea>
                </div> 
                </div>
                <button type="submit" class="btn btn-primary btn-block">Registar</button>
                </form>
</body>
</html>                 