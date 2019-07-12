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
    <!--Frameworks-->
    <!--Bootstrap & fontawasome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <link href="<?=$base?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$base?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="<?=$base?>vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<!--Ionicons & easyautocomplete-->
<link rel="stylesheet" href="<?=$base?>vendor/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="<?=$base?>vendor/jquery-ui/jquery-ui.css">
<link rel="stylesheet" href="<?=$base?>vendor/jquery-ui.custom/jquery-ui.min.css">


  <!--Personalize-->
  <link rel="stylesheet" href="<?=$base?>css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=$base?>css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
</head>
<body>
<style>
.btn-primary{
    background-color:#C300C8;
    border-color:#9A409C;
}
.btn-primary:hover{
    background-color:#8A008E;
    border-color:#EABBEB;
}
</style>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2A022C;">
  <a class="navbar-brand" href="#"><i class="fas fa-fan" style="color:#F76EDC;"></i>Infinity Fantasy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Formularios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Registrar">Registrar Articulo</a>
          <a class="dropdown-item" href="Registrar/Cliente">Registrar Cliente</a>
          <a class="dropdown-item" href="Registrar/Empleado">Registrar Empleado</a>
        </div>
      </li>
   
    </ul>
    <span class=" text-white navbar-text mr-3">
     <?= $this->session->userdata('Nombre');?>
    </span>
    <a href="main/SalirCuenta" class="text-white navbar-text btn btn-danger">
    Sign out
    </a>
  </div>
</nav>
<header id="header">
<div class="jumbotron jumbotron-fluid px-5 text-white" style="background-color:#BC24C3;">
  <h1 class="display-4">¡Bienvenido a Infinity Fantasy!</h1>
  <p class="lead">Una joya tiene el poder de ser esa cosa pequeña que puede hacerte sentir única.</p>
  <hr class="my-3">
  <p>Para ver nuestros productos</p>
  <a class="btn btn-primary btn-lg" href="main/tienda" role="button">Vea mas</a>
</div>
</header>
