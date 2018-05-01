<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    	  <div class="modal-dialog modal-notice">
                    	    <div class="modal-content">
                    	      <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel">Crear Empleado</h5>
                    	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="material-icons">close</i>
                    			    </button>
                    	      </div>
                    	      <div class="modal-body">
								  <div class="form-group">
							      <form action="empleadoController.php" method="POST">
                    

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nombre (s)</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Apellido (s)</label>
                                <input type="text" class="form-control" name="apellido">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Dirección</label>
                                <input type="text" class="form-control" name="direccion">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Telefono</label>
                                <input type="text" class="form-control" name="telefono">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Rol</label>
                              
                                <select class="form-control" data-size="7" data-style="btn btn-primary btn-round" title="Single Select" name="puesto">
                                    <option disabled selected>Seleccione</option>
                                    <option value="Vendedor">Vendedor</option>
                                    <option value="Despacho">Despacho</option>
                                </select>
                            
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">DNI</label>
                                <input type="text" class="form-control" name="dni">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                
</div>
                    	      </div>
                    	      <div class="modal-footer justify-content-center">
                                    <input type="submit" name="submit" value="Registrar" class="btn btn-info btn-round" />
                                </form>
                                </div>
                           
                    	    </div>
                    	  </div>
                    	</div>