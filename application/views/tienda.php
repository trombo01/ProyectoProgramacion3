<?php
$baseurl=base_url();
?>
<section class="container-fluid d-flex flex-row bd-highlight mb-3 text-justify">
<article class="col-md-8">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Tienda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Collares</li>
  </ol>
</nav>

<?php if(!empty($articulos)):?>
<?php foreach($articulos as $articulo):?>
<!--items2-->

<div class="row mt-2 border-top mb-5">
<div class="col-md-8">
<h2 class="mb-4 mt-3 text-left"><?=$articulo->NOMBRE?></h2>
        <div class="align-self-center">
        <h4>Descripcion:</h4>
        <p><?=$articulo->DESCRIPCION?></p>
        </div>
</div>
<div class="col-md-4 mt-4">
    <img   src="<?=$baseurl.'uploads/img/'.$articulo->rutaimagen?>" class="rounded mx-auto img-fluid" alt="">
    <form method="POST" action="producto/AgregarExistencia">
    <div class="pt-3 form-group input-group">
    <label class="input-group-text">Cantidad:</label>
    <?php 
    $usuario=$this->session->userdata('Nombre');
    if(!empty($usuario)):?>
    
    <input type="number" name="stock" class="form-control col-md-3" value="<?=$articulo->EXISTENCIA?>" id="">  
     <input type="hidden" name="id_articulo" value="<?=$articulo->id_articulo?>">
      <button type="submit" class='btn btn-primary'>+</button>
      </form>
<?php else:?>
<input type="number" readonly name="" class="form-control col-md-3" value="<?=$articulo->EXISTENCIA?>" id="">
<?php endif;?>
    </div>
    <p><b>Precio:</b> RD$<?=$articulo->PRECIO?></p>
    <a href="factura?=<?=$articulo->id_articulo?>" class="btn btn-primary">Comprar</a>
</div>
</div>
<?php endforeach;?>
<?php endif;?>
</article>
<!--Aside-->
<div class="col-md-4 d-flex justify-content-end">
            <div class="card" style="width: 18rem;">
  <img src="https://cdn2.glamour.es/uploads/images/thumbs/es/glam/4/s/2019/13/maquillaje_6904_820x820.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Novedades</h5>
    <p class="card-text">Lee trucos de maquillaje para principiantes que te harán parecer profesional. Te decimos cómo maquillarte y vestir para parecer toda una modelo profesional </p>
    <a href="#" class="btn btn-primary">Leer mas.</a>
  </div>

  
</div>
</section>