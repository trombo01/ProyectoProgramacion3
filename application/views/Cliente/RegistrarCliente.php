<style>
label{
    font-weight: 600;
}
</style>
<div class="container-fluid d-flex flex-row bd-highlight mb-3 ">

<div class="col-md-8 py-5">

<nav aria-label="breadcrumb" class=" mb-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Registro</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cliente</li>
  </ol>
</nav>

                <h3 class="pb-2 text-center">Formulario de registro de cliente</h3>
                <hr>
                <form action="cliente/registrar" class="mx-auto" method="post" enctype="multipart/form-data" >
                    <div class="form-row">
                        
                    <div class="form-group col-md-4">
                            <label for="">Cedula</label>
                            <input class="form-control" placeholder="01223345687" type="text" name="cedula" id="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nombre del cliente</label>
                            <input type="text" placeholder="Juan Mario" class="form-control" name="nombre" id="">
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="">Apellido del cliente</label>
                            <input type="text" placeholder="Perez Martinez"  class="form-control" name="apellido" id="">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-8">
                                <label for="">Correo electronico</label>
                                <input class="form-control" type="email" placeholder="example@example.com" name="email" id="">
                            </div>
                        <div class="form-group col-md-4">
                                <label for="">Telefono</label>
                                <input class="form-control" placeholder="999-999-9999" type="tel" name="tel" id="">
                            </div>
                            <div class="form-group col-md-12">
                          <label for="">Agregar imagen:</label>
                          <input type="file" accept="imagen/png, .jpg, .jpeg" name="imagenescliente" id="">
                        </div>
                        </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small> Al hacer click en enviar. Yo acepto los <a href="">Terminos y condiciones de la pagina</a> para comprar y vender articulos.*</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary mr-4">Enviar</button>
                        <button type="reset" class="btn btn-success">Limpiar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
            <div class="card" style="width: 18rem;">
  <img src="https://cdn2.glamour.es/uploads/images/thumbs/es/glam/4/s/2019/13/maquillaje_6904_820x820.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Novedades</h5>
    <p class="card-text">Lee trucos de maquillaje para principiantes que te harán parecer profesional. Te decimos cómo maquillarte y vestir para parecer toda una modelo profesional </p>
    <a href="#" class="btn btn-primary">Leer mas.</a>
  </div>

  
</div>
            </div>
</div>
