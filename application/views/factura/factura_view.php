
<div class="col-md-8 py-5">
<nav aria-label="breadcrumb" class=" mb-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Ventas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Factura</li>
  </ol>
</nav>

                <h3 class="pb-2 text-center">Formulario de venta</h3>
                
<form action="factura/facturar" method="post">
<h5 class="pt-2 text-center">Informacion de factura</h5>
<hr>
<div class="row">
<div class="form-group col-md-6 input-group">
<label class="input-group-text" for="">ID Factura</label>
<input class="form-control" type="" readonly name="id_factura" value='<?=$idFactura->id_factura+1;?>'>
</div>
</div>


<div class="row">
<div class="form-group col-md-8 input-group">
<label class="input-group-text" for="">Cliente:</label>
<input type="hidden" name="idcliente">
<input readonly class="form-control" id="cliente" type="text">
<div class="input-group-prepend">
<button type="button" class="btn btn-primary btn-view" data-toggle="modal" data-target="#modal-default">
                <span class="fa fa-search"></span>
              </button>
</div>
</div>
<div class=" form-group input-group col-md-4">
<label for="" class="input-group-text">Fecha</label>
<input type="date" class="form-control" name="fecha" id="">
</div>
</div>

<h5 class="pt-2 text-center">Detalle factura</h5>
<hr>
<div class="row">
<div class="form-group col-md-8 input-group col-md-offset-2">
<label class="input-group-text"  for="">Producto:</label>
<input class="form-control" id="products" type="text">
<div id="productlist"></div>
</div>
<div class="form-group  col-md-2">
<button id="agregar" class="btn btn-success"><b>+</b> Agregar</button>
</div>
</div>

<table class="table ">
<thead>
<tr>
<th>Codigo:</th>
<th>Nombre:</th>
<th>Precio:</th>
<th>Cantidad:</th>
<th>Importe:</th>
</tr>
</thead>
<tbody id="detallesproducto">
<!--Hacer-->
</tbody>
</table>
<div class="row">
    <div class="form-group input-group col-md-4 col-md-offset-2">
    <label for="" class="input-group-text">Subtotal:</label>
    <input readonly type="text" name="subtotal" name="subtotal" class="form-control">
    </div>
    <div class="form-group  input-group col-md-4 col-md-offset-2">
    <label for="" class="input-group-text">ITBS</label>
    <input readonly type="text" id="ITBS" name="ITBS" class="form-control">
    </div>

    
    <div class="form-group input-group col-md-4 col-md-offset-2">
    <label for="" class="input-group-text">Total:</label>
    <input readonly type="text" name="Total" id="Total" class="form-control">
    </div>

    
</div>

<button type="submit" class="btn btn-success">Guardar</button>
</form>

</div>

<div class=" modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Listado de clientes</h4>  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                
              </div>
              <div class="modal-body">
                <table class="table table-bordered btn-hover">
                <thead>
                <tr>
                <th>ID:</th>
                <th>Nombre:</th>
                <th>Tel:</th>
                <th>Correo:</th>
                </tr>
                </thead>
                <tbody>
                <?php if(!empty($Clientes)):?>
                   <?php foreach ($Clientes as $cliente):?>
                    <tr>
                    <td><?= $cliente->id_cliente?></td>
                    <td><?= $cliente->Nombre.' '.$cliente->Apellido?></td>
                    <td><?= $cliente->Tel?></td>
                    <td><?= $cliente->Correo?></td>
                    <?php $dataCliente= $cliente->id_cliente.'@'
                    .$cliente->Nombre.'@'.$cliente->Apellido.'@'
                    .$cliente->Tel.'@'.$cliente->Correo;?>
                    <td><button class="btn btn-success btn-check" value="<?=$dataCliente?>"><span class="fa fa-check"></span></button></td>
                    </tr>
                    
<?php endforeach;?>
<?php endif; ?>
                </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button> 
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

     