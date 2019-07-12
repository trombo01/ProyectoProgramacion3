<?php
$base=base_url('base/');
?>
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright © Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  <script src="<?=$base?>vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script src="<?=$base?>js/fastclick/lib/fastclick.js"></script>
  <script src="<?=$base?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=$base?>js/adminlte.min.js"></script>
  <script src="<?=$base?>js/jQuery.print.js"></script>
  <script>    
  $(document).ready(function() {
   
   //boton ver del modal
   $(".btn-view").on('click',function(){
     var id= $(this).val();
     $.ajax({
       url:base_url+"cliente/view/"+id,
       type:"GET",
       success:function(resp){
        $('#modal-default .modal-body').html(resp);
        // alert(resp)
       }
     });
   });
   //Productos
   
   $('.sidebar-menu').tree();
//boton Check del modal
     $('.btn-check').on('click',function(){
     cliente= $(this).val();
     infocliente= cliente.split("@");
     $('#idcliente').val(infocliente[0]);
     Cliente=  infocliente[1]+' '+infocliente[2];
     $('#cliente').val(Cliente);
     $('#modal-default').modal('hide');
   });
//Autocomplete
$("#products").autocomplete({
      source:function(request, response){
        $.ajax({
          url:base_url+"factura/getproducto",
          type:"POST",
          datatype:"json",
          data:{producto:request.term},
          success:function(data){
            console.log('hola');
            response(data);
          },
        });
      },
      minlength:2,
      select:function(event,ui){
       data= ui.item.id_producto+'@'
       +ui.item.label+'@'
       +ui.item.Precio+'@'
       +ui.item.Cantidad ;
      $('#agregar').val(data);
      }
    });
    $('#agregar').on('click',function(){
        datos=$(this).val();
        if(datos !=''){
            infoproducto=data.split('@');
            tabla="<tr>";
            tabla+="<td> <input type='hidden' value='"+infoproducto[0]+"' name='id_art[]'>"+infoproducto[0]+"</td>";
            tabla+="<td>"+infoproducto[1]+"</td>";
            tabla+="<td> <input type='hidden' value='"+infoproducto[2]+"' name='precio_art[]'>"+infoproducto[2]+"</td>";
            tabla+="<td><input type='number' name='cantidad_art[]' class='form-control cantidad' value='1'></td>";
            tabla+="<td> <input type='hidden' value='"+infoproducto[2]+"' name='import_art[]'> <p>"+infoproducto[2]+"</p></td>";
            tabla+="<td><button class='btn btn-danger remover-producto'><span class='fa fa-remove'></span></button></td>";
                        tabla+="</tr>";
            $('#detallesproducto').append(tabla);
            CalculosFactura();
       $('#agregar').val(null);
       $('#products').val(null);
        }else{
            alert('El detalle de la factura esta vacia');
        }
    });
    $('.remover-producto').on('click',function(){
        $(this).closest("tr").remove();
        CalculosFactura();
    });
    $('.cantidad').on('keyup',function(){
       cantidad= $(this).val();
       precio= $(this).closest("tr").find("td:eq(2)").text();
       importe = cantidad * precio;
       $(this).closest("tr").find('td:eq(4)').children('p').text(importe.toFixed(2));
       $(this).closest("tr").find('td:eq(4)').children('input').val (importe);
       CalculosFactura();
       
    });
    //imprimir
    $(document).ready(function(){
        $('.btn-imprimir').on('click',function(){
            $('.contenido_factura').print();
        });
    });
 });
 function CalculosFactura(){
     subtotal =0;
     $('#detallesproducto tr').each(function(){
         subtotal= subtotal+ Number($(this).find('td:eq(4)').text);
     });
     $('input[name=subtotal]').val(subtotal.toFixed(2));
     itbs= subtotal*0.18;
     $('input[name=ITBS]').val(itbs.toFixed(2));
     total= subtotal+itbs;
     $('input[name=Total]').val(total.toFixed(2));
     
 }
  </script>
  </body>
  </html>