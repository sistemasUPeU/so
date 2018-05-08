<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    	  <div class="modal-dialog modal-notice">
                    	    <div class="modal-content">
                    	      <div class="modal-header">
                              <h3 class="modal-title" id="myModalLabel">Crear Cliente</h3>
                    	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="material-icons">close</i>
                    			    </button>
                    	      </div>
                    	      <div class="modal-body">
								  <div class="form-group">
							      <form action="clientecontroller.php" method="POST">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="bmd-label-floating">Razón Social</label>
                                <input type="text" class="form-control" name="rs">
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                             <label class="bmd-label-floating">RUC</label>
                             <input type="text" class="form-control" name="ruc">
                          </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">DNI</label>
                                <input type="number" class="form-control" name="dni">
                            </div>
                        </div>
                    </div>

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
                    </div>
                    <div class="clearfix"></div>
                
</div>
                    	      </div>
                    	      <div class="modal-footer justify-content-center">
                                    <input type="submit" name="submit" value="Registrar" class="btn btn-info btn-round" data-dismiss="modal"/>
                    	      </div>
                                </form> 
                    	      </div>
                    	    </div>
                    	  </div>
                    	</div>