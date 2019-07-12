<?php
$base=base_url('base/');
?>
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright © Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="<?=$base?>vendor/jquery-ui/external/jquery/jquery.js"></script>
  <script src="<?=$base?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?=$base?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?=$base?>vendor/jquery-ui/jquery-ui.js"></script>
  
  <!-- Contact Form JavaScript -->
  <script src="<?=$base?>js/jqBootstrapValidation.js"></script>
  <script src="<?=$base?>js/contact_me.js"></script>
  <script src="<?=$base?>js/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=$base?>js/fastclick/lib/fastclick.js"></script>

  <!-- Custom scripts for this template -->
 <!--<script src="<?=$base?>/js/freelancer.min.js"></script>-->

<!-- AdminLTE App -->
<script src="<?=$base?>js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$base?>js/demo.js"></script>
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

  });
</script>
<script>
$(document).ready(function(){
  $('#products').keyup(function(){
  var query= $(this).val();
  if(query !=''){
    $.ajax({
      url:'factura/getproducto',
      method:'POST',
      data:{query:query},
      success:function(data){
        $('#productlist').fadein();
        $('#productlist').html(data);
      }
    });
  }
  });
});
</script>
</body>

</html>
