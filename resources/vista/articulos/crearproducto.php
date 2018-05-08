<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    	  <div class="modal-dialog modal-notice">
                    	    <div class="modal-content">
                    	      <div class="modal-header">
                              <h3 class="modal-title" id="myModalLabel">Agregar Productos</h3>
                    	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="material-icons">close</i>
                    			    </button>
                    	      </div>
                    	      <div class="modal-body">
								  <div class="form-group">
                                        <form action="crearproducto.php" method="POST">
                                            <h5>Información </h5>
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label">Nombre</label>
                                                    <div class="col-md-5">
                                                      <div class="form-group has-default">
                                                          <input type="text" class="form-control" placeholder="Nombre del Articulo" name="nombre">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <div class="form-group has-default">
                                                                <select class="form-control" title="Categoria" name="idcategoria">
                                                                    <?php
                                                                    foreach ($cate as $c){
                                                                      echo "<option value='{$c->idcategoria}'>{$c->nombrecat}</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                          </div>
                                                </div>
                
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label">Descripción</label>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Ingrese la descripción de este artículo (p- ej, colores y tamaños disponibles)" name="descripcion">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5>Precio e Inventario</h5>

                                                <div class="row">
                                                        <label class="col-sm-2 col-form-label">Precio</label>
                    
                                                        <div class="col-sm-10">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="S/.0.00" name="preciov_actual">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Stock" name="stock_actual">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <select class="form-control" title="Medida" name="idmedida">
                                                                                        <?php
                                                                                        foreach ($medida as $m){
                                                                                          echo "<option value='{$m->idmedida}'>{$m->nombremedida}</option>";
                                                                                        }
                                                                                        ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                    
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="modal-footer justify-content-center">
                                                            <input type="submit" name="submit" value="Registrar" class="btn btn-info btn-round"/>
                                                      </div>
                
                                              </form>
                    	      </div>
                    	    </div>
                    	  </div>
                        </div>
</div>