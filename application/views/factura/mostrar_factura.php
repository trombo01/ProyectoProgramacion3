<?php
$base=base_url('Plantilla/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$base?>css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?=$base?>vendor/jquery-ui/jquery-ui.css">
<link rel="stylesheet" href="<?=$base?>vendor/jquery-ui.custom/jquery-ui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link href="<?=$base?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=$base?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
    <div class="row contenido_factura">
    <div class="col-xs-12 text-center">
		<b>Infinity fantasy</b><br>
		Calle Moquegua 430 <br>
		Tel. 999-999-9999 <br>
		Email:infinityfantasy@gmail.com
	</div>
</div> <br>
<div class="row">
	<div class="col-xs-6">	
		<b>CLIENTE</b><br>
		<b>Nombre:</b> <?php echo $venta->Nombre; ?> <br>
		<b>Telefono:</b> <?php echo $venta->Tel; ?> <br>
		<b>Correo Electornico:</b> <?php echo $venta->Correo; ?><br>
	</div>	
</div>
<br>
<div class="row">
	<div class="col-xs-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Importe</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($detalles as $detalle):?>
				<tr>
					<td><?=$detalle->id_producto;?></td>
					<td><?=$detalle->NOMBRE;?></td>
					<td><?=$detalle->COSTO;?></td>
					<td><?=$detalle->Cantidad;?></td>
					<td><?=$detalle->total;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" class="text-right"><strong>Subtotal:</strong></td>
					<td><?php echo $venta->subtotal; ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>IGV:</strong></td>
					<td><?php echo $venta->itbs; ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Total:</strong></td>
					<td><?php echo $venta->total; ?></td>
				</tr>
			</tfoot>
		</table>
        <button type="button" id="btn btn-primary btn-imprimir"><span class="fa fa-print"> Imprimir</span></button>
	</div>
</div>
    </div>
 