<div class="container-fluid d-flex flex-row bd-highlight mb-3 ">

<div class="col-md-8 py-5 ">

<nav aria-label="breadcrumb" class="mb-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Formulario</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar articulo</li>
  </ol>
</nav>
                <h3 class="pb-4 text-center">Registrar articulo</h3>
                <form action="producto/Subirarticulo" method="post" enctype="multipart/form-data" >
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for=""><b>Nombre del articulo:</b></label>
                          <input id="Full Name" name="nombre" placeholder="Nombre del articulo" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                                  <label for=""><b>Categoria:</b></label>
                                  <select id="inputcategoria" name="categoria" class="form-control">
                                    <option selected>Elige una...</option>
                                    <option>Collar</option>
                                    <option> Anillo</option>
                                    <option> Aretes</option>
                                    <option> Maquillaje</option>
                                  </select>
                        </div>
                        
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for=""><b>Cantidad:</b></label>
                            <input id="Mobile No." name="cantidad" placeholder="0" class="form-control" required="required" type="number">
                        </div>
                        <div class="form-group col-md-4">
                          <label for=""><b>Costo:</b></label>
                          <input type="text" placeholder="RD$999.99" name="costo" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                          <label for=""><b>Precio:</b></label>
                          <input type="text" placeholder="RD$999.99" name="precio" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                          <label for=""><b>  Descripcion:</b></label>
                                  <textarea id="comment" name="descripcion" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                          <label for=""><b>Agregar imagen:</b></label>
                          <input type="file" accept="imagen/png, .jpg, .jpeg" name="imagen" id="">
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
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
            <!--aside-->
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
